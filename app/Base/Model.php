<?php

namespace App\Base;

use Exception;
use PDO;

class Model
{
    public array $massage = array();
    public function __construct()
    {
        $this->connect();
    }
    /**
     * Connect Database And Add .env 
     *
     * @return PDO
     */
    public function connect(): PDO
    {
        try {
            $dbHost = isset($_ENV['DB_HOST']) ? $_ENV['DB_HOST'] : '';
            if (empty($dbHost)) {
                throw new Exception("please give the Host address in .env");
            }
            $dbName = isset($_ENV['DB_NAME']) ? $_ENV['DB_NAME'] : '';
            if (empty($dbName)) {
                throw new Exception("please give the database name in .env");
            }
            $dbPassword = isset($_ENV['DB_PASSWORD']) ? $_ENV['DB_PASSWORD'] : '';

            $dbUser = isset($_ENV['DB_USER']) ? $_ENV['DB_USER'] : '';
            if (empty($dbUser)) {
                throw new Exception("please give the user name in .env");
            }

            return new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPassword);
        } catch (Exception $th) {
            throw $th;
        }
    }
    private function tableExist($table)
    {
        $sql = "SHOW TABLES IN {$_ENV['DB_NAME']} LIKE '$table'";
        $tableName = $this->connect()->query($sql);
        if ($tableName) {
            if ($tableName->rowCount() == 1) {
                return true;
            } else {
                array_push($this->massage, $table . " dose not exist in this " . $this->db);
                return false;
            }
        }
    }
    public function insert(string $table, array $params = [])
    {

        if ($this->tableExist($table)) {

            $tableColumn = implode(', ', array_keys($params));
            $tableValue = implode("', '", $params);

            $sql = $this->connect()->prepare("INSERT INTO $table ($tableColumn) VALUE ('$tableValue')");


            if ($sql->execute()) {
                array_push($this->massage, "Data Insert Successfully");

                return true;
            } else {
                array_push($this->massage, $this->mysqli->error);
                return false;
            }
        }
    }
    public function select($table, $row = '*', $join = null, $where = null, $order = null, $limit = null)
    {
        $sql = "SELECT $row FROM $table";
        if ($join != null) {
            $sql .= " JOIN $join";
        }
        if ($where != null) {
            $sql .= " WHERE $where";
        }
        if ($order != null) {
            $sql .= " ORDER BY $order";
        }
        if ($limit != null) {
            if (isset($_GET['page'])) {
                $page = $_GET['page'];
            } else {
                $page = 1;
            }
            $start = ($page - 1) * $limit;
            $sql .= " LIMIT $start, $limit";
        }

        $data = $this->connect()->prepare($sql);
        $data->execute();
        return $data->fetchAll(PDO::FETCH_ASSOC);
    }
    public function update($table, $params = [], $where = null)
    {
        if ($this->tableExist($table)) {
            $args = array();
            foreach ($params as $key => $value) {
                $args[] = "$key = '$value'";
            }
            $sql = "UPDATE $table SET " . implode(', ', $args);
            if ($where != null) {
                $sql .= " WHERE " . $where;
            }
            $data = $this->connect()->prepare($sql);

            if ($data->execute()) {
                array_push($this->massage, "Data Updated successfully");
            } else {
                array_push($this->massage, "Data Updated fail");
            }
        } else {
            return false;
        }
    }
    public function delete(string $table, string $column_name,  string $where = null)
    {
        if ($this->tableExist($table)) {
            $sql = "DELETE FROM $table";
            if ($where != null) {
                $sql .= " WHERE {$column_name}=" . $where;
            }
            $result = $this->connect()->prepare($sql);
            if ($result->execute()) {
                array_push($this->massage, "Delete Data id no " . $where);
            } else {
                array_push($this->massage, "Delete fail id no " . $where);
            }
        }
    }
}
