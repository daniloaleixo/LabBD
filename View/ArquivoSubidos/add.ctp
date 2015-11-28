<div class="arquivoSubidos">
<?php echo $this->Form->create('ArquivoSubido',array(
					'role'=>'form',
					'inputDefaults'=>array('div'=>'form-group', 'class'=>'form-control'),
					'type' => 'file'
			)); ?>
	<fieldset>
		<legend><?php echo __('Subir arquivo'); ?></legend>
	<?php
		echo $this->Form->input('arquivo', array('type' => 'file'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>