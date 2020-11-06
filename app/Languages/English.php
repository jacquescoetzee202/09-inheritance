<?php

declare(strict_types=1);

namespace App\Languages;

class English extends Language
{
    protected $name = "English";

    public function hello() : string
    {
        return "Hello";
    }
}