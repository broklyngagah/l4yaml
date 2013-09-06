<?php

namespace Pieter\Yaml\Facades;

use Illuminate\Support\Facades\Facade;

class Yaml extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'yaml';
    }
}