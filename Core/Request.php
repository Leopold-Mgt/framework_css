<?php

namespace Core;

class Request
{
    public function __construct()
    {
        $array_post = [];
        $array_get = [];

        if (!empty($_POST)) {
            foreach ($_POST as $key) {
                $key = htmlspecialchars(stripslashes(trim($key)));
                array_push($array_post, $key);
            }

            $_POST = $array_post;
            return $_POST;
        }
        if (!empty($_GET)) {
            foreach ($_GET as $key) {
                $key = htmlspecialchars(stripslashes(trim($key)));
                array_push($array_get, $key);
            }

            $_GET = $array_get;
            return $_GET;
        }
    }
}