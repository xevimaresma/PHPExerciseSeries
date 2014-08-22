<?php
require_once '../config/autoload.php';

$app = new \Core\Application();
$handler = new \Handlers\ReverseStringHandler(\Core\Request::initFromGlobals());
$response = $app->run($handler);
$app->printHtml($response,'reverse');