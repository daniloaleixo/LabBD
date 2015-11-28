<div class="textos form">
<?php echo $this->Form->create('Texto'); ?>
	<fieldset>
		<legend><?php echo __('Edit Texto'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('material_id');
		echo $this->Form->input('conteudo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Texto.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Texto.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Textos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Materials'), array('controller' => 'materials', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Material'), array('controller' => 'materials', 'action' => 'add')); ?> </li>
	</ul>
</div>
