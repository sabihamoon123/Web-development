<?php

require_once 'vendor/autoload.php' ;
use App\classes\HelloWorld ;
use HelloWorld as GlobalHelloWorld;

$helloWorld = new HelloWorld() ;
$helloWorld->index() ;