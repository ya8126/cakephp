<!-- app/View/Xss/form.ctp -->
<h1>Xss Form</h1>
<!--
<form action="" method="post">
	<input type="text" name="name" 
			value="<?php echo $this->Form->value('name'); ?>" >
	<input type="submit">	
</form>
-->
<?php 
	echo $this->Form->create(false);
	echo $this->Form->input('name');
	echo $this->Form->end('submit');
