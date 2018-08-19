<?php

namespace application\controllers;

use application\core\Controller;

class MainController extends Controller
{

    public function indexAction()
    {
        $result = $this->model->getPupil();
        $vars = [
            'pupils' => $result,
        ];
        $this->view->render('Школьный журнал', $vars);
    }

    public function addAction()
    {
        if (isset($this->route['error'])) {
            $errorCode = $this->route['error'];
            if (array_key_exists($errorCode, $this->error)) {
                $params = [
                    'error' => $this->error[$this->route['error']],
                ];
                $this->view->render('Добавить ученика в школьный журнал', $params);
            } else {
                $this->view->errorCode(404);
            };
        } else {
            $this->view->render('Добавить ученика в школьный журнал');
        }
    }

    public function updateAction()
    {
        if ($this->route['id']) {
            $params = [
                'id' => $this->route['id'],
            ];
            $pupil = $this->model->getPupilById($params);
            if (isset($this->route['error'])) {
                $errorCode = $this->route['error'];
                if (array_key_exists($errorCode, $this->error)) {
                    $pupil['error'] = $this->error[$this->route['error']];
                } else {
                    $this->view->errorCode(404);
                };
            };
            $this->view->render('Обновить данные ученика в школьном журнале', $pupil);
        } else {
            $this->view->errorCode(404);
        };
    }

}