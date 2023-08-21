<?php

class DbKonekcija
{
    private $host;
    private $username;
    private $password;
    private $dbname;
    private $pdo;

    public function __construct($host, $username, $password, $dbname) {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->dbname = $dbname;

        $dsn = "mysql:host=$this->host;dbname=$this->dbname;charset=utf8mb4";
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ];

        try {
            $this->pdo = new PDO($dsn, $this->username, $this->password, $options);
        } catch (PDOException $e) {
            throw new Exception("Connection failed: " . $e->getMessage());
        }
    }

    public function create($table, $data) {
        $keys = implode(', ', array_keys($data));
        $values = ':' . implode(', :', array_keys($data));

        $sql = "INSERT INTO $table ($keys) VALUES ($values)";
        $stmt = $this->pdo->prepare($sql);

        try {
            $stmt->execute($data);
            return $this->pdo->lastInsertId();
        } catch (PDOException $e) {
            throw new Exception("Create operation failed: " . $e->getMessage());
        }
    }

    public function read($table, $condition = '', $params = []) {
        $sql = "SELECT * FROM $table";

        if ($condition !== '') {
            $sql .= " WHERE $condition";
        }

        $stmt = $this->pdo->prepare($sql);

        try {
            $stmt->execute($params);
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            throw new Exception("Read operation failed: " . $e->getMessage());
        }
    }

    public function readRawQuery($rawSql) {

        $stmt = $this->pdo->prepare($rawSql);

        try {
            $stmt->execute([]);
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            throw new Exception("Read operation failed: " . $e->getMessage());
        }
    }

    public function update($table, $data, $condition, $params = []) {
        $set = implode(', ', array_map(function($key) {
            return "$key = :$key";
        }, array_keys($data)));

        $sql = "UPDATE $table SET $set WHERE $condition";
        $stmt = $this->pdo->prepare($sql);

        try {
            $stmt->execute(array_merge($data, $params));
            return $stmt->rowCount();
        } catch (PDOException $e) {
            throw new Exception("Update operation failed: " . $e->getMessage());
        }
    }

    public function delete($table, $condition, $params = []) {
        $sql = "DELETE FROM $table WHERE $condition";
        $stmt = $this->pdo->prepare($sql);

        try {
            $stmt->execute($params);
            return $stmt->rowCount();
        } catch (PDOException $e) {
            throw new Exception("Delete operation failed: " . $e->getMessage());
        }
    }
}