<div class="areas">
<h2><?php echo __('<strong>Área:</strong> '.$area['Area']['titulo']); ?></h2>
	<div class="row">
		<div class="col-md-6">
			<table>
				<tr><th><?php echo __('Titulo'); ?></th>
				<td>
					<?php echo h($area['Area']['titulo']); ?>
					&nbsp;
				</td></tr>
				<tr><th><?php echo __('É Subarea de'); ?></th>
				<td>
					<?php echo h($area['Area']['e_subarea']); ?>
					&nbsp;
				</td></tr>
				<tr><th><?php echo __('Criado Por'); ?></th>
				<td>
					<?php echo h($area['Area']['criado_por']); ?>
					&nbsp;
				</td></tr>
				<tr><th><?php echo __('Criado Em'); ?></th>
				<td>
					<?php echo h($area['Area']['criado_em']); ?>
					&nbsp;
				</td></tr>
			</table>
		</div>
	</div>
<!-- --------------------------------------------------------- -->
	<div class="row">
		<div class="col-md-6 actions"><!-- SUBAREAS -->
			<h2>Subareas</h2>
			<ul>
				<?php foreach ($subareas as $item){?>
					<li><?php echo $this->Html->link(__($item['areas']['titulo']), array('controller' => 'areas', 'action' => 'view', $item['areas']['id'])); ?> </li>
				<?php }?>
			</ul>
		</div>
		<div class="col-md-6 actions"><!-- ESPAÇO -->
		</div>
		<div class="col-md-6 actions"><!-- CURSOS -->
			<h2>Cursos</h2>
			<ul>
				<?php foreach ($cursos as $item){?>
					<?php if ($item['cursos']['publicado'] == true):?>
						<li><?php echo $this->Html->link(__($item['cursos']['titulo']), array('controller' => 'cursos', 'action' => 'view', $item['cursos']['id'])); ?> </li>
					<?php endif;?>
				<?php }?>
			</ul>
		</div>
	</div>
</div>
