<div class="avaliacaos index">
	<h2><?php echo __('Avaliacaos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('aula_id'); ?></th>
			<th><?php echo $this->Paginator->sort('nota'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($avaliacaos as $avaliacao): ?>
	<tr>
		<td><?php echo h($avaliacao['Avaliacao']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($avaliacao['User']['username'], array('controller' => 'users', 'action' => 'view', $avaliacao['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($avaliacao['Aula']['id'], array('controller' => 'aulas', 'action' => 'view', $avaliacao['Aula']['id'])); ?>
		</td>
		<td><?php echo h($avaliacao['Avaliacao']['nota']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $avaliacao['Avaliacao']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $avaliacao['Avaliacao']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $avaliacao['Avaliacao']['id']), array(), __('Are you sure you want to delete # %s?', $avaliacao['Avaliacao']['id'])); ?>
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
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Avaliacao'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Aulas'), array('controller' => 'aulas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aula'), array('controller' => 'aulas', 'action' => 'add')); ?> </li>
	</ul>
</div>
