<div class="groups">
<h2><?php echo __('Grupo'); ?></h2>
	<div>
		<table>
			<tr>
			<th><?php echo __('Id'); ?></th>
			<td>
				<?php echo h($group['Group']['id']); ?>
				&nbsp;
			</td>
			</tr>
			<tr>
			<th><?php echo __('Name'); ?></th>
			<td>
				<?php echo h($group['Group']['name']); ?>
				&nbsp;
			</td>
			</tr>
			<tr>
			<th><?php echo __('Created'); ?></th>
			<td>
				<?php echo h($group['Group']['created']); ?>
				&nbsp;
			</td>
			</tr>
			<tr>
			<th><?php echo __('Modified'); ?></th>
			<td>
				<?php echo h($group['Group']['modified']); ?>
				&nbsp;
			</td>
			</tr>
		</table>
	</div>
</div>
