<?php

namespace Core;
require_once "src/routes.php";

class Core
{
    public function run()
    {
//        echo "SERVER = " . $_SERVER['REQUEST_URI'] . PHP_EOL;
//        $parameter = explode(DIRECTORY_SEPARATOR, $_SERVER['REQUEST_URI']);
//        echo "<pre>";
//        var_dump($parameter);
//        echo "</pre>";

        $url = substr($_SERVER['REQUEST_URI'], 7);

        if ($url === "/register") {
            $test = new \src\Controller\UserController();
            $test->registerAction();
        }
    }

    public function dynamic_router()
    {
        $url = substr($_SERVER['REQUEST_URI'], 8);
        $url_arr = explode("/", $url);

        if ($url_arr[0] !== "" && !class_exists('\\src\\Controller\\' . ucfirst($url_arr[0] . "Controller")) && !method_exists('\\src\\Controller\\' . ucfirst($url_arr[0] . "Controller"), $url_arr[1] . "Action")) {
            echo "Error 404\n";
        } else {
            if ($url === "") {
                $url_arr[0] = "app";
                $url_arr[1] = "index";

                $class = '\\src\\Controller\\' . ucfirst($url_arr[0] . "Controller");
                $method = $url_arr[1] . "Action";
            } else if (count($url_arr) === 1) {
                $url_arr[1] = "index";

                $class = '\\src\\Controller\\' . ucfirst($url_arr[0] . "Controller");
                $method = $url_arr[1] . "Action";
            } else {
                $class = '\\src\\Controller\\' . ucfirst($url_arr[0] . "Controller");
                $method = $url_arr[1] . "Action";
            }
            $test = new $class();
            $test->$method();
        }
    }

    public function static_router()
    {
        $url = substr($_SERVER['REQUEST_URI'], 7);
        $router = Router::get($url);

        if ($url !== "" && !class_exists('\\src\\Controller\\' . ucfirst($router["controller"] . "Controller")) && !method_exists('\\src\\Controller\\' . ucfirst($router["controller"] . "Controller"), $router["action"] . "Action")) {
            echo "Error 404\n";
        } else {
            $class = '\\src\\Controller\\' . ucfirst($router["controller"] . "Controller");
            $method = $router["action"] . "Action";

            $test = new $class();
            $test->$method();
        }
    }
}