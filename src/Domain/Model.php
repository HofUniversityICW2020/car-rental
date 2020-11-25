<?php
namespace HofUniversityICW\CarRental\Domain;

use HofUniversityICW\CarRental\Infrastructure\Database;

class Model
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var Brand
     */
    public $brand;

    public static function findById(int $id): ?Model
    {
        $statement = Database::getInstance()
            ->getConnection()
            ->prepare(
                'SELECT * FROM `model` WHERE `id`=:id;'
            );
        $statement->execute(['id' => $id]);
        $item = $statement->fetch(\PDO::FETCH_ASSOC);
        if (empty($item)) {
            return null;
        }
        return self::buildFromArray($item);
    }

    private static function buildFromArray(array $item): Model
    {
        $model = new Model();
        $model->id = $item['id'];
        $model->name = $item['name'];
        $model->brand = Brand::findById($item['brand']);
        return $model;
    }
}
