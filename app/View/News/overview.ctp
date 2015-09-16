<div class="news index">
	<h2><?php echo __('News'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('administrator_id'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('body'); ?></th>
			<th><?php echo $this->Paginator->sort('publish_date'); ?></th>
			<th><?php echo $this->Paginator->sort('embargo_date'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($news as $newsitem): ?>
	<tr>
		<td><?php echo h($newsitem['News']['id']); ?>&nbsp;</td>
		<td><strong><?php echo h($newsitem['Administrator']['name']); ?></strong></td>
		<td><?php echo h($newsitem['News']['title']); ?>&nbsp;</td>
		<td><?php echo $this->Text->truncate(h($newsitem['News']['body']), 105, array(
        				'ellipsis' => '...',
        				'exact' => false )); ?>&nbsp;</td>
		<td><?php echo h($newsitem['News']['publish_date']); ?>&nbsp;</td>
		<td><?php echo h($newsitem['News']['embargo_date']); ?>&nbsp;</td>
		<td><?php echo h($newsitem['News']['created']); ?>&nbsp;</td>
		<td><?php echo h($newsitem['News']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $newsitem['News']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $newsitem['News']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $newsitem['News']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $newsitem['News']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>

	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>

<div class="actions">
	<ul>
		<li><?php echo $this->Html->link(__('Add News'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Back'), array('action' => 'index')); ?></li>
	</ul>
</div>

