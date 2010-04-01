<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo __('VoolunterCoord'); ?>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		if(Configure::read() > 0)
			echo $this->Html->script('jquery-1.4.2.min.js');
		else
			echo $this->Html->script('http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js');
		
		echo $scripts_for_layout;
	?>
</head>
<body>
	<div id="container">
		<div id="header">
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $content_for_layout; ?>

		</div>
		<div id="footer">
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
