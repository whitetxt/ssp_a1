<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $animals = model("Animal");
        $animals = $animals->findAll();
        $indexes = array_rand($animals, 3);
        $final_animals = [];
        foreach ($indexes as $idx) {
            $final_animals[] = $animals[$idx];
        }
        $events = model("Event");
        $events = $events->where("date >= current_date")->orderBy("date", "ASC")->limit(3)->findAll();
        $data = [
            "title" => "Home",
            "animals" => $final_animals,
            "events" => $events,
        ];
        
        return view('Home/index', $data);
    }
}