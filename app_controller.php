<?php
/**
 */

/**
 */
class AppController extends Controller {
	var $helpers = array('Html', 'Form', 'Session');

	var $components = array(
		'Cookie' => array(
			'name' => 'VolunteerCoord',
			'time' => '2 weeks',
		),
		'Session',
		'Auth' => array(
			'authorize' => 'actions',
			'userModel' => 'Person',
			'fields' => array('username' => 'email', 'password' => 'password')
		),
		'Acl'
	);

	function beforeFilter() {
		if(Configure::read() > 0)
			$this->Auth->allow('*');
	}
}
?>
