<div class="aulas">
<h2><?php echo __($aula['Curso']['titulo']); ?></h2>
<h3><?php echo __($aula['Aula']['titulo']); ?></h3>
	<div class="row">
		<div class="col-md-6 actions">
			<?php echo $this->Html->link(__('Inserir novo material'), array('controller' => 'materials', 'action' => 'novo_material', $aula['Aula']['id'])); ?>
		</div>
		<div class="col-md-6 actions">
			<h3>Materiais</h3>
			<?php foreach ($materiais as $item){?>
			
			<?php }?>
		</div>
	</div>
</div>
