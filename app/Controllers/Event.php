<?php

namespace App\Controllers;

class Event extends BaseController
{
    public function index(): string
    {
        $event_db = model("Event");
        $events = $event_db->where("date >= current_date")->orderBy("date", "ASC")->findAll();
        $past_events = $event_db->where("date < current_date")->orderBy("date", "DESC")->findAll();
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
        $event_types = [];
        foreach ($events as $event) {
            if (!in_array($event["audience"], $event_types)) {
                $event_types[] = $event["audience"];
            }
        }
        $data = [
            "title" => "Events",
            "events" => $events,
            "past_events" => $past_events,
            "event_types" => $event_types,
        ];
        
        return view('Events/index', $data);
    }
}