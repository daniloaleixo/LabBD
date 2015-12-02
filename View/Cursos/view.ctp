<div class="cursos">
<h2><?php echo __('<strong>Curso:</strong> '.$curso['Curso']['titulo']); ?></h2>
	<div class="row">
		<div class="col-md-6">
			<h4><?php echo __('Descricao'); ?></h4>
			<p><?php echo h($curso['Curso']['descricao']); ?></p>
		</div>
	</div>
<!-- --------------------------------------------------------- -->
	<div class="row">
		<?php if ($e_prof || $e_tutor):?>
			<?php echo $this->Html->link(__('Criar nova aula'), array('controller' => 'aulas', 'action' => 'nova_aula', $curso['Curso']['id'])); ?>
			<br><br><br>
			<?php echo $this->Html->link(__('Adicionar prof/tutor'), array('controller' => 'participas', 'action' => 'add', $curso['Curso']['id'])); ?>
		<?php endif;?><br><br><br>
		<?php if ($e_prof && $curso['Curso']['publicado'] == false):?>
			<?php echo $this->Html->link(__('Iniciar curso'), array('controller' => 'cursos', 'action' => 'iniciar_curso', $curso['Curso']['id'])); ?>
		<?php endif;?>
	</div>
		<div class="col-md-6 actions"><!-- AULAS -->
			<h2>Aulas</h2>
			<ul>
				<?php foreach ($aulas as $item){?>
					<li><?php echo $this->Html->link(__($item['aulas']['titulo']), array('controller' => 'aulas', 'action' => 'view', $item['aulas']['id'])); ?> </li>
				<?php }?>
			</ul>
		</div>
	</div>
</div>
