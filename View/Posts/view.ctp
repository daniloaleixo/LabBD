<div class="posts">
<h2><?php echo 'CURSO: '.$topico['Curso']['titulo'];?></h2>
<h5><?php echo __('AULA: '.$topico['Aula']['titulo']); ?></h5>

<div>
<h3><?php echo 'TOPICO: '.$topico['Post']['titulo']?></h3>
<hr>
<?php foreach ($replies as $rp){?>
	<p><?php echo 'Por: <strong>'. $rp['users']['username'] .'</strong> dia: <strong>'. $rp['posts']['created'];?></strong>
	<h1><?php echo $rp['posts']['titulo'];?></h1>
	<p><?php echo $rp['posts']['texto'];?></p>
	<hr>
	
<?php }?>
</div>
<div class="posts">
<?php echo $this->Form->create('Post'); ?>
	<fieldset>
	<?php
		echo $this->Form->input('texto');
		echo $this->Form->hidden('em_resposta_a', ['value' => $topico['Post']['id']]);
	?>
	</fieldset>
<?php echo $this->Form->end(__('Enviar resposta')); ?>

</div>
	<p><?php echo $this->Html->link('Voltar para aula', array('controller' => 'aulas', 'action' => 'view', $topico['Aula']['id'])); ?></p>
	<br><br>
	<p><?php echo $this->Html->link('Voltar para o curso', array('controller' => 'cursos', 'action' => 'view', $topico['Curso']['id'])); ?></p>
</div>
