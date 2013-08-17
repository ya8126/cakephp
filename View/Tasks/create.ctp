<!-- app/View/Tasks/create.ctp -->
<?php
	echo "<p>";
	echo $this->Title->tasktitle() . " ";
	echo $this->Html->Link('未完了タスク', '/Tasks/index'). " ";
	echo $this->Html->Link("全タスク", "/Tasks/all"). " ";
	echo $this->Html->Link("ログアウト", "/Users/logout"). "<br>";
	echo $this->Title->username();
	echo "</p>";
?>
<form action="<?php echo $this->Html->url("/Tasks/create"); ?>" method="POST">
	<?php echo $this->Form->error('Task.name');?>
	<?php echo $this->Form->error('Task.body');?>	
	タスク名<input type="text" name="name" size="40">
	詳細<br/>
	<textarea name="body" cols="40" rows="8"></textarea>
	<input type="submit" value="タスクを作成">
</form>
