<?php

namespace core\library;

class Router
{

    private array $routes = [];

    public function add(
        string $method,
        string $uri,
        array $route,
    ) {
        // return view();
        $this->routes[$method][$uri] = $route;
    }

    public function execute()
    {
        // return view();
        // dd($this->routes);

        foreach ($this->routes as $request => $routes) {
            dump($request, $routes);
        }
    }
}
