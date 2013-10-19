<?php
// app/Controller/SlowController.php

	App::uses('Appcontroller', 'Controller');
	
	class SlowController extends AppController{
		public $components = array('Benchmark');
		public $uses = array('Slow');
		
		public function index(){
			$this->Benchmark->mark(__FILE__, __LINE__);
			$data = $this->Slow->doSomething();
			$this->Benchmark->mark(__FILE__, __LINE__);			
			$this->set('data', $data);
		}
	}
