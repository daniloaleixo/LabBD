<div class="textos">
<?php echo $this->Form->create('Texto'); ?>
<h2>Curso: <?php echo $aula['Curso']['titulo'];?></h2>
	<fieldset>
		<legend><?php echo __('Novo Texto Para '.$aula['Aula']['titulo']); ?></legend>
	<?php
		echo $this->Form->input('conteudo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
