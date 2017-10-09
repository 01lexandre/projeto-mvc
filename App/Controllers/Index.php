<?php

namespace App\Controllers;


class Index
{

    public function index()
    {
        include '../App/Views/Index/index.phtml';
    }

    public function empresa()
    {
        echo "Controller: Index Action: Empresa";
    }
}