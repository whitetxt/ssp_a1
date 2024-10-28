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
        $events = $events->findAll();
        $indexes = array_rand($events, min(3, count($events)));
        $final_events = [];
        foreach ($indexes as $idx) {
            $final_events[] = $events[$idx];
        }
        $data = [
            "title" => "Home",
            "animals" => $final_animals,
            "events" => $final_events,
        ];
        
        return view('Home/index', $data);
    }
}