<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $animals = model("Animal");
        $animals = $animals->findAll();
        $indexes = array_rand($animals, 3);
        $final_arr = [];
        foreach ($indexes as $idx) {
            $final_arr[] = $animals[$idx];
        }
        $data = [
            "title" => "Home",
            "animals" => $final_arr,
        ];
        
        return view('Home/index', $data);
    }
}