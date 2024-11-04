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

    public function view(int $animal_id): string
    {
        $animals = model("Animal");
        $animal = $animals->find($animal_id);
        if ($animal === null) {
            $data = [
                "title" => "Animal not found",
                "animal_id" => $animal_id,
            ];
            return view("Animals/404", $data);
        }
        $data = [
            "title" => $animal["name"],
            "animal" => $animal,
        ];
        return view("Animals/view", $data);
    }
}