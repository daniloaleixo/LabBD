<div class="areas">
	<h2><?php echo __('Areas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('titulo'); ?></th>
			<th><?php echo $this->Paginator->sort('e_subarea', 'É subarea de'); ?></th>
			<th><?php echo $this->Paginator->sort('criado_por'); ?></th>
			<th><?php echo $this->Paginator->sort('criado_em'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($areas as $area): ?>
	<tr>
		<td><?php echo h($area['Area']['titulo']); ?>&nbsp;</td>
		<td><?php if (isset($lista_de_areas[$area['Area']['e_subarea']])) {echo $lista_de_areas[$area['Area']['e_subarea']];} else {echo '';} ?>&nbsp;</td>
		<td><?php echo h($area['Area']['criado_por']); ?>&nbsp;</td>
		<td><?php echo h($area['Area']['criado_em']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $area['Area']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $area['Area']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $area['Area']['id']), array(), __('Are you sure you want to delete # %s?', $area['Area']['id'])); ?>
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
