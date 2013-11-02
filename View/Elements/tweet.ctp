<!-- app/View/Element/tweet.ctp -->
<tr>
	<td>
		<?php
			echo $this->Html->image($tweet['user']['profile_image_url_https']);
		?>
		<br />
		<?php 
			echo $this->Html->link(
				$tweet['user']['screen_name'],
				"http://twitter.com/{$tweet['user']['screen_name']}"
			);
		?>
	</td>
	<td><?php echo nl2br(h($tweet['text'])); ?></td>
	<td><?php echo $this->Time->niceShort($tweet['created_at']); ?></td>
</tr>
