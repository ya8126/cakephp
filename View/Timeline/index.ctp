<!-- app/View/Timeline/index.ctp -->
<div class="timeline index">
<?php if (!empty($timeline)): ?>
	<h2><?php echo __('Home Timeline'); ?></h2>
	<table cellpadding="0" cellspacing="0" >
		<tr>
			<th width="200px">ScreenName</th>
			<th>Tweet</th>
			<th width="200px">created_at</th>
		</tr>
	<?php
		foreach($timeline as $tweet){
			echo $this->element('tweet', array('tweet' => $tweet));
		}
	?>
	</table>
<?php endif; ?>
</div>

