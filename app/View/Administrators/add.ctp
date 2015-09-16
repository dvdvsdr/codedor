<div class="administrator form">
<?php echo $this->Form->create('Administrator'); ?>
	<fieldset>
		<legend><?php echo __('Add Administrator'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('email');
		echo $this->Form->input('password');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>