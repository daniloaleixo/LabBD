<div class="avaliacaos view">
<h2><?php echo __('Avaliacao'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($avaliacao['Avaliacao']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($avaliacao['User']['username'], array('controller' => 'users', 'action' => 'view', $avaliacao['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Aula'); ?></dt>
		<dd>
			<?php echo $this->Html->link($avaliacao['Aula']['id'], array('controller' => 'aulas', 'action' => 'view', $avaliacao['Aula']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nota'); ?></dt>
		<dd>
			<?php echo h($avaliacao['Avaliacao']['nota']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Avaliacao'), array('action' => 'edit', $avaliacao['Avaliacao']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Avaliacao'), array('action' => 'delete', $avaliacao['Avaliacao']['id']), array(), __('Are you sure you want to delete # %s?', $avaliacao['Avaliacao']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Avaliacaos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Avaliacao'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Aulas'), array('controller' => 'aulas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aula'), array('controller' => 'aulas', 'action' => 'add')); ?> </li>
	</ul>
</div>
