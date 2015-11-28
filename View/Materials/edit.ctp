<div class="materials">
<?php echo $this->Form->create('Material'); ?>
	<fieldset>
		<legend><?php echo __('Edit Material'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('data_criacao');
		echo $this->Form->input('aula_id');
		echo $this->Form->input('uploader_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>