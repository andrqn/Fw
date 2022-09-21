<?php
include ('init.php');
$app->pager->addCss('style.css');
$app->pager->addJs('scripts.js');
$app->pager->addString('<h1></h1>');

print_r($app->pager->getAllReplace());
$app->pager->showHead();