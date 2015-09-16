<div class="news index">
	<h2><?php echo __('News'); ?></h2>
	
	<?php foreach ($news as $newsitem): ?>
		<div style='background-color: #ddd;'>
			<h4><?php echo $this->Html->link(h($newsitem['News']['title']), 
				array('action' => 'view', $newsitem['News']['id'])); ?></h4>

			<em>
				Published by <?php echo h($newsitem['Administrator']['name']); ?> on 
				<?php echo h($newsitem['News']['publish_date']); ?>
			</em>

			<br /><br />

			<p>
				<?php echo $this->Text->truncate(h($newsitem['News']['body']), 105, array(
        				'ellipsis' => '...',
        				'exact' => false )); ?>
        	</p>
		</div>
	<?php endforeach; ?>
</div>

<div class="actions">
	<ul>
<?php 
	if($loggedIn) {
		echo '<li>' . $this->Html->link(__('Add News'), array('action' => 'add')) . '</li>';
		echo '<li>' . $this->Html->link(__('Overview'), array('action' => 'overview')) . '</li>';
		echo '<li>' . $this->Html->link(__('Log out'), array('controller' => 'administrators', 'action' => 'logout')) . '</li>';
	} else {
		echo '<li>' . $this->Html->link(__('Login as Administrator'), 
			array('controller' => 'administrators', 'action' => 'login')) . '</li>'; 
	}	
?>
	</ul>
</actions>
