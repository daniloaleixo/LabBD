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
				<br><br>
				<?php foreach ($topicos as $topico){?>
					<?php echo $this->Html->link(__($topico['posts']['titulo']), array('controller' => 'posts', 'action' => 'view', $topico['posts']['id']),  array( 'class' => 'button')); ?>
					<br><br>
				<?php }?>
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
<style>
<!--

-->
a.button {
    color: #6e6e6e;
    font: bold 12px Helvetica, Arial, sans-serif;
    text-decoration: none;
    padding: 7px 12px;
    position: relative;
    display: inline-block;
    text-shadow: 0 1px 0 #fff;
    -webkit-transition: border-color .218s;
    -moz-transition: border .218s;
    -o-transition: border-color .218s;
    transition: border-color .218s;
    background: #f3f3f3;
    background: -webkit-gradient(linear,0% 40%,0% 70%,from(#F5F5F5),to(#F1F1F1));
    background: -moz-linear-gradient(linear,0% 40%,0% 70%,from(#F5F5F5),to(#F1F1F1));
    border: solid 1px #dcdcdc;
    border-radius: 2px;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    margin-right: 20px;
    cursor:pointer;
}
a.button:hover{
    color: #333;
    border-color: #999;
    -moz-box-shadow: 0 2px 0 rgba(0, 0, 0, 0.2); 
-webkit-box-shadow:0 2px 5px rgba(0, 0, 0, 0.2);
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.15);
}
a.button:active {
    color: #000;
    border-color: #444;
}
</style>
