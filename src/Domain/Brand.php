<?php
namespace HofUniversityICW\CarRental\Domain;

use HofUniversityICW\CarRental\Infrastructure\Database;

class Brand
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    public static function findById(int $id): ?Brand
    {
        $statement = Database::getInstance()
            ->getConnection()
            ->prepare(
                'SELECT * FROM `brand` WHERE `id`=:id;'
            );
        $statement->execute(['id' => $id]);
        $item = $statement->fetch(\PDO::FETCH_ASSOC);
        if (empty($item)) {
            return null;
        }
        return self::buildFromArray($item);
    }

    private static function buildFromArray(array $item): Brand
    {
        $brand = new Brand();
        $brand->id = $item['id'];
        $brand->name = $item['name'];
        return $brand;
    }
}
