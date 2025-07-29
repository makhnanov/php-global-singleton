# Simple Singleton Pattern Implementation

## Install
```shell
composer require makhnanov/php-global-singleton
```

## Requirements
```shell
PHP >= 8.4
```

## Source Code
```php
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
```

## Usage
```php
class Configurator extends GlobalSingleton
{

}

Configurator::one();

new Configurator(); // Not Works
```
