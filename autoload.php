<?php
/**
 * Created by PhpStorm.
 * User: 7
 * Date: 01.04.2019
 * Time: 22:44
 */
//str_replace('\\', '/' , $class)

function autoloader($class)
{
    //echo $class.'<br />';
    require_once __DIR__.'/' . $class . '.php';
}
spl_autoload_register('autoloader');