<?php

require_once '../vendor/autoload.php';
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$logger = new Logger('nomedocanal');
$logger->pushHandler(new StreamHandler(__DIR__.'/App.log',Logger::DEBUG));

$logger->info("Esta e uma mensagem informativa");
$logger->warning('Esta e uma mensagem de aviso!');
$logger->error('Esta e uma mensagem de erro');

$variable = array(1,17,"hello",null);
var_dump($variable);