<!-- app/View/Csrf/index.ctp -->
<h1>Csrf Form</h1>

<?php 
	echo $this->Form->create(false);
	echo $this->Form->input("name");
	echo $this->Form->end('submit');
