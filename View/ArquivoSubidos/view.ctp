<div class="arquivoSubidos">
<h2><?php echo __('Arquivo Subido'); ?></h2>
	<?php echo $this->Html->link("Baixar", array('controller'=>'arquivo_subidos', 'action' => 'baixa_arquivo', $arquivoSubido['ArquivoSubido']['id']), array('class'=>'btn btn-default', 'escape'=>false));?>
</div>