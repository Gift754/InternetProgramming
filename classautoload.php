<?php
require 'conf.php';
$directories = ['layouts', 'forms', 'global'];

spl_autoload_register(function ($class_name) use ($directories) {
    foreach ($directories as $directory) {
        $file = __DIR__ . '/' . $directory . '/' . $class_name . '.php';
        if (file_exists($file)) {
            require_once $file;
            return;
        }
    }
});
// Create an instance of the class
$class = new classes();
$layout = new layout();
$form = new forms();
