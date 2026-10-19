<?php

namespace App\Models;

abstract class Model {
    protected static $table;

    public $id;

    public static function all() {
        $db = new DB();
        $return = $db->all(static::$table, static::class); 
     }
}