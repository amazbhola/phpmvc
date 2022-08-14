<?php

namespace App\Models;

use App\Base\Model;

class Setting extends Model
{
    protected static $table = "settings";
    public function addSetting($params)
    {
        $this->insert(self::$table, $params);
    }
    public function showSettingData()
    {
        return $this->select(self::$table, '*', null, null, null, null);
    }

    public function updateSettingData($params, $where)
    {
        $this->update(self::$table, $params, $where);
    }
    public function find($id = null)
    {

        return $this->select(self::$table, '*', null, 'setings_id =' . $id, null, null);
    }
}
