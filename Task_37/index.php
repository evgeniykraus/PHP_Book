<?php

require_once 'Disk.php';
require_once 'Rectangle.php';

$disk = new Disk(3);

foreach (get_class_methods($disk) as $method) {
    if ($method != "__construct") {
        echo $disk->$method() . '<br>';
    }
}

echo '<br>';

$rectangle = new Rectangle(3, 4);

foreach (get_class_methods($rectangle) as $method) {
    if ($method != "__construct") {
        echo $rectangle->$method() . '<br>';
    }
}