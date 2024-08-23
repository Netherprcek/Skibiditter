<?php

namespace App;

class Router
{
    public array $routes = [];

    /**
     * @param string $route - The route to add
     * @param callable|array $action - The action to add
     * @return self
     */
    public function get(string $route, callable|array $action): self
    {
        $this->routes['GET'][$route] = $action;
        return $this;
    }

    public function post(string $route, callable|array $action): self
    {
        $this->routes['POST'][$route] = $action;
        return $this;
    }

    public function resolve(string $requestUri, string $requestMethod)
    {
        $route = explode("?", $requestUri)[0];
        $action = null;
        $params = [];

        foreach ($this->routes[$requestMethod] as $routePattern => $routeAction) {
            $pattern = preg_replace('/\{([a-zA-Z0-9_]+)\}/', '([a-zA-Z0-9_]+)', $routePattern);
            if (preg_match("#^$pattern$#", $route, $matches)) {
                $action = $routeAction;
                array_shift($matches); // Remove the full match
                $params = $matches;
                break;
            }
        }

        if (!$action) {
            throw new \Exception("404 Not Found: " . $route);
        }

        if (is_callable($action)) {
            return call_user_func_array($action, $params);
        }

        if (is_array($action)) {
            [$class, $method] = $action;
            if (class_exists($class)) {
                $class = new $class();

                if (method_exists($class, $method)) {
                    return call_user_func_array([$class, $method], $params);
                }
            }

            throw new \Exception("404 Not Found: " . $route);
        }
    }

    public function isLoggedIn(): bool
    {
        return isset($_SESSION['user_id']);
    }
}