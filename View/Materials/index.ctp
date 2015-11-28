<div class="materials">
	<h2><?php echo __('Materials'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('data_criacao'); ?></th>
			<th><?php echo $this->Paginator->sort('aula_id'); ?></th>
			<th><?php echo $this->Paginator->sort('uploader_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($materials as $material): ?>
	<tr>
		<td><?php echo h($material['Material']['id']); ?>&nbsp;</td>
		<td><?php echo h($material['Material']['data_criacao']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($material['Aula']['id'], array('controller' => 'aulas', 'action' => 'view', $material['Aula']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($material['User']['id'], array('controller' => 'users', 'action' => 'view', $material['User']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $material['Material']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $material['Material']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $material['Material']['id']), array(), __('Are you sure you want to delete # %s?', $material['Material']['id'])); ?>
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
