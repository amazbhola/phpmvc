<?php

namespace App\Models;

use App\Base\Model;

class Blog extends Model
{
    protected static $table = 'blogs';
    public function addBlog($params)
    {
        $this->insert(self::$table, $params);
    }
    public function showBlog()
    {
        return $this->select(self::$table, '*', null, null, '`blog_id` DESC', 5);
    }
    public function find($id = null)
    {

        return $this->select(self::$table, '*', null, 'blog_id =' . $id, null, null);
    }
    public function updateBlog($params, $where)
    {

        $this->update(self::$table, $params, $where);
    }

    public function destroy(string $id = null)
    {

        $this->delete(self::$table, 'blog_id', $id);
    }
}
