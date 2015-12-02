<div class="cursos">
<?php echo $this->Form->create('Curso'); ?>
	<fieldset>
		<legend><?php echo __('Criar Curso'); ?></legend>
	<?php
		echo $this->Form->input('titulo');
		echo $this->Form->input('descricao');
		echo $this->Form->hidden('data_inicio');
		if (is_null($area_id)) {
			echo $this->Form->input('area_pertencente', ['options' => $areas, 'empty' => '-Selecione']);
		}
		else {
			echo $this->Form->hidden('area_pertencente', ['options' => $areas, 'empty' => '-Selecione', 'value' => $area_id]);
		}
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>