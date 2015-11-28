<div class="participas">
<?php echo $this->Form->create('Participa'); ?>
	<fieldset>
		<legend><?php echo __('Adicionar Professor/Tutor para: <strong>'.$curso['Curso']['titulo'].'</strong>'); ?></legend>
	<?php
		echo $this->Form->input('user_id', ['empty' => '-Selecione', 'options' => $users]);
		echo $this->Form->input('permissao', ['empty' => '-Selecione', 'options' => [PERMISSAO_PROFESSOR => 'Professor', PERMISSAO_TUTOR => 'Tutor']]);
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>