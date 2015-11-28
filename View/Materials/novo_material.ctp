<div class="materials">
<?php echo $this->Form->create('Material'); ?>
	<legend><?php echo __('Criar Material'); ?></legend>
	<div>
		<span>
			<?php echo $this->Html->link(__('Texto'), array('controller' => 'textos', 'action' => 'add', $aula['Aula']['id'])); ?>
		</span><br><br>
		<span>
			<?php echo $this->Html->link(__('Arquivo'), array('controller' => 'arquivo_subidos', 'action' => 'add', $aula['Aula']['id'])); ?>
		</span><br><br>
		<span>
			<?php echo $this->Html->link(__('URL'), array('controller' => 'referencia_externas', 'action' => 'add', $aula['Aula']['id'])); ?>
		</span>
	</div>
<?php echo $this->Form->end(__('Submit')); ?>
</div>