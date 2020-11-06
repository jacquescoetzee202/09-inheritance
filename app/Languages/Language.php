<?php

declare(strict_types=1);

namespace App\Languages;

abstract class Language
{
    protected $name;

    public function name() : string
    {
        return $this->name;
    }

    abstract public function hello() : string;

}