<?php

namespace application\controllers;

use application\core\Controller;

class PupilController extends Controller
{
    public function addAction()
    {
        if (!empty($_POST)) {
            if ($this->model->pupilValidate()) {
                $post = $this->postParams();
                $params = $this->model->htmlEnt($post);
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
            if ($this->model->pupilValidate()) {
                $post = $this->postParams();
                $params = $this->model->htmlEnt($post);
                $this->model->updatePupil($params);
                $this->view->redirect('/');
            }
        };
    }

    public function deleteAction()
    {
        if ($this->model->isIdExists($this->route['id'])) {
            $params = [
                'id' => $this->route['id'],
            ];
            $this->model->deletePupil($params);
            $this->view->redirect('/');
        } else {
            $this->view->errorCode(404);
        }
    }

    public function postParams()
    {
        $bidth = explode('.', $_POST['bidth']);
        krsort($bidth);
        $bidth = implode('.', $bidth);
        if (isset($_POST['id'])) {
            $post = [
                'id' => $_POST['id'],
                'name' => $_POST['name'],
                'familyname' => $_POST['familyname'],
                'fathername' => $_POST['fathername'],
                'bidth' => $bidth,
            ];
        } else {
            $post = [
                'name' => $_POST['name'],
                'familyname' => $_POST['familyname'],
                'fathername' => $_POST['fathername'],
                'bidth' => $bidth,
            ];
        }

        return $post;
    }
}