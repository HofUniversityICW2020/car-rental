<?php
namespace HofUniversityICW\CarRental\Domain;

use HofUniversityICW\CarRental\Infrastructure\Database;

class Car
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $vin;

    /**
     * @var float
     * @todo Shall be substituted with `Rate` model (multiple rates)
     */
    public $price;

    /**
     * @var Model
     */
    public $model;

    /**
     * @var Color
     */
    public $color;

    /**
     * Transient
     *
     * @var Engine
     */
    public $engine;

    /**
     * @return Car[]
     */
    public static function findAll(): array
    {
        $statement = Database::getInstance()
            ->getConnection()
            ->prepare(
                'SELECT * FROM `car` WHERE `available` = 1;'
            );
        $statement->execute();
        $items = $statement->fetchAll(\PDO::FETCH_ASSOC);
        return array_map(
            function (array $item) {
                return self::buildFromArray($item);
            },
            $items
        );
    }

    public static function findById(int $id): ?Car
    {
        $statement = Database::getInstance()
            ->getConnection()
            ->prepare(
                'SELECT * FROM `car` WHERE `id`=:id;'
            );
        $statement->execute(['id' => $id]);
        $item = $statement->fetch(\PDO::FETCH_ASSOC);
        if (empty($item)) {
            return null;
        }
        return self::buildFromArray($item);
    }

    private static function buildFromArray(array $item): Car
    {
        $car = new Car();
        $car->id = $item['id'];
        $car->vin = $item['vin'];
        $car->price = $item['price'];
        $car->color = Color::findById($item['color']);
        $car->model = Model::findById($item['model']);
        $car->engine = Engine::findByCar($car->id);
        return $car;
    }

    public function getUri(string $origin = null): string
    {
        $parameters = [$this->id];
        if ($origin !== null) {
            $parameters[] = $origin;
        }
        return sprintf(
            '/car/%s', // /car/123, /car/123/cars
            implode('/', $parameters)
        );
    }
}
