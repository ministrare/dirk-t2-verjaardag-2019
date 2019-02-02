<?php
/**
 * Created by PhpStorm.
 * User: minis
 * Date: 2/02/2019
 * Time: 15:47
 */

namespace Models;


use Controllers\ViewController;

class Router
{
    private $request;
    private $supportedHttpMethods = array(
        "GET",
        "POST"
    );

    function __construct(IRequest $request)
    {
        $this->request = $request;
    }

    function __call($name, $args)
    {
        list($route, $method) = $args;
        if(!in_array(strtoupper($name), $this->supportedHttpMethods))
        {
            $this->invalidMethodHandler();
        }
        $this->{strtolower($name)}[$this->formatRoute($route)] = $method;
    }

    /**
     * Removes trailing forward slashes from the right of the route.
     * @param route (string)
     * @return string
     */
    private function formatRoute($route)
    {
        $result = rtrim($route, '/');
        if ($result === '')
        {
            return '/';
        }
        return $result;
    }

    private function invalidMethodHandler()
    {
        header("{$this->request->serverProtocol} 405 Method Not Allowed");
    }

    private function defaultRequestHandler()
    {
        $controller = new ViewController();
        $controller->page_404();
    }

    /**
     * Resolves a route
     */
    function resolve()
    {
        $methodDictionary = $this->{strtolower($this->request->requestMethod)};
        $formatedRoute = $this->formatRoute($this->request->requestUri);

        $method = isset($methodDictionary[$formatedRoute]) ? $methodDictionary[$formatedRoute] : null;
        if(is_null($method))
        {
            $this->defaultRequestHandler();
            return;
        }
        echo call_user_func_array($method, array($this->request));


    }

    function __destruct()
    {
        $this->resolve();
    }
}