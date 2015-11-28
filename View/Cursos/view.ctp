<div class="cursos">
<h2><?php echo __('<strong>Curso:</strong> '.$curso['Curso']['titulo']); ?></h2>
	<div class="row">
		<div class="col-md-6">
			<table>
				<tr><th><?php echo __('Id'); ?></th>
				<td>
					<?php echo h($curso['Curso']['id']); ?>
					&nbsp;
				</td></tr>
				<tr><th><?php echo __('Titulo'); ?></th>
				<td>
					<?php echo h($curso['Curso']['titulo']); ?>
					&nbsp;
				</td></tr>
				<tr><th><?php echo __('Descricao'); ?></th>
				<td>
					<?php echo h($curso['Curso']['descricao']); ?>
					&nbsp;
				</td></tr>
				<tr><th><?php echo __('Data Inicio'); ?></th>
				<td>
					<?php echo h($curso['Curso']['data_inicio']); ?>
					&nbsp;
				</td></tr>
				<tr><th><?php echo __('Area Pertencente'); ?></th>
				<td>
					<?php echo h($curso['Curso']['area_pertencente']); ?>
					&nbsp;
				</td></tr>
			</table>
		</div>
	</div>
<!-- --------------------------------------------------------- -->
	<div class="row">
		<div class="col-md-6 actions actions">
			<?php if ($e_prof || $e_tutor):?>
				<?php echo $this->Html->link(__('Criar nova aula'), array('controller' => 'aulas', 'action' => 'nova_aula', $curso['Curso']['id'])); ?>
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
