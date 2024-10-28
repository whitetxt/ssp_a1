<?php

namespace App\Models;

use CodeIgniter\Model;

class Event extends Model
{
    protected $table = "event_info";
    protected $primaryKey = "id";
    protected array $casts = [
        "id" => "int",
    ];
    protected $fields = [
        "id",
        "name",
        "description",
        "date",
        "audience",
    ];
}