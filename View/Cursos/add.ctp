<div class="cursos">
<?php echo $this->Form->create('Curso'); ?>
	<fieldset>
		<legend><?php echo __('Add Curso'); ?></legend>
	<?php
		echo $this->Form->input('titulo');
		echo $this->Form->input('descricao');
		echo $this->Form->input('data_inicio');
		echo $this->Form->input('area_pertencente', ['options' => $areas, 'empty' => '-Selecione']);
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>