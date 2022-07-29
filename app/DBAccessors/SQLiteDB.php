<?php

namespace App\DBAccessors;

use App\Contracts\DatabaseContract;

class SQLiteDB implements DatabaseContract {
    private $db;

    public function __construct($db){
        $this->db = $db;
    }
    public function add($name, $value){
        return [
            'name' => $name,
            'value' => $value,
            'db' => $this->db
        ];
    }
}