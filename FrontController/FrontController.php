<?php

namespace FrontController;
require_once 'Home.php';
require_once 'Student.php';

interface FrontControllerInterface
{
    public function setController($controller): void;

    public function setAction($action): void;

    public function setParams(array $params): void;

    public function run(): void;

}

class FrontController implements FrontControllerInterface
{
    private const DEFAULT_CONTROLLER = '\\' . __NAMESPACE__ . '\\' . 'Home';
    private const DEFAULT_ACTION = 'show';
    private const ERROR_CONTROLLER = '\\' . __NAMESPACE__ . '\\' . 'Error';
    private const ERROR_ACTION = 'show404';

    private $controller = self::DEFAULT_CONTROLLER;
    private $action = self::DEFAULT_ACTION;
    private $params = array();
    private $basePath = '/Work/Training/Week3/DesignPatterns/FrontController';

    public function __construct()
    {
        try {
            $this->parseUri();
        } catch (\Exception $exception) {
            $this->setController(self::ERROR_CONTROLLER);
            $this->setAction(self::ERROR_ACTION);
        }

    }

    /**
     * @throws \InvalidArgumentException
     * @throws \ReflectionException
     */
    private function parseUri(): void
    {
        $path = $this->removeBaseUri($_SERVER['REQUEST_URI']);
        $path = $this->cleanUri($path);
        $this->setUriParameters($path);
    }

    /**
     * Remove the base URI representing the root of the domain.
     *
     * @param string $uri
     *
     * @return string
     */
    private function removeBaseUri(string $uri): string
    {
        if (strpos($uri, $this->basePath) === 0) {
            $uri = substr($uri, \strlen($this->basePath));
        }

        return $uri;
    }

    /**
     * Clean the URI of any unneeded characters.
     *
     * @param string $uri
     *
     * @return string
     */
    private function cleanUri(string $uri): string
    {
        $uri = trim(parse_url($uri, PHP_URL_PATH), '/');
        $uri = preg_replace('/[^a-zA-Z0-9\/]/', '', $uri);

        return $uri;
    }

    /**
     * Set the Controller/method/[params/.../] from the URI.
     *
     * @param string $uri
     *
     * @throws \InvalidArgumentException
     * @throws \ReflectionException
     */
    private function setUriParameters(string $uri): void
    {
        @list($controller, $action, $params) = explode('/', $uri, 3);
        if ($controller !== '') {
            if ($controller !== null) {
                $this->setController('\\' . __NAMESPACE__ . '\\' . $controller);
            }
            if ($action !== null) {
                $this->setAction($action);
            }
            if ($params !== null) {
                $this->setParams(explode('/', $params));
            }
        }


    }

    /**
     * @param $controller
     *
     * @throws \InvalidArgumentException
     */
    public function setController($controller): void
    {
        //$controller = ucfirst(strtolower($controller));
        if (!class_exists($controller)) {
            throw new \InvalidArgumentException(
                "The action controller '$controller' has not been defined."
            );
        }


        $this->controller = $controller;
    }

    /**
     * @param $action
     *
     * @throws \InvalidArgumentException
     * @throws \ReflectionException
     */
    public function setAction($action): void
    {
        $reflector = new \ReflectionClass($this->controller);
        if (!$reflector->hasMethod($action)) {
            throw new \InvalidArgumentException(
                "The controller action '$action' has been not defined."
            );
        }
        $this->action = $action;
    }

    /**
     * @param array $params
     */
    public function setParams(array $params): void
    {
        $this->params = $params;
    }

    /**
     * Run the action in the given controller.
     */
    public function run(): void
    {
        \call_user_func_array(
            [new $this->controller, $this->action],
            $this->params
        );
    }
}