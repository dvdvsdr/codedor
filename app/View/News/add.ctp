<div class="news form">
<?php echo $this->Form->create('News'); ?>
	<fieldset>
		<legend><?php echo __('Add News'); ?></legend>
		<em>Written by <?php echo $writer; ?></em>
	<p>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('body');
		echo $this->Form->input('publish_date');
		echo $this->Form->input('embargo_date');
	?>
	</p>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Overview'), array('action' => 'overview')); ?></li>
	</ul>
</div>
