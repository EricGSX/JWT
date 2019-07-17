<?php
/**
 * File: autoload.php.
 * User: Eric.Guo
 * Date: 2019.07.17
 * Time: 18:06
 */
function guoClassLoader($class)
{
    $path = str_replace('Jwt\\', '', $class);
    $file = __DIR__ . '/src/' . $path . '.php';
    if (file_exists($file)) {
        require_once $file;
    }
}
spl_autoload_register('guoClassLoader');