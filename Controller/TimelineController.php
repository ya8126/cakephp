<?php
// app/controller/TimelineController.php
	App::uses('Appcontroller', 'Controller');
	class TimelineController extends AppController{
		public $helpers = array('Time');
		
		public function index(){
			//ログイン中のユーザ情報を取得
			$user = $this->Auth->user();
			if (empty($user)){
				return;
			}
			//Twitterデータソースを取得
			$ds = $this->Twitter->getTwitterSource();
			//アクセストークンをTwitterデータソースに設定
			$ds->setToken($user['TwitterUser']);
			//タイムラインを取得
			$timeline = $ds->statuses_home_timeline();
			//取得した情報をビューに設定
			$this->set(compact('timeline'));
		}
	}