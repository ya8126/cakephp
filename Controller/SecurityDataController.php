<?php
//	app/Controller/SecurityDataController.php
	App::uses('AppController', 'Controller');

	class SecurityDataController extends AppController{
//		public $components = array('Security'); //フォームの改ざんを許さない
		public $uses = array('Xuser');
		public $helpers = array('Form');
		
		public function index(){
			if (!empty($this->request->data)){
				$data = array(
						'name' => Set::extract($this->request->data, 'Xuser.name')
				);
//				$this->Xuser->save($this->request->data);
				$this->Xuser->save($data);
			}	
		}
	}