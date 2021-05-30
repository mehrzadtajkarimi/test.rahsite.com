<?php

namespace App\Models\Contracts;

abstract class BaseModel implements CRUD
{

    protected $connection;
    protected $table;
    protected $primaryKey = 'id';
    protected $pageSize = 10;
    protected $attributes = [];


    // public function __construct() {

    // }


    protected function getAttribute($key)
    {
        if (!$key || !array_key_exists($key, $this->attributes)) {
            return NULL;
        }
        return $this->attributes[$key];
    }
}
