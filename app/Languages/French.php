<?php

declare(strict_types=1);

namespace App\Languages;

class French extends Language
{
    protected $name = "French";

    public function hello() : string
    {
        return "Bonjour";
    }
}