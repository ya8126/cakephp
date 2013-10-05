<?php
//	app/Controller/SecurityActionMethodController.php
	App::uses('AppController', 'Controller');

	class SecurityActionMethodController extends AppController{
		public $uses = array();
	
		public function index(){
			$this->something();
		}
	
		protected function something(){
			$this->render('something');
		}
	}