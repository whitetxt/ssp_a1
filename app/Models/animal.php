<?php

namespace App\Models;

use CodeIgniter\Model;

class Animal extends Model
{
    protected $table = "animal_info";
    protected $primaryKey = "id";
    protected array $casts = [
        "id" => "int",
    ];
    protected $fields = [
        "id",
        "name",
        "description",
        "species",
        "origin",
        "size",
        "habitat",
        "young",
        "diet",
        "population",
        "looks",
        "image",
        "image2",
    ];
}