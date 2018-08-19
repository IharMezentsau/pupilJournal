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
        if (!isset($_POST['name'])) {
            $this->error = 5;
            return false;
        } elseif (!isset($_POST['familyname'])) {
            $this->error = 6;
            return false;
        } elseif (!isset($_POST['fathername'])) {
            $this->error = 7;
            return false;
        } elseif (!isset($_POST['bidth'])) {
            $this->error = 8;
            return false;
        };
        $nameLength = iconv_strlen($_POST['name']);
        $familynameLength = iconv_strlen($_POST['familyname']);
        $fathernameLength = iconv_strlen($_POST['fathername']);
        $bidthLength = iconv_strlen($_POST['bidth']);
        $bidthDay = explode('.', $_POST['bidth']);
        if ($nameLength < 2 or $nameLength > 20) {
            $this->error = 1;
            return false;
        } elseif ($familynameLength < 3 or $familynameLength > 30) {
            $this->error = 2;
            return false;
        } elseif ($fathernameLength < 3 or $fathernameLength > 50) {
            $this->error = 3;
            return false;
        } elseif (!checkdate($bidthDay[1], $bidthDay[0], $bidthDay[2]) or ($bidthLength != 10)) {
            $this->error = 4;
            return false;
        }
        return true;
    }


}