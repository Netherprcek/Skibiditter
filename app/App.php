<?php

namespace App;

class App
{
    private static DB $db;

    /**
     * Constructs the app
     * @param Router $router -> The router to construct
     * @param array $request -> The request to construct
     * @param Config $config -> The config to construct with
     */
    public function __construct(protected Router $router, protected array $request, protected Config $config)
    {
        static::$db = new DB($config->db ?? []);
    }

    /**
     * Reusable database instance
     * @return DB -> The database instance
     */
    public static function db(): DB
    {
        return static::$db;
    }

    /**
     * Runs the app
     */
    public function run()
    {
        try {
            echo $this->router->resolve($this->request['uri'], $this->request['method']);
        } catch (\Exception) {
            // header('HTTP/1.1 404 Not Found');
            http_response_code(404);
            // Display the exception message in the browser
            echo View::make("errors/404", [
                'session_user' => $_SESSION,
                'requestedUrl' => $_SERVER['REQUEST_URI'],
                'pageTitle' => 'Page "' . $_SERVER['REQUEST_URI'] . '" not found'
            ]);
        }
    }
}
