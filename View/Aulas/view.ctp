<div class="aulas">
<h2><?php echo __($aula['Curso']['titulo']); ?></h2>
<h3><?php echo __($aula['Aula']['titulo']); ?></h3>
<?php if ($nota == ''):?>
	<h4><?php echo 'Não há notas para esta aula'?></h4>
<?php else:?>
	<h4><?php echo 'Nota: '.$nota;?></h4>
<?php endif;?>
	<div class="row">
		<div class="col-md-6">
			<?php echo $this->Html->link(__('Inserir novo material'), array('controller' => 'materials', 'action' => 'novo_material', $aula['Aula']['id'])); ?>
			<br><br><br>
			<?php echo $this->Html->link(__('Avaliar aula'), array('controller' => 'avaliacaos', 'action' => 'add', $aula['Aula']['id'])); ?>
			<div>
				<hr>
				<h4>Fórum</h4>
				<?php echo $this->Html->link(__('Criar novo tópico'), array('controller' => 'posts', 'action' => 'criar_topico', 0, $aula['Aula']['id'])); ?>
			</div>
		</div>
		<div class="col-md-6 actions">
			<h3>Materiais</h3>
			<?php foreach ($materiais as $item){?>
				<?php if (!is_null($item['lista_materiais']['texto_id'])):?>
				<li>
					<?php echo $this->Html->link("Texto ".$item['lista_materiais']['texto_id'], ['controller' => 'textos', 'action' => 'view', $item['lista_materiais']['texto_id']]);?>
				</li><br>
				<?php elseif(!is_null($item['lista_materiais']['arq_id'])):?>
				<li>
					<?php echo $this->Html->link("Arquivo ".$item['lista_materiais']['arq_id'], ['controller' => 'arquivo_subidos', 'action' => 'view', $item['lista_materiais']['arq_id']]);?>
				</li><br>
				<?php elseif(!is_null($item['lista_materiais']['ref_id'])):?>
				<li>
					<?php echo $this->Html->link("Link ".$item['lista_materiais']['ref_id'], ['controller' => 'referencia_externas', 'action' => 'view', $item['lista_materiais']['ref_id']]);?>
				</li><br>
				<?php endif;?>
			<?php }?>
		</div>
	</div>
</div>
