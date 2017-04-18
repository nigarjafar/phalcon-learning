<?php

use Phalcon\Mvc\Model;
use Phalcon\Mvc\Model\Behavior\SoftDelete;

class BaseModel extends Model{
	
	public function beforeCreate(){
		$this->created_at=date("Y-m-d H:i:s");
		$this->updated_at=date("Y-m-d H:i:s");
	}

	public function beforeUpdate(){
		$this->updated_at=date("Y-m-d H:i:s");
	}


}