<?php

return [
    //MainController
    '' => [
        'controller' => 'main',
        'action' => 'index',
    ],

    'add' => [
        'controller' => 'main',
        'action' => 'add',
    ],

    'add/error/{error:\d+}' => [
        'controller' => 'main',
        'action' => 'add',
    ],

    'update/{id:\d+}' => [
        'controller' => 'main',
        'action' => 'update',
    ],

    'update/{id:\d+}/{error:\d+}' => [
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

    'delete/{id:\d+}' => [
    'controller' => 'pupil',
        'action' => 'delete',
    ],
];