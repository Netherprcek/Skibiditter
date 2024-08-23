<?php

declare(strict_types=1);

namespace App;

class View
{
    public function __construct(protected string $view, protected array $data = [])
    {
        // Include session data in the view data
        if (isset($_SESSION['username'])) {
            $this->data['user'] = $_SESSION['username'];
        } else {
            $this->data['session_error'] = "You are not signed in";
        }
    }

    public function render()
    {
        $viewPath = VIEW_PATH . '/' . $this->view . ".mustache";

        ob_start();

        if (file_exists($viewPath)) {
            require_once $viewPath;
        } else {
            throw new \Exception('View ' . $this->view . ' not found');
        }

        return (string) ob_get_clean();
    }

    public static function make($template, $data = [])
    {
        $config = new Config($_ENV);
        $mustache = $config->getMustache();

        // Create a View instance to handle session data
        $session = new self($template, $data);

        // Render the template with the provided data
        return $mustache->render($template, $session->data);
    }

    public function __toString(): string
    {
        return $this->render();
    }

    public function __get(string $name)
    {
        return $this->params[$name] ?? null;
    }
}
