<?php
// app/Controller/CsrfController.php

App::uses('AppController', 'Controller');

class CsrfController extends AppController{
	public $uses = array();
	public $components =array('Security');
	public $helpers = array('Form');
	
	public function index(){
		if ($this->request->isPost()){
			$this->set('name', 'xxx');
			$this->Session->setFlash('POST OK');
		}
	}
}