<?php

namespace application\models;

use application\core\Model;

class Main extends Model
{
    public function getPupil()
    {
        $query = $this->db->getRow('SELECT id, name, familyname, fathername,
                                        DATE_FORMAT(bidth,\'%d.%m.%Y\') AS bidth 
                                        FROM t_pupil');
        $result = array();
        foreach ($query as $item) {
            $item['age'] = $this->agePupil($item['bidth']);
            $result[] = $item;
        }
        return $result;
    }

    public function getPupilById($params)
    {
        $result = $this->db->getRow("SELECT id, name, familyname, fathername,
                                        DATE_FORMAT(bidth,'%d.%m.%Y') AS bidth 
                                        FROM t_pupil WHERE id=:id", $params);

        return $result[0];
    }

    public function agePupil($bidth)
    {
        $dateBidth = explode(".", $bidth);
        if($dateBidth[1] > date('m') || $dateBidth[1] == date('m') && $dateBidth[0] > date('d'))
            return (date('Y') - $dateBidth[2] - 1); // если ДР в этом году не было, то ещё -1
        else
            return (date('Y') - $dateBidth[2]);
    }
}