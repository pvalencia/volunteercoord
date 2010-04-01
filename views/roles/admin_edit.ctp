<div class="roles form">
<?php echo $this->Form->create('Role');?>
	<fieldset>
 		<legend><?php echo String::insert(__('Edit :s\'s name', true), array('s' => $this->Form->value('Role.name'))); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Roles', true)), array('action' => 'index'));?></li>
	</ul>
</div>
