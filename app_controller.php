<?php
/**
 */

/**
 */
class AppController extends Controller {
	var $helpers = array('Html', 'Form');

	var $components = array(
		'Cookies' => array(
			'name' => 'VolunteerCoord',
			'time' => '2 weeks',
		),
		'Session',
	);
}
?>
