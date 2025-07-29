<?php

declare(strict_types=1);

class GlobalSingleton
{
    protected static array $instances = [];

    public static function one(): static
    {
        $class = static::class;

        if (isset(static::$instances[$class])) {
            return static::$instances[$class];
        }

        return static::$instances[$class] = new static();
    }

    protected function __construct()
    {

    }
}
