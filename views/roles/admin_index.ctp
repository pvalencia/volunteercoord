<div class="roles index">
	<h2><?php __('Roles');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php __('Id'); ?></th>
			<th><?php __('Name'); ?></th>
			<th><?php __('Created'); ?></th>
			<th><?php __('Modified'); ?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($roles as $role):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $role['Role']['id']; ?>&nbsp;</td>
		<td>
			<?php 
				echo $this->Html->link($role['Role']['name'],
					array('action' => 'edit', $role['Role']['id']),
					array('title' => String::insert(__('Edit :s\'s name', true), array('s' => $role['Role']['name'])))); 
			?>&nbsp;
		</td>
		<td><?php echo $role['Role']['created']; ?>&nbsp;</td>
		<td><?php echo $role['Role']['modified']; ?>&nbsp;</td>
<?php endforeach; ?>
	</table>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(String::insert(__('New :s', true), array('s' => __('Role', true))), array('action' => 'add')); ?></li>
	</ul>
</div>
