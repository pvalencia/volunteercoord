<?php
class DATABASE_CONFIG {

	var $development = array(
		'driver' => 'sqlite',
		'persistent' => false,
		'host' => '',
		'login' => '',
		'password' => '',
		'database' => 'development.sqlite',
		'prefix' => '',
	);

	var $test = array(
		'driver' => 'sqlite',
		'persistent' => false,
		'host' => '',
		'login' => '',
		'password' => '',
		'database' => 'test.sqlite',
		'prefix' => '',
	);

	var $production = array(
		'driver' => 'mysql',
		'persistent' => false,
		'host' => 'localhost',
		'login' => 'user',
		'password' => 'password',
		'database' => 'database_name',
		'prefix' => '',
	);

	var $default = array();

	function __construct() {
		$this->development['database'] = ROOT . DS . $this->development['database'];
		$this->test['database'] = ROOT . DS . $this->test['database'];
		if(Configure::read() > 0)
			$this->default = $this->development;
		else
			$this->default = $this->production;
	}

	function DATABASE_CONFIG() {
		$this->__construct();
	}
}
?>
