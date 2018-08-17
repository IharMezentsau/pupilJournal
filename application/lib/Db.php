<?php

namespace application\lib;

use PDO;

class Db
{
    protected $db;

    public function __construct()
    {
        $config = require 'application/config/Db.php';
        $this->db = new PDO('mysql:host=' . $config['host'] . ';dbname=' .
            $config['dbname'] . '', $config['user'] , $config['password']);
    }

    public function query($sql, $params)
    {
        $stnt = $this->db->prepare($sql);
        if (!empty($params)) {
            foreach ($params as $key => $value) {
                $stnt->bindValue(':' . $key, $value);
            }
        }
        $stnt->execute();
        return $stnt;
    }

    public function getRow($sql, $params = [])
    {
        $result = $this->query($sql, $params);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
}