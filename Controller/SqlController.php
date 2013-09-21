<?php
// app/controller/SqlController.php
	APP::uses('AppController', 'Controller');
	
	class SqlController extends AppController{
		public $uses = array('Xuser');
		
		public function index(){
			if ($this->request->is('post')){
//				$conditions = array(
//						'email'=>$this->request->data['Xuser']['email'],
//						'pass'=>$this->request->data['Xuser']['pass']
//				);
//				$user = $this->Xuser->find('first', compact('conditions'));
				
				$ds = $this->Xuser->getDataSource();
				$user = $ds->fetchAll("SELECT * FROM xusers WHERE email=? AND pass=? LIMIT 1",
							array(
								$this->request->data['Xuser']['email'],
								$this->request->data['Xuser']['pass']
							)
						);
				
				$this->set('user', $user);
			}
		}
	}