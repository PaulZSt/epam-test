<?php

class Controller
{
    protected $view;

    function __construct()
    {
        // ++ here something like views or counter
        $this->view = new View();
    }
}
