<div class="administrators form">
<?php
	echo $this->Form->create('Administrator', array('action' => 'login'));
	echo $this->Form->inputs(array(
		'legend' => __('Login'),
		'name',
		'password'
	));
	echo $this->Form->end('Login');
?>
</div>