<?php

$rootPath = realpath(dirname(__DIR__));

set_include_path(
	implode(
		PATH_SEPARATOR, 
		array('.', $rootPath . '/library', get_include_path())
	)
);


require_once 'Zend/Loader/Autoloader.php';
$loader = Zend_Loader_Autoloader::getInstance();
$loader->registerNamespace('Scabo_');