<?php

declare(strict_types=1);

namespace App;

class View
{
    /**
     * Constructs the view
     * @param string $view -> The view to construct
     * @param array $data -> The data to construct
     */
    public function __construct(protected string $view, protected array $data = [])
    {
        // Include session data in the view data
        if (isset($_SESSION['username'])) {
            $this->data['user'] = $_SESSION['username'];
        } else {
            $this->data['session_error'] = "You are not signed in";
        }
    }

    /**
     * Renders the view
     * @return string -> The rendered view
     */
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

    /**
     * Creates a new view
     * @param string $template -> The template to create
     * @param array $data -> The data to create
     * @return View -> The view
     */
    public static function make($template, $data = [])
    {
        $config = new Config($_ENV);
        $mustache = $config->getMustache();

        // Create a View instance to handle session data
        $session = new self($template, $data);

        // Render the template with the provided data
        return $mustache->render($template, $session->data);
    }

    /**
     * Converts the view to a string
     * @return string -> The string
     */
    public function __toString(): string
    {
        return $this->render();
    }

    /**
     * Gets the value of a parameter
     * @param string $name -> The name of the parameter
     * @return mixed -> The value of the parameter
     */
    public function __get(string $name)
    {
        return $this->params[$name] ?? null;
    }
}
