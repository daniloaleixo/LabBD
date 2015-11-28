<div class="participas view">
<h2><?php echo __('Participa'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($participa['Participa']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($participa['User']['id'], array('controller' => 'users', 'action' => 'view', $participa['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Curso'); ?></dt>
		<dd>
			<?php echo $this->Html->link($participa['Curso']['id'], array('controller' => 'cursos', 'action' => 'view', $participa['Curso']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Permissao'); ?></dt>
		<dd>
			<?php echo h($participa['Participa']['permissao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data Inicio'); ?></dt>
		<dd>
			<?php echo h($participa['Participa']['data_inicio']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Participa'), array('action' => 'edit', $participa['Participa']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Participa'), array('action' => 'delete', $participa['Participa']['id']), array(), __('Are you sure you want to delete # %s?', $participa['Participa']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Participas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Participa'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cursos'), array('controller' => 'cursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Curso'), array('controller' => 'cursos', 'action' => 'add')); ?> </li>
	</ul>
</div>
