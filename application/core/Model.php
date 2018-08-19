<?php

namespace application\core;

use application\lib\Db;

abstract class Model
{
    public $db;

    public function __construct()
    {
        $this->db = new Db();
    }

    public function htmlEnt($params)
    {
        $post = array();
        foreach ($params as $key => $value)
        {
            $post[$key] = htmlentities($value);
        }
        return $post;
    }
}