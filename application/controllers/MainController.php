<?php

namespace application\controllers;

use application\core\Controller;

class MainController extends Controller
{
    public function indexAction()
    {
        $result = $this->model->getPupil();
        //debug($result);
        $vars = [
            'pupils' => $result,
        ];
        $this->view->render('Школьный журнал', $vars);
    }

    public function addAction()
    {
        $this->view->render('Добавить ученика в школьный журнал');
    }

    public function updateAction()
    {

        if ($this->route['id']) {

            $params = [
                'id' => $this->route['id'],
            ];

            $pupil = $this->model->getPupilById($params);

            $this->view->render('Обновить данные ученика в школьном журнале', $pupil);
        } else {
            $this->view->errorCode(404);
        };
    }



}