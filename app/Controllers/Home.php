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
        for ($i = 0; $i < count($events); $i++) {
            $event = $events[$i];
            $state = "";
            $date = new \DateTime($event["date"]);
            $now = new \DateTime();
            $now = new \DateTime($now->format("Y-m-d"));
            // if date is today
            if ($date->format("Y-m-d") === $now->format("Y-m-d")) {
                $state = "today";
            } else if ($now->diff($date)->days < 7){
                $state = "soon";
            }
            $text = $state;
            $days = $now->diff($date)->days;
            if ($state === "soon") {
                $text = "In {$days} day";
                if ($days > 1) {
                    $text .= "s";
                }
            }
            $events[$i]["state"] = $state;
            $events[$i]["text"] = $text;
        }
        $data = [
            "title" => "Home",
            "animals" => $final_animals,
            "events" => $events,
        ];
        
        return view('Home/index', $data);
    }
}