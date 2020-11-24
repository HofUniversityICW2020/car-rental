<?php
namespace HofUniversityICW\CarRental\Domain;

use HofUniversityICW\CarRental\Infrastructure\Database;

class Color
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
     * @var string
     */
    public $hex;

    public static function findById(int $id): ?Color
    {
        $statement = Database::getInstance()
            ->getConnection()
            ->prepare(
                'SELECT * FROM `color` WHERE `id`=' . $id
            );
        $statement->execute();
        $item = $statement->fetch(\PDO::FETCH_ASSOC);
        if (empty($item)) {
            return null;
        }
        return self::buildFromArray($item);
    }

    private static function buildFromArray(array $item): Color
    {
        $color = new Color();
        $color->id = $item['id'];
        $color->hex = $item['hex'];
        $color->name = $item['name'];
        return $color;
    }
}
