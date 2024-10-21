<?php

namespace App\Controllers;

class Animal extends BaseController
{
    public function index(): string
    {
        $animals = model("Animal");
        $animals = $animals->findAll();
        $data = [
            "title" => "Animals",
            "animals" => $animals,
        ];
        
        return view('Animals/index', $data);
    }
}