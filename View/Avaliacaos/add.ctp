<div class="avaliacaos">
<?php echo $this->Form->create('Avaliacao'); ?>
	<fieldset>
		<legend><?php echo __('Avaliar aula'); ?></legend>
	<?php
		echo $this->Form->input('nota');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>