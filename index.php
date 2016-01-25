<?php

require_once('../vendor/autoload.php');
$styleguide = new \Thopra\Styleguide\Styleguide();
$styleguide->setTitle('Test Styleguide');

$source = new \Thopra\Styleguide\Source\Source(dirname(__FILE__).'/Assets', 'default', 'Example Styles');
//todo: set directories to default
$source->setPartialDir('../Partials');
$source->addResource('Assets/css/main.css');

$styleguide->addSource($source);

$styleguide->render();

?>
