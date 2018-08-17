<?php

namespace application\models;

use application\core\Model;

class Main extends Model
{
    public function getPupil()
    {
        $result = $this->db->getRow('SELECT * FROM t_pupil');
        return $result;
    }

    public function getPupilById($params)
    {
        $result = $this->db->getRow("SELECT * FROM t_pupil WHERE id=:id", $params);

        return $result[0];
    }
}