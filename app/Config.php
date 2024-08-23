<?php

namespace App;

use Mustache_Engine;
use Mustache_Loader_FilesystemLoader;

class Config
{
    protected array $config = [];

    /**
     * @param array $env - Accepts an array of key/value from provided source
     */
    public function __construct(array $env)
    {
        $this->config = [
            'db' => [
                'host'     => $env['DB_HOST'],
                'database' => $env['DB_DATABASE'],
                'username' => $env['DB_USER'],
                'password' => $env['DB_PASSWORD'],
                'driver'   => $env['DB_DRIVER'] ?? 'mysql'
            ],
            'mustache' => new Mustache_Engine([
                'loader' => new Mustache_Loader_FilesystemLoader(__DIR__ . '/Views'),
                'cache' => __DIR__ . '/../storage/cache/mustache',
                'entity_flags' => ENT_QUOTES,
            ])
        ];
    }

    public function __get(string $name)
    {
        return $this->config[$name] ?? null;
    }

    public function getMustache(): Mustache_Engine
    {
        return $this->config['mustache'];
    }
}
