<?php
namespace HofUniversityICW\CarRental\Domain;

use HofUniversityICW\CarRental\Infrastructure\Database;

class Engine
{
    public const TYPE_GASOLINE = 1;
    public const TYPE_DIESEL = 2;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $type;

    /**
     * @var float
     */
    public $size;

    /**
     * @var int
     */
    public $power;

    /**
     * @var int
     */
    public $mileage;

    public static function findByCar(int $car): ?Engine
    {
        $statement = Database::getInstance()
            ->getConnection()
            ->prepare(
                'SELECT * FROM `engine` WHERE `car`=:car;'
            );
        $statement->execute(['car' => $car]);
        $item = $statement->fetch(\PDO::FETCH_ASSOC);
        if (empty($item)) {
            return null;
        }
        return self::buildFromArray($item);
    }

    private static function buildFromArray(array $item): Engine
    {
        $brand = new Engine();
        $brand->id = $item['id'];
        $brand->name = $item['name'];
        $brand->type = $item['type'];
        $brand->size = $item['size'];
        $brand->power = $item['power'];
        $brand->mileage = $item['mileage'];
        return $brand;
    }
}
