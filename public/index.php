
<?php

use Phalcon\Loader;
use Phalcon\Mvc\Application;
use Phalcon\DI\FactoryDefault;
use Phalcon\Mvc\View;

try{
	$loader=new Loader();
	$loader->registerDirs([
		'../app/controllers/',
		'../app/models/',
	]);
	$loader->register();

	$di=new FactoryDefault();

	$di->set('db',function(){
		$db= new \Phalcon\Db\Adapter\Pdo\Mysql([
			'host'=>'localhost',
			'username'=>'root',
			'password'=>'',
			'dbname'=>'phalcon'
			]);
		return $db;
	});


	$di->set('view', function(){
		$view=new View();
		$view->setViewsDir('../app/views');
		return $view;
	});


	$app=new Application($di);
	echo $app->handle()->getContent();
}

catch(\Phalcon\Exception $e){
	echo $e->getMessage();

}