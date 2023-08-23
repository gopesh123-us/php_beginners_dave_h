<?php
/* function autoload_one($classname)
{
    if (file_exists('appClasses/actions/' . $classname . '.php')) {
        include_once 'appClasses/actions/' . $classname . '.php';
    } else if (file_exists('appClasses/animals/' . $classname . '.php')) {
        include_once 'appClasses/animals/' . $classname . '.php';
    } else if (file_exists('/' . $classname)) {
        include_once $classname . '.php';
    }
}
spl_autoload_register('autoload_one'); */
spl_autoload_register(function ($classname) {
    /* var_dump($classname);
    print "<br>";
    print str_replace("\\", "/", $classname) . '.php';
    print "<br>"; */
    include_once str_replace("\\", "/", $classname) . '.php';
});
