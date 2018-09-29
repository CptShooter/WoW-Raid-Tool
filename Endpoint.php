<?php

require_once 'vendor/autoload.php';

$composition = new \Raid\Composition();

if(isset($_REQUEST['type']))
{
    $type = $_REQUEST['type'];

    switch($type){
        case 'calculateComp':
            $composition->calculateComp($_REQUEST['comp']);
            break;
        default:
            echo 'ERROR';
    }
}