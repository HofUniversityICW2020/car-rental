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

    private static function buildFromArray(array $item): Car
    {
        $car = new Car();
        $car->id = $item['id'];
        $car->vin = $item['vin'];
        $car->color = Color::findById($item['color']);
        $car->model = Model::findById($item['model']);
        $car->engine = Engine::findByCar($car->id);
        return $car;
    }

    public function getUri(): string
    {
        return sprintf('/car-detail.php?vin=%s&origin=car-list', $this->vin);
    }
}
