<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0,
            maximum-scale=1.0, minimum-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Pie PHP</title>
    <link rel="stylesheet" href="src/webroot/css/reset.css">
</head>
<body>
</body>
</html>

<?php
//ini_set('display_errors', 1);
//echo "<pre>";
//var_dump($_POST);
//var_dump($_GET);
//var_dump($_SERVER);
//echo "</pre>";

define('BASE_URI', str_replace('\\', '/', substr(__DIR__,
    strlen($_SERVER['DOCUMENT_ROOT']))));
require_once(implode(DIRECTORY_SEPARATOR, ['Core', 'autoload.php']));

$app = new Core\Core();
$app->run();
$app->static_router();

//$controller = new Core\Controller();
//$controller->render($view);