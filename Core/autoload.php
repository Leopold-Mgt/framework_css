<?php

function autoload($objName)
{
    $objName = str_replace('\\', DIRECTORY_SEPARATOR, $objName);

    echo $objName;
    include $objName . '.php';
}

spl_autoload_register('autoload');