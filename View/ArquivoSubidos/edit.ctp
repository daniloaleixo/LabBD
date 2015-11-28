<div class="arquivoSubidos form">
<?php echo $this->Form->create('ArquivoSubido'); ?>
	<fieldset>
		<legend><?php echo __('Edit Arquivo Subido'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('material_id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('path');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ArquivoSubido.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('ArquivoSubido.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Arquivo Subidos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Materials'), array('controller' => 'materials', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Material'), array('controller' => 'materials', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
