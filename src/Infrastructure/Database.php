<?php
namespace HofUniversityICW\CarRental\Infrastructure;

class Database
{
    /**
     * @var Database
     */
    private static $instance;

    /**
     * @var \PDO
     */
    private $connection;

    public static function getInstance(): Database
    {
        if (self::$instance === null) {
            self::$instance = new Database();
            self::$instance->connect();
        }
        return self::$instance;
    }

    /**
     * Disable public constructor, use static getInstance() instead
     */
    private function __construct()
    {
    }

    private function connect(): void
    {
        $this->connection = new \PDO('mysql:host=db;dbname=db', 'db', 'db');
    }

    /**
     * @return \PDO
     */
    public function getConnection(): \PDO
    {
        return $this->connection;
    }
}

