<!-- app/View/Emails/html/task_mail.ctp -->

<p><?php echo h($user); ?>さん<br>
以下のタスクの<?php echo h($proc); ?>処理が行われました。</p>

<p>
	タスク名：<br><?php echo h($name); ?><br>
	内容：<br><?php echo h($body);?>
</p>


