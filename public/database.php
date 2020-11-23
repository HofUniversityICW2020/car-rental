<?php
class Database
{
    public function connect(): PDO
    {
        $connection = new PDO('mysql:host=db;dbname=db', 'db', 'db');
        return $connection;
    }
}

