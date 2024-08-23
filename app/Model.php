<?php

declare(strict_types=1);

namespace App;

// Reusable model to access database
abstract class Model
{
    protected DB $db;


    public function __construct()
    {
        $this->db = App::db();
    }
}
