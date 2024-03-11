<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $db = \Config\Database::connect();

        $query = $db->query('SELECT * FROM productos');

        $result = $query->getResult();
    
        return view('welcome_message', ['result' => $result]);
    }
}
