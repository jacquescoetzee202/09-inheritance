<?php

declare(strict_types=1);

namespace App\Greeter;

use App\Languages\Language;

class Greeter
{
    private $language;

    public function __construct(Language $language)
    {
        $this->language = $language;
    }

    public function greet(string $name) : string
    {
        return "{$this->language->hello()} {$name}";
    }
}