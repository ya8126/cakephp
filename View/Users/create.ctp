<!-- app/View/Users/create.ctp -->
<?php 
	echo $this->Title->tasktitle() . '<br>' ;
?>
<form action="<?php echo $this->Html->url("/Users/create"); ?>" method="POST">
	<?php echo $this->Form->error('User.username');?>
	<?php echo $this->Form->error('User.password');?>	
	ユーザid<input type="text" name="id" size="5">
	ユーザ名<input type="text" name="username" size="40">
	パスワード<input type="password" name="password" size="40">
	<input type="submit" value="ユーザ登録">
</form>
