<?php
//	app/View/Helper/TitleHelper.php
class TitleHelper extends AppHelper{
	public function tasktitle(){
		return "★★　タスク管理システム　★★";
	}
	
	public function username(){
		return AuthComponent::user('username') . "さん、いらっしゃい";
	}

}