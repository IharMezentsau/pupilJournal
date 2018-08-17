<?php

namespace application\models;

use application\core\Model;

class Pupil extends Model
{
    public $error;

    public function addPupil($params)
    {
        $sql = 'INSERT INTO t_pupil(name, familyname, fathername, bidth)
                VALUES(:name, :familyname, :fathername, :bidth)';
        $result = $this->db->query($sql, $params);

    }

    public function isIdExists($id)
    {
        $params = [
            'id' => $id,
        ];
        return $this->db->getRow('SELECT id FROM t_pupil WHERE id = :id', $params);
    }

    public function pupilValidate($post)
    {
        $nameLength = iconv_strlen($post['name']);
        $familynameLength = iconv_strlen($post['familyname']);
        $fathernameLength = iconv_strlen($post['fathername']);
        $bidth = iconv_strlen($post['bidth']);

        if ($nameLength < 3 or $nameLength > 20) {
            $this->error = 'Имя должно содержать от 3 до 20 символов';
            return false;
        } elseif ($familynameLength < 3 or $familynameLength > 30) {
            $this->error = 'Фамилия должна содержать от 3 до 0 символов';
            return false;
        } elseif ($fathernameLength < 3 or $fathernameLength > 50) {
            $this->error = 'Отчество должно содержать от 3 до 50 символов';
            return false;
        };

        return true;
    }

    public function htmlEnt($val)
    {
        return htmlentities($val);
    }

}