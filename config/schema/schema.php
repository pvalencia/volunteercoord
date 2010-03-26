<?php 
/* SVN FILE: $Id$ */
/* App schema generated on: 2010-03-26 00:03:00 : 1269575760*/
class AppSchema extends CakeSchema {
	var $name = 'App';

	function before($event = array()) {
		return true;
	}

	function after($event = array()) {
	}

	var $users = array(
		'id' => array('type' =>'integer', 'length' => 11, 'default' => null, 'null' => false, 'key' => 'primary'),
		'name' => array('type' => 'string', 'length' => 64, 'default' => null, 'null' => false),
		'email' => array('type' => 'string', 'length' => 255, 'default' => null, 'null' => false),
		'password' => array('type' => 'string', 'length' => 255, 'default' => null, 'null' => false),
		'active' => array('type' => 'boolean', 'default' => false, 'null' => false),
		'organization_id' => array('type' => 'integer', 'length' => 11, 'default' => null, 'null' => false),
		'role_id' => array('type' => 'integer', 'length' => 11, 'default' => null, 'null' => false),
		'created' => array('type' => 'datetime', 'default' => null, 'null' => false),
		'modified' => array('type' => 'datetime', 'default' => null, 'null' => false),
	);

	var $organizations = array(
		'id' => array('type' =>'integer', 'length' => 11, 'default' => null, 'null' => false, 'key' => 'primary'),
		'name' => array('type' => 'string', 'length' => 64, 'default' => null, 'null' => false),
		'created' => array('type' => 'datetime', 'default' => null, 'null' => false),
		'modified' => array('type' => 'datetime', 'default' => null, 'null' => false),
	);

	var $roles = array(
		'id' => array('type' =>'integer', 'length' => 11, 'default' => null, 'null' => false, 'key' => 'primary'),
		'name' => array('type' => 'string', 'length' => 64, 'default' => null, 'null' => false),
		'created' => array('type' => 'datetime', 'default' => null, 'null' => false),
		'modified' => array('type' => 'datetime', 'default' => null, 'null' => false),
	);
}
?>
