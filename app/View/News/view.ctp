<div class="news view">
<h2><?php echo h($news['News']['title']); ?></h2>
<em>written by <?php echo h($news['Administrator']['name']) ?> on <?php echo h($news['News']['publish_date']) ?></em>

<p>
	<?php echo $this->Text->autoParagraph(h($news['News']['body'])) ?>
</p>
	
	<dl>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($news['News']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($news['News']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('All News'), array('action' => 'index')); ?> </li>
	</ul>
</div>
