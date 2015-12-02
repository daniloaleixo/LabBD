<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'Lab BD');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css(array('bootstrap.min', 'glyphicons'));
		echo $this->Html->script(array('jquery-1.11.1.min.js', 'bootstrap'));

		echo $this->Html->css('cake.generic');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<h1><?php echo $this->Html->link($cakeDescription, 'http://cakephp.org'); ?></h1>
		</div>
		<div id="content">
		<div class=""><?php echo $this->Html->link(__('Logout'), array('controller' => 'users', 'action' => 'logout')); ?></div>
			<div class="row">
				<div class="col-md-2 actions" id="default_menu_esquerdo"><!-- MENU LATERAL -->

					<h2>Usuários</h2>
					<ul>
						<li><?php echo $this->Html->link(__('Listar Usuários'), array('controller' => 'users', 'action' => 'index')); ?> </li>
						<li><?php echo $this->Html->link(__('Criar Usuário'), array('controller' => 'users', 'action' => 'add')); ?> </li>
					</ul>
					<h2>Áreas</h2>
					<ul>
						<li><?php echo $this->Html->link(__('Listar Áreas'), array('controller' => 'areas', 'action' => 'index')); ?> </li>
						<li><?php echo $this->Html->link(__('Criar Área'), array('controller' => 'areas', 'action' => 'add')); ?> </li>
					</ul>
					<h2>Cursos</h2>
					<ul>
						<li><?php echo $this->Html->link(__('Listar Cursos'), array('controller' => 'cursos', 'action' => 'index')); ?> </li>
						<li><?php echo $this->Html->link(__('Criar Curso'), array('controller' => 'cursos', 'action' => 'add')); ?> </li>
					</ul>
				</div>
				<div class="col-md-10"><!-- CONTEUDO VAI AQUI -->
					<?php echo $this->Session->flash(); ?>
					<?php echo $this->fetch('content'); ?>
				</div>
			</div>
		</div>
		<div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false, 'id' => 'cake-powered')
				);
			?>
			<p>
				<?php echo $cakeVersion; ?>
			</p>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
