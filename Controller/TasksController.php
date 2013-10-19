<?php
// app/controller/TasksController.php

App::uses('CakeEmail', 'Network/Email');
App::uses('AppController', 'Controller');

class TasksController extends AppController{
	
	public $scaffold;
	
	public $components = array('Name', 'Benchmark');
	
	public $helpers = array('Title', 'Cache');
	
	public $cacheAction = array('index' => '+1 hour', 'all' => '+1 minute');
	
	public $paginate = array(
		'limit' => 3,
		'order' => array(
			'Task.id' => 'DESC'
		)
	);
	
	public function all(){
		//SessionIDの変更
//		App::uses('CakeSession', 'Model/DataSource');	不要でした
//		CakeSession::start();							不要でした
//		$this->Session->renew();
		CakeSession::renew();
		//データをモデルから取得してビューへ渡す
		$tasks_data = $this->paginate('Task', array(
			'Task.id >' => 0
		));
		$this->set('tasks_data', $tasks_data);
		
		//app/view/Tasks/all.ctpを表示
		$this->render('all');
	}
	
	public function index(){

		/*		//空のデータをビューへ渡す
			$tasks_data = array();
		$this->set('tasks_data', $tasks_data);
		*/
		//データをモデルから取得してビューへ渡す
		$options = array(
				'conditions' => array(
						'status' => 0
				)
		);
//		$tasks_data = $this->Task->find('all', $options);
		//name順にしてみた  読み込まれたデータは['Task']['フィールド名']の連想配列になる
		$tasks_data = Hash::sort($this->Task->find('all', $options),'{n}.Task.name', 'asc');
		$this->set('tasks_data', $tasks_data);
		
		//app/view/Tasks/index.ctpを表示
//		$msg = $this->Name->name($this->Auth->user('username'));
//		$msg = $this->name->name($this);
//		$this->Session->setFlash($msg);
		$this->render('index');
	}
	
	public function done(){
		//urlの末尾からタスクのIDを取得してデータを更新
		$id = $this->request->pass[0];
		$this->Task->id = $id;
		$this->Task->saveField('status', 1);
		//メールを送る
		$this->Task->contain();
		$task_data = $this->Task->find('first', 
				array('conditions' => array('id' => $id)
				)
		);
		$proc ='完了';
		$this->mailer($task_data['Task'], $proc);
		//メッセージを表示してリダイレクト
		$msg = sprintf('タスク%sを%sしました', $id, $proc);
//		$this->flash($msg, '/Tasks/index');
		$this->Session->setFlash($msg);
		$this->redirect('/Tasks/index');

		return;
	}
	
	public function mailer($task, $proc){
/*	mail関数を使った場合
		$email = new CakeEmail();
		
		$email->transport('Mail');
*/
//	SMTPサーバを使った場合
		$email = new CakeEmail(array(
			'tranceport' => 'Smtp',
			'host' => 'ssl://smtp.gmail.com',
			'port' => 465,
			'timeout' => 30,
			'username' => 'pgacademy.user@gmail.com',
			'password' => '1tacade3'
		));
//		ここから共通
		$subject = sprintf("タスク%sを%sしました", $task['id'], $proc);
		$email->from('pgacademy.user@gmail.com');
		$email->to('tonya.8839@gmail.com');
		$email->subject($subject);
		
//	templateを使う
		$email->template('task_mail', 'tasks_layout');
		$email->emailFormat('html');
		$email->viewVars(array(
				'user' => AuthComponent::user('username'),
				'name' => $task['name'],
				'body' => $task['body'],
				'proc' => $proc
		));

		$messages = $email->send();
		
		$this->set('messages', $messages);
	}
	
	public function create(){
		//POSTでなければ入力画面表示
		if (!$this->request->is('post')){
			$this->render('create');
			return;
		}
		//POSTの場合は登録処理
		$data = array(
				'name' => $this->request->data['name'],
				'body' => $this->request->data['body']
		);
		//データ登録
		$id = $this->Task->save($data);
		if($id === false){
			$this->render('create');
			return;
		}
		//メールを送る
		$data['id'] = $this->Task->id;
		$proc = '登録';
		$this->mailer($data, $proc);
		//メッセージを表示してリダイレクト
		$msg = sprintf('タスク%sを%sしました', $this->Task->id, $proc);
		$this->Session->setFlash($msg);
		$this->redirect('/Tasks/index');
	}
	
	public function edit(){
		//指定されたタスクのデータを取得
		$id = $this->request->pass[0];
		$options = array(
			"conditions" => array(
				'Task.id' => $id,
				'Task.status' => 0
			)
		);
		$task = $this->Task->find('first', $options);
		
		//データが見つからない場合は一覧へ
		if ($task == false){
//			throw new NotFoundException(__('Invalid task'));		
			$this->Session->setFlash('タスクが見つかりません');
			$this->redirect('/Tasks/index');
		}
		
		//フォームが送信された場合は更新にトライ
		if ($this->request->is('post')){
			$data = array(
				'id' => $id,
				'name' => $this->request->data['Task']['name'],
				'body' => $this->request->data['Task']['body']
			);
			if ($this->Task->save($data)){
				//メールを送る
				$proc = '変更';
				$this->mailer($data, $proc);
				
				$msg = sprintf('タスク%sを%sしました', $id, $proc);			
				$this->Session->setFlash($msg);
				$this->redirect('/Tasks/index');				
			}
		}else{
			//POSTされていない場合は初期データをフォームにセット
			$this->request->data = $task;
		}
	}
}
