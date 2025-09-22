<?php

declare(strict_types=1);

namespace Core\Database;

use PDO;
use PDOException;

class Database
{
    private string $host = "127.0.0.1";
    private string $dbname = "garment_erp";
    private string $username = "root";
    private string $password = "";
    private PDO $pdo;


    public function __construct(string $host, string $dbname, string $username, string $password)
    {
        $this->host = $host;
        $this->dbname = $dbname;
        $this->username = $username;
        $this->password = $password;
        $dsn = "mysql:host={$this->host};dbname={$this->dbname};charset=utf8";

        try
        {
            $this->pdo = new PDO($dsn, $this->username, $this->password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch (PDOException $e)
        {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function getConnection(): PDO
    {
        return $this->pdo;
    }
}
