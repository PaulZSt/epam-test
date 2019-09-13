<?php

function __autoload($class_name)
{
    // Array directories with classes
    $array_paths = array(
        '/app/models/',
        '/app/modules/',
    );


    // Get path and classes from array and include
    foreach ($array_paths as $path) {


        $path = ROOT . $path . $class_name . '.php';


        if (is_file($path)) {
            include_once $path;
        }

    }
}
