<?php

namespace App;

use PDO;
use PDOException;

class DB {
    private $conn;

    public function __construct(){
        $servername = "127.0.0.1";
        $username = "root";
        $password = "example";
        $port = 33061;
        $dbname = "project";

        try {
            $this->conn = new PDO("mysql:host=$servername;port=$port;dbname=$dbname;charset=utf8mb4", $username, $password);
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function all(string $table, string $class){
        $sql = "SELECT * FROM $table";
        $result = $this->conn->query($sql);
        $result->setFetchMode(PDO::FETCH_CLASS, $class);
        return $result->fetchAll();
    }

    public function find(string $table, string $class, $id){
        $sql = "SELECT * FROM $table WHERE id=$id";
        $result = $this->conn->query($sql);
        $result->setFetchMode(PDO::FETCH_CLASS, $class);
        return $result->fetch();
    }

    public function where(string $table, string $class, $field, $value){
        $sql = "SELECT * FROM $table WHERE $field='$value'";
        $result = $this->conn->query($sql);
        $result->setFetchMode(PDO::FETCH_CLASS, $class);
        return $result->fetchAll();
    }

    public function insert($table, $fields) {
        $fieldNames = array_keys($fields);
        $fieldNamesText = implode(', ', $fieldNames);
        $fieldValuesText = implode("', '", $fields);
        $sql = "INSERT INTO $table ($fieldNamesText)
                VALUES ('$fieldValuesText')";
        $this->conn->exec($sql);
    }

    public function update($table, $fields, $id) {
        $updateValuesText = '';
        foreach($fields as $name=>$value) {
            $updateValuesText .= "$name='$value', ";
        }
        $updateValuesText = substr($updateValuesText, 0, -2);
        $sql = "UPDATE $table SET $updateValuesText WHERE id=$id";
        $this->conn->exec($sql);
    }

    public function delete($table, $id) {
        $sql = "DELETE FROM $table WHERE id=$id";
        $this->conn->exec($sql);
    }
}