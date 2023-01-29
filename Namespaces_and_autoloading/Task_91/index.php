<?php

spl_autoload_register(function ($class) {
    $root = $_SERVER['DOCUMENT_ROOT'] . '/Namespaces_and_autoloading/Task_91';
    $ds = DIRECTORY_SEPARATOR;

    $filename = $root . $ds . str_replace('\\', $ds, $class) . '.php';
    require($filename);
});

$controller = new Core\Admin\Controller();
$data = new Project\User\Data();
$user = new Core\User();
