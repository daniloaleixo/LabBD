<h2>Novo tópico para <?php echo '' ?></h2>
<div class="posts">
<?php echo $this->Form->create('Post'); ?>
	<fieldset>
		<legend><?php echo __('Criar tópico para: '.$aula['Aula']['titulo']); ?></legend>
	<?php
		echo $this->Form->input('titulo');
		echo $this->Form->input('texto');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>