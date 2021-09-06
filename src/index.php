<?php

defined('APP_PATH') || define('APP_PATH', realpath(dirname(__FILE__) . '/app'));
const DS = DIRECTORY_SEPARATOR;
require APP_PATH . DS . 'config' . DS . 'config.php';

$page = get('page', 'index');
$model = $config['MODEL_PATH'] . $page . '.php';
$view = $config['VIEW_PATH'] . $page . '.php';
$script = $config['SCRIPT_PATH'] . 'jquery.php';
$empty = $config['VIEW_PATH'] . '404.html';

if(file_exists($view)){
    require $view;
    require $script;
}

if(file_exists($model)){
    require $model;
}
else {
    require $empty;
} 