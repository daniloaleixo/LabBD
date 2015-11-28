<div class="areas">
<?php echo $this->Form->create('Area'); ?>
	<fieldset>
		<legend><?php echo __('Add Area'); ?></legend>
	<?php
		echo $this->Form->input('titulo');
		echo $this->Form->input('e_subarea', ['options' => $areas, 'empty' => '-Selecione']);
		echo $this->Form->hidden('criado_por', ['value' => $usuario]);
		echo $this->Form->hidden('criado_em', ['value' => date('Y-m-d')]);
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
