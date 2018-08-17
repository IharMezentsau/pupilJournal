<?php

namespace application\controllers;

use application\core\Controller;

class PupilController extends Controller
{
    public function addAction()
    {
        if (!empty($_POST)) {
            //$params=$_POST;
            if ($this->model->pupilValidate($_POST)) {
                $params = $this->protectedHtml($_POST);
                $this->model->addPupil($params);
                $this->view->redirect('/');
            } else {
                //$this->view->message('error', $this->model->error);
            };
        };

    }

    public function updateAction()
    {
        if (!empty($_POST)) {
            $params=$_POST;
            //$post = $this->protectedHtml($_POST);
            $this->model->updatePupil($params);
            $this->view->redirect('/');
        };
    }

    public function deleteAction()
    {
        if (!$this->model->isIdExists($this->route['id'])) {
            $this->view->errorCode(404);
        }
        $this->view->redirect('/');
    }

    public function protectedHtml($post)
    {
        $post = [
            'name' => htmlentities($_POST['name']),
            'familyname' => htmlentities($_POST['familyname']),
            'fathername' => htmlentities($_POST['fathername']),
            'bidth' => htmlentities($_POST['bidth']),
        ];

        return $post;
    }
}