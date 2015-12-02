<div class="areas">
<?php if (!is_null($area['Area']['e_subarea'])):?>
<h4><?php echo 'Grande Área: '.$lista_de_areas[$area['Area']['e_subarea']];?></h4>
<?php endif;?>
<h2><?php echo __('<strong>Área:</strong> '.$area['Area']['titulo']); ?></h2>
	<div class="row">
		<?php echo $this->Html->link(__("Criar Subarea"), array('controller' => 'areas', 'action' => 'add', $area['Area']['id'])); ?>
		<br>
		<br>
		<?php echo $this->Html->link(__("Criar Curso"), array('controller' => 'cursos', 'action' => 'add', $area['Area']['id'])); ?>
	</div>
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
