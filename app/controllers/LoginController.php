<?php
use Phalcon\Mvc\Controller;
//use Phalcon\Mvc\View;
class LoginController extends Controller{

	public function initialize(){
		echo "**INIT**<br>";
		//$this->view->SetTemplateAfter('default'); eger layoutun adi login-den bashqa olarsa bunu ishletmek laizmdi
	}

	public function onConstruct(){
			echo "**Cons**<br>";
	}

	public function indexAction(){
		echo "Login";
	}

	public function processAction($username=false,$age=12){
		echo "Login";
		echo "<br>".$username."<br>".$age;
		$this->view->setVar('username',$username);
		//$this->view->disableLevel(\Phalcon\Mvc\View::LEVEL_AFTER_TEMPLATE); -ishlemedi 
	}

	public function testAction(){
		echo "<br>Test";
	}
}