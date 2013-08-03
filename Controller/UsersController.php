<?php
// app/Controller/UsersController.php
class UsersController extends AppController{
	
	public $scaffold;
	
	public $helper = array('Title');
	
	public function login(){
		if ($this->request->is('post')){
			if ($this->Auth->login()){
				return $this->redirect($this->Auth->redirect());
			}else{
				$this->Session->setFlash("Username or password is incorrect");
			}
		}
	}
	
	public function logout(){
		$this->Auth->logout();
		return $this->redirect('/Tasks/index');
	}
	
	public function create(){
		//POSTでなければ入力画面表示
		if (!$this->request->is('post')){
			$this->render('create');
			return;
		}
		//POSTの場合は登録処理
		$data = array(
				'id' => $this->request->data['id'],
				'username' => $this->request->data['username'],
				'password' => $this->Auth->password($this->request->data['password'])
		);
		//データ登録
		$id= $this->User->save($data);
		if($id === false){
			$this->render('create');
			return;
		}
		$msg = sprintf('ユーザ%sを登録しました', $this->User->id);
		//メッセージを表示してリダイレクト
		$this->Session->setFlash($msg);
		$this->redirect('login');
	}
	
	function beforeFilter() {
		$this->Auth->allow('create');
	}
}