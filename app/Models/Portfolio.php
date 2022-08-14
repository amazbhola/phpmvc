<?php

namespace App\Models;

use App\Base\Model;

class Portfolio extends Model
{
    private static $table = 'portfolios';
    public function showData()
    {
        return $this->select(self::$table, '*', null, null, null, null);
    }

    public function setData($data)
    {

        $this->insert(self::$table, $data);
    }
}
