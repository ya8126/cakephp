<!-- app/View/Tasks/edit.ctp -->
<?php
	echo "<p>";
	echo $this->Title->tasktitle() . ' ' ;
	echo $this->Html->Link('未完了タスク', '/Tasks/index'). " ";
	echo $this->Html->Link("全タスク", "/Tasks/all"). " ";
	echo $this->Html->Link("新規タスク", "/Tasks/create"). " ";
	echo $this->Html->Link("ログアウト", "/Users/logout"). "<br>";
	echo $this->Title->username();
	echo "</p>";
?>
<?php
	echo $this->Form->create('Task', array('type' => 'post'));
?>
<!-- まとめて表示を行う例 -->
<?php
	echo $this->Form->input('Task.name', array('label'=>'タイトル'));
	echo $this->Form->input('Task.body', array('label'=>'詳細'));	
	echo $this->Form->end('保存');
