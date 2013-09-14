<?php
// app/Test/Case/Controller/TasksControllerTest
App::uses('TasksController', 'Controller');

class TasksControllerTest extends ControllerTestCase{
	public $fixtures = array(
			'app.task',
			'app.note'
	);
	
	public function testタスクを一覧表示できる(){
		$result = $this->testAction(
				'/tasks/index', array('return' => 'vars')
				/* 2つ目の引数は何を返すか　
				 * array('return' => 'vars')で$this->setでセットした内容を返す*/
		);
	
		$task = $result['tasks_data'];//$this->setで'task_data'キーで格納したのでそれを呼んでくる

		$this->assertCount(6, $task);
		$this->assertEqual(2, $task[0]['Task']['id']);
		$this->assertEqual(3, $task[0]['Note'][0]['id']);
	}
	
/*	public function testタスク一覧はroundboxで表示する(){
		$result = $this->testAction(
				'/tasks/index', array('return' => 'view'));
				// 2つ目の引数は何を返すか　
				// array('return' => 'view')で表示するHTMLの内容を返す

		$expected = array(
				'tag'=>'div',
				'attributes'=>array('class'=>'roundbox')
		);
		
		$this->assertTag($expected, $result);
		
	}
*/

//	/**
//	 * @expectedException NotFoundException
//	 * @expectedExceptionMessage Invalid task
//	 */
//	public function test存在しないタスクを指定すると例外投げられる(){
//		$this->testAction('/tasks/edit/999');	
//	}

	public function test完了処理が成功したらインデックスにリダイレクト(){
		$this->testAction('/tasks/edit/999', array('method'=>'get'));
		$this->assertRegExp('/index$/', $this->headers['Location']);
	}

	public function test新しいタスクを追加する(){
		$data = array('name' => 'test task', 'body'=>'test task body');
		$this->testAction('/tasks/create',
				array('data'=>$data, 'method'=>'post'));
		$this->assertContains('タスク13を登録しました', 
				$this->controller->Session->read('Message.flash'));
	}
		
	
}

