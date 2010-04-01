<div class="roles form">
<?php echo $this->Form->create('Role');?>
	<fieldset>
 		<legend><?php echo String::insert(__('Add :s', true), array('s' => __('Role', true))); ?></legend>
	<?php
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(String::insert(__('List :s', true), array('s' => __('Roles', true))), array('action' => 'index'));?></li>
	</ul>
</div>
