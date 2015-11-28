<div class="materials">
<h2><?php echo __('Material'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($material['Material']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data Criacao'); ?></dt>
		<dd>
			<?php echo h($material['Material']['data_criacao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Aula'); ?></dt>
		<dd>
			<?php echo $this->Html->link($material['Aula']['id'], array('controller' => 'aulas', 'action' => 'view', $material['Aula']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($material['User']['id'], array('controller' => 'users', 'action' => 'view', $material['User']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
