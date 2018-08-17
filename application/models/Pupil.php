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
        $this->db->query($sql, $params);
    }

    public function updatePupil($params)
    {
        $this->db->query('UPDATE t_pupil SET name=:name, familyname=:familyname,
                              fathername=:fathername, bidth=:bidth WHERE id=:id', $params);
    }

    public function deletePupil($params)
    {
        $this->db->query('DELETE FROM t_pupil WHERE id=:id', $params);
    }

    public function isIdExists($id)
    {
        $params = [
            'id' => $id,
        ];
        return $this->db->getRow('SELECT id FROM t_pupil WHERE id = :id', $params);
    }

    public function pupilValidate()
    {
        $nameLength = iconv_strlen($_POST['name']);
        $familynameLength = iconv_strlen($_POST['familyname']);
        $fathernameLength = iconv_strlen($_POST['fathername']);
        $bidth = iconv_strlen($_POST['bidth']);

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