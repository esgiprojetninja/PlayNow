<?php

class Router extends Collection
{

    public function __construct()
    {
        parent::__construct("/");
    }

    public function run()
    {
        $route = null;
        for ($i = 0; $i < count($this->subRoutes) && $route == null; $i++) {
            $subRoute = $this->subRoutes[$i];
            $route = $subRoute->isMatch($_SERVER["PATH_INFO"], $_SERVER["REQUEST_METHOD"]);
        }
        if ($route == null) {
            throw new NotFoundException;
        }

        parse_str(file_get_contents("php://input"), $route->formData);

        foreach ($route->constraints as $constrait) {
            $constrait->setRoute($route);
            $constrait->check();
        }
        return $route;
    }

}