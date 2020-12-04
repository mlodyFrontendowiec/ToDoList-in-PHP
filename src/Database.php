<?php

declare(strict_types=1);

namespace App;

use PDO;
use PDOException;

class Database
{
    private PDO $connection;

    public function __construct(array $config)
    {
        $this->createConnection($config);
    }

    public function createConnection(array $config):void
    {
        $dsn = "mysql:dbname={$config['database']};host={$config['host']}";
        $this->connection = new PDO($dsn, $config['user'], $config['password']);
    }
    public function createTask(array $data):void
    {
        $title = $this->connection->quote($data['title']);
        $description =  $this->connection->quote($data['description']);
        $created = $this->connection->quote(date('Y-m-d H:i:s'));

        $query = "INSERT INTO list(title,description,created)
        VALUE ($title,$description,$created)";


        $this->connection->exec($query);
    }
    public function getTask()
    {
        $query = "SELECT * FROM list";

        $result = $this->connection->query($query);
        $tasks = $result->fetchAll(PDO::FETCH_ASSOC);
        return $tasks;
    }
}
