<!-- app/View/Sql/index.ctp -->
<h1>SQL Injection</h1>
<?php if(!empty($user)):?>
	<p>Hello</p>
<?php
else:
	echo $this->Form->create('Xuser');
	echo $this->Form->input('email');
	echo $this->Form->input('pass');
	echo $this->Form->end('submit');
endif; 
