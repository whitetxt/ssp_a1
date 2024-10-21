<?php

namespace App\Models;

use CodeIgniter\Model;

class Animal extends Model
{
    protected $table = "animal_info";
    protected $primaryKey = "id";
    protected array $casts = [
        "id" => "int",
        "age" => "int",
        // "arrival_date" => "timestamp",
        "is_rescued" => "bool",
    ];
    protected $fields = [
        "id",
        "name",
        "description",
        "species",
        "age",
        "arrival_date",
        "is_rescued",
    ];
}