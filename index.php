<?php
require __DIR__ . '/vendor/autoload.php';
date_default_timezone_set('Europe/London');

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$log = new Logger('name');
$log->pushHandler(new StreamHandler('app.log', Logger::WARNING));
$log->addWarning('God damn!');
echo 'Hello';

?>
