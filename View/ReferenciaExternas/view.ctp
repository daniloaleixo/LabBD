<div class="referenciaExternas">
<h2><?php echo __('Referencia Externa'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($referenciaExterna['ReferenciaExterna']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Material'); ?></dt>
		<dd>
			<?php echo $this->Html->link($referenciaExterna['Material']['id'], array('controller' => 'materials', 'action' => 'view', $referenciaExterna['Material']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Link'); ?></dt>
		<dd>
			<?php echo h($referenciaExterna['ReferenciaExterna']['link']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($referenciaExterna['User']['id'], array('controller' => 'users', 'action' => 'view', $referenciaExterna['User']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>