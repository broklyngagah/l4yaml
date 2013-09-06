<?php

namespace Pieter\Yaml;

use Symfony\Component\Yaml\Parser as sfParser;
use Symfony\Component\Yaml\Exception\ParseException;

class Parser
{
    private static $path;

    private static $file;

    private static $parser;

    private static $result;

    public function __construct($path)
    {
        self::$path = $path;
        self::$parser = new sfParser();

    }

    public static function setFile($file)
    {
        self::$file = $file;
    }

    public function parsing()
    {
        try {
            self::$result = self::$parser->parse(file_get_contents(self::$path . self::$file));
        } catch(ParseException $e) {
            printf("Unable to parse [".self::$file."], %s", $e->getMessage());
        }

        return self::$result;
    }


}