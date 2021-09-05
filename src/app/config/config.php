<?php
session_start();
error_reporting(0);

    $config = [
        'MODEL_PATH' => APP_PATH . DS . 'model' . DS,
        'VIEW_PATH' => APP_PATH . DS . 'view' . DS,
        'LIB_PATH' => APP_PATH . DS . 'lib' . DS,
        'SCRIPT_PATH' => APP_PATH . DS . 'script' . DS,
    ];
   // require $config['SCRIPT_PATH'] . 'jquery.php';
    require $config['LIB_PATH'] . 'functions.php';
?>
