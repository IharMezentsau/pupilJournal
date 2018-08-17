<?php

return [
    //MainController
    '' => [
        'controller' => 'main',
        'action' => 'index',
    ],

    'add/{id:\d+}' => [
        'controller' => 'main',
        'action' => 'add',
    ],

    'update/{id:\d+}' => [
        'controller' => 'main',
        'action' => 'update',
    ],

    //PupilController
    'pupil/add' => [
        'controller' => 'pupil',
        'action' => 'add',
    ],

    'pupil/update' => [
    'controller' => 'pupil',
        'action' => 'update',
    ],

    'pupil/delete' => [
    'controller' => 'pupil',
        'action' => 'delete',
    ],
];