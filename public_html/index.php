<?php


define('PATH_ROOT',dirname(__FILE__));
define('PATH_APP',dirname(__FILE__).'/../app');

define('PATH_PAGES',PATH_ROOT.'/pages');
define('PATH_PLUGINS',PATH_APP.'/Gregory/plugins');
define('PATH_MODELS',PATH_APP.'/models');



require PATH_APP.'/Gregory/Gregory.php';
require PATH_APP.'/Bob/Bob.php';
require PATH_APP.'/Kate/Kate.php';


$config = include PATH_APP.'/config.php';
$app = new Gregory($config);

$app->addRoute(array(
	'/' => 'home',
));


$app->addStylesheet('/statics/css/styles.css');


$app->bootstrap();
$app->run();
$app->render();

