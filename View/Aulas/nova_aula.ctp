<div class="aulas">
<?php echo $this->Form->create('Aula'); ?>
	<fieldset>
		<legend><?php echo __('Criar aula para: <strong>'.$curso['Curso']['titulo'].'</strong>'); ?></legend>
	<?php
		echo $this->Form->input('titulo');
		echo $this->Form->hidden('curso_pertencente', ['value' => $curso['Curso']['id']]);
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>