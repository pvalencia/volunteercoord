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
	);
}
?>
