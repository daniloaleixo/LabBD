<div class="arquivoSubidos index">
	<h2><?php echo __('Arquivo Subidos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('material_id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('path'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($arquivoSubidos as $arquivoSubido): ?>
	<tr>
		<td><?php echo h($arquivoSubido['ArquivoSubido']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($arquivoSubido['Material']['id'], array('controller' => 'materials', 'action' => 'view', $arquivoSubido['Material']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($arquivoSubido['User']['id'], array('controller' => 'users', 'action' => 'view', $arquivoSubido['User']['id'])); ?>
		</td>
		<td><?php echo h($arquivoSubido['ArquivoSubido']['path']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $arquivoSubido['ArquivoSubido']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $arquivoSubido['ArquivoSubido']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $arquivoSubido['ArquivoSubido']['id']), array(), __('Are you sure you want to delete # %s?', $arquivoSubido['ArquivoSubido']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Arquivo Subido'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Materials'), array('controller' => 'materials', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Material'), array('controller' => 'materials', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
