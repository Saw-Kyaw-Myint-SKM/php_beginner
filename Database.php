<?php

class Database
{
    public $connection;
    public function __construct($config, $username = 'root', $password = 'root')
    {
        $dsn = 'mysql:' . http_build_query($config, '', ';');

        $pdo = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]);
        $this->connection = $pdo;
    }

    public function query($query, $params = [])
    {
        $statement = $this->connection->prepare($query);
        $statement->execute($params);

        return $statement;
    }
}