<div class="referenciaExternas">
<?php echo $this->Form->create('ReferenciaExterna'); ?>
	<fieldset>
		<legend><?php echo __('Incluir Referencia Externa'); ?></legend>
	<?php
		echo $this->Form->input('link');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>