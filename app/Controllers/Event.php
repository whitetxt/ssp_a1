<?php

namespace App\Controllers;

class Event extends BaseController
{
    public function index(): string
    {
        $event_db = model("Event");
        $events = $event_db->where("date >= current_date")->orderBy("date", "ASC")->findAll();
        $past_events = $event_db->where("date < current_date")->orderBy("date", "DESC")->findAll();
        $data = [
            "title" => "Events",
            "events" => $events,
            "past_events" => $past_events
        ];
        
        return view('Events/index', $data);
    }
}