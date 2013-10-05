<!-- app/View/SecurityData/index.ctp -->
<h1>SecurityData</h1>

<?php
	echo $this->Form->create('Xuser');
	echo $this->Form->input('name');	
	echo $this->Form->input('email');
	echo $this->Form->input('pass');
	echo $this->Form->end('submit');

