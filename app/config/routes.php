<?php

// Array with rules for MVC router
$array = array(

    'create' => 'form/create',
    'update/([-_a-z0-9]+)' => 'form/update/$1',
    'index/([-_a-z0-9]+)' => 'form/index/$1',
    '' => 'form/index',

    );
    return $array;
