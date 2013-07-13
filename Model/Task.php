<?php
//app/Model/Task.php
class Task extends AppModel{

	public $hasMany = array('Note');
	
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
}