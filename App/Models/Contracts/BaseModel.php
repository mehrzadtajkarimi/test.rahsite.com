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


    public function getAttribute($key)
    {
        if (!$key || !array_key_exists($key, $this->attributes)) {
            return NULL;
        }
        return $this->attributes[$key];
    }
    public function getAttributes()
    {
        return $this->attributes;
    }


    public function __get($key)
    {
        return $this->getAttribute($key);
    }
}
