<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Ngetesaja extends BaseController
{
    public function index()
    {
        $data = [
            "title" => "Coba Aja",
            "name" => "Salma Hadid."
        ];

        echo view('index', $data);
    }
}
