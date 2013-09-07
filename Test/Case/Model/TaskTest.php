<?php
//app/Test/Case/Model/TaskTest.php

App::uses('Task', 'Model');
class TaskTest extends CakeTestCase{
	public $fixtures = array(
			'app.task'//,
//			'app.note'
			);
		
	public function setUp() {
		parent::setUp();
		$this->Task = ClassRegistry::init('Task');
	}
	
	public function tearDown(){
		unset($this->Task);
		parent::tearDown();
	}
	
	public function testタスク名は必須である(){
		$this->Task->create(array('Task'=>array('name'=>'', 'body'=>'bbb')));
		$this->assertFalse($this->Task->validates());
		$this->assertArrayHasKey('name', $this->Task->validationErrors);
//		$this->Task->create(array('Task'=>array('name'=>'aaa', 'body'=>'bbb')));
//		$this->assertTrue($this->Task->validates());
//		$this->assertArrayNotHasKey('name', $this->Task->validationErrors);
	}
	
	public function test未終了の最新が取得できること(){
		$latests = $this->Task->getLatest();
		debug($latests);
		$this->assertCount(3, $latests);
		$this->assertEquals('newTask3', $latests[0]['Task']['name']);
		$this->assertEquals('newTask2', $latests[1]['Task']['name']);
		$this->assertEquals('newTask1', $latests[2]['Task']['name']);
	}


/*	
	//関連
	public $hasMany = array('Note');

	//ビヘイビア
	public $actsAs = array('Containable');
	//バリデート
	public $validate = array(
			'name' => array(
					'rule' => array('maxLength', 60),
					'required' => true,
					'allowEmpty' => false,
					'message' => 'タスク名を入力してください'
			),
			'body' => array(
					'rule' => array('maxLength', 255),
					'required' => true,
					'allowEmpty' => false,
					'message' => '詳細を入力してください'
			)
	);
*/
}
