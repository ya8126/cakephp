<?php
//app/Model/Task.php
class Task extends AppModel{
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
	
	public function getLatest(){
		$options = array(
				'conditions' => array('status' => 0),
				'order' => array('created desc'),
				'limit' => 3
		);
		return $this->find('all', $options);
	}
}