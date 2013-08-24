<?php
// app/Console/Command/UserShell.php

class UserShell extends AppShell{
	public $uses = array('User');
	
	public function index(){
		$this->out("id\tusername\tpassword");
		foreach ($this->User->find('all') as $user){
			$this->out($user['User']['id']."\t"
						.$user['User']['username']."\t"
						.$user['User']['password']);
		}
	}
	
	public function add(){
		$user = $this->User->findById($this->args[0]);
		if($user != null){
			$this->out('id Already used');
			return;			
		}
		$user = $this->User->findByUsername($this->args[1]);
		if($user != null){
			$this->out('username Already used');
			return;			
		}
		
		$this->User->create();
		$this->User->save(array(
				'id'=>$this->args[0],				
				'username'=>$this->args[1],
				'password'=>Security::hash($this->args[2], 'sha1', true)
		));
		$this->out('created user : '. $this->args[0]. ' -> '. $this->args[1]);
	}
	
	public function delete(){
		$user = $this->User->findById($this->args[0]);
		if($user == null){
			$this->out('id Not found');
			return;			
		}
		if(!$this->params['force']){
			$this->out($user['User']['id']."\t".$user['User']['username']);
			if(strtolower($this->in('DELETE OK?', array('y','n'), 'n')) == 'n'){
				$this->out('comannd finish');
				return;
			}
		}
		$this->User->delete($this->args[0]);
		$this->out('deleted : '. $user['User']['id']." -> ". $user['User']['username']);
	}
	
	public function main(){
		return $this->out($this->OptionParser->help());
	}
	
	public function getOptionParser(){
		$parser = parent::getOptionParser();
		return $parser->description('user maintenance program')
			->addSubcommand('index', array(
					'help' => 'show all user', 
					'parser' => array(
							'description' => array('show all users id & name & pass')
					)
			))
			->addSubcommand('add', array(
					'help' => 'create user',
					'parser' => array(
							'description' => array('create new user'),
							'arguments' => array(
									'id' => array(
											'help' => 'not used userid',
											'required' => true
									),
									'name' => array(
											'help' => 'not used username',
											'required' => true
									),
									'password' => array(
											'help' => 'password',
											'required' => true
									)
							)
					)
			))
			->addSubcommand('delete', array(
					'help' => 'delete user',
					'parser' => array(
							'description' => array('delete user'),
							'arguments' => array(
									'id' => array(
											'help' => 'delete userid',
											'required' => true
									)
							),
							'options' => array(
									'force' => array(
											'short' => 'f',
											'help' => 'Non Confirmed delete',
											'boolean' => true
									)
							)
					)
			));	
	}
}