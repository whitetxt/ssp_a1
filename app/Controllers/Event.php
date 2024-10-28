<?php

namespace App\Controllers;

class Event extends BaseController
{
    public function index(): string
    {
        $events = model("Event");
        $events = $events->findAll();
        $data = [
            "title" => "Events",
            "events" => $events,
        ];
        
        return view('Events/index', $data);
    }
}