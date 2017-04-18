<?php

use Phalcon\Mvc\Model;
use Phalcon\Mvc\Model\Behavior\SoftDelete;

class User extends BaseModel{
	//Tablein adi bashqa olsa
	// public function getSource(){
	// 	return "users";
	// }

	// public function initialize(){
	// 	$this->setSource('users');
	// }

	public function initialize(){
		$this->addBehavior(new SoftDelete([
				'field'=>'deleted',
				'value'=>'1'
			]));
	}

	public function beforeValidationOnCreate(){
		if($this->email=='test@test.com'){
			die('This email is too common');
		};
	}

	


}