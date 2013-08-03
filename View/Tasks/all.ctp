<!-- app/View/Tasks/all.ctp -->
<?php
	echo $this->Title->tasktitle() . '<br>' ;
	echo $this->Html->Link('新規タスク', '/Tasks/create');
	echo "<br>";	
	echo $this->Html->Link('ログアウト', '/Users/logout');
	echo "<br>";
?>

<h3>全部で<?php echo count($tasks_data);?>件のタスクがあります</h3>
<?php
	foreach ($tasks_data as $row):
		echo $this->element('task', array('task' => $row));
	endforeach;
?>

<?php echo $this->Paginator->counter(); ?><br>
<?php echo $this->Paginator->prev('prev'); ?> 
<?php echo $this->Paginator->numbers(); ?> 
<?php echo $this->Paginator->next('next'); ?><br>

<!--
<table>
	<tr>
		<th>ID</th>
		<th>名前</th>
		<th>期限日</th>
		<th>作成日</th>
		<th>操作</th>
	</tr>
<?php
	foreach ($tasks_data as $row):
?>
	<tr>
		<td>
		<?php
			echo $this->Html->link($row['Task']['id'], '/Tasks/view/'.$row['Task']['id']);
		?>
		</td>
		<td><?php echo h($row['Task']['name']); ?><br/>
			<ul>
				<?php foreach ($row['Note'] as $note): ?>
					<li><?php echo h($note['body']);?></li>
				<?php endforeach; ?>
			</ul>
		</td>
		<td><?php echo h($row['Task']['due_date']); ?></td>
		<td><?php echo h($row['Task']['created']); ?></td>
		<td><?php echo h($row['Task']['modified']); ?></td>
	</tr>
<?php
	endforeach;
?>
</table>
-->