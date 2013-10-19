<?php 
// app/Model/Slow.php
	
	App::uses('AppModel', 'Model');
	App::uses('Cache', 'Cache');
	
	class Slow extends AppModel{
		public $useTable = false;
		
		public function doSomething(){
			$ret = Cache::read('Slow_something');
			if ($ret !== false){
				Cache::delete('Slow_something');
				return $ret;
			}
			
			sleep(5);
			
			$ret =array('time' => date('Y:m:d H:i:s'));
			Cache::write('Slow_something', $ret);
			
			return $ret;
		}
	}