<?php

namespace App\Models;

use App\Base\Model;

class User extends Model
{
    private static $table = 'users';

    public function setUser(array $params)
    {
        $this->insert(self::$table, $params);
    }

    public function getUser($email, $password)
    {
        $where = "email ='{$email}' AND password = '{$password}'";

        return $this->select(self::$table, '*', null, $where, null, null);
    }

    public function find($id = null)
    {
        return $this->select(self::$table, '*', null, 'role ='.$id, null, null);
    }

    public function findByID($id = null)
    {
        return $this->select(self::$table, '*', null, 'u_id ='.$id, null, null);
    }

    public function userUpdate($params, $where)
    {
        $this->update(self::$table, $params, $where);
    }
}
