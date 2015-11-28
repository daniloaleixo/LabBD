<div class="referenciaExternas form">
<?php echo $this->Form->create('ReferenciaExterna'); ?>
	<fieldset>
		<legend><?php echo __('Edit Referencia Externa'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('material_id');
		echo $this->Form->input('link');
		echo $this->Form->input('user_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ReferenciaExterna.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('ReferenciaExterna.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Referencia Externas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Materials'), array('controller' => 'materials', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Material'), array('controller' => 'materials', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
