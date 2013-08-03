<!-- app/View/Users/login.ctp -->
<?php
	echo $this->Title->tasktitle() . '<br>' ;
	echo $this->Form->create('User');
	echo $this->Form->input('User.username');
	echo $this->Form->input('User.password');
	echo $this->Form->end('Login');	
	echo $this->Html->link('新規ユーザ登録', '/Users/create');
