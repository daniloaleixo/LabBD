<div class="areas">
<?php echo $this->Form->create('Area'); ?>
	<fieldset>
		<legend><?php echo __('Nova Area'); ?></legend>
	<?php
		echo $this->Form->input('titulo');
		if (is_null($superarea_id)) { 
			echo $this->Form->input('e_subarea', ['options' => $areas, 'empty' => '-Selecione']);
		}
		else {
			echo $this->Form->hidden('e_subarea', ['options' => $areas, 'empty' => '-Selecione', 'value' => $superarea_id]);
		}
		echo $this->Form->hidden('criado_por', ['value' => $usuario]);
		echo $this->Form->hidden('criado_em', ['value' => date('Y-m-d')]);
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
