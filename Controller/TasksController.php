<?php
// app/controller/TasksController.php
class TasksController extends AppController{
	
	public $scaffold;
	
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
		
		$tasks_data = $this->Task->find('all', $options);
		$this->set('tasks_data', $tasks_data);
		
		//app/view/Tasks/index.ctpを表示
		$this->render('index');
	}
	
	public function done(){
		//urlの末尾からタスクのIDを取得してデータを更新
		$id = $this->request->pass[0];
		$this->Task->id = $id;
		$this->Task->saveField('status', 1);
		$msg = sprintf('タスク%sを完了しました', $id);
		//メッセージを表示してリダイレクト
//		$this->flash($msg, '/Tasks/index');
		$this->Session->setFlash($msg);
		$this->redirect('/Tasks/index');
		return;
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
		$id= $this->Task->save($data);
		if($id === false){
			$this->render('create');
			return;
		}
		$msg = sprintf('タスク%sを登録しました', $this->Task->id);
		//メッセージを表示してリダイレクト
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
				$this->Session->setFlash('更新しました');
				$this->redirect('/Tasks/index');				
			}
		}else{
			//POSTされていない場合は初期データをフォームにセット
			$this->request->data = $task;
		}
	}
}
