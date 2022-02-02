<?php
date_default_timezone_set('Europe/Paris');

spl_autoload_register(function ($classname){
    include './classes/' . $classname . '.php';
});

require_once './functions/autoLoadFunction.php';
require_once './includes/head.php';
require_once './includes/main.php';
require_once './includes/footer.php';

$toto = new Sql;