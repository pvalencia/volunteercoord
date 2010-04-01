<?php
class RolesController extends AppController {

	var $name = 'Roles';

	function admin_index() {
		$roles = $this->Role->find('all');
		$this->set(compact('roles'));
	}

	function admin_add() {
		if(!empty($this->data['Role'])) {
			$this->Role->create($this->data['Role']);
			if($this->Role->save()) {
				$this->Session->setFlash(String::insert(__('Role :name saved.', true), $this->data['Role']));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Form error, please correct', true));
			}
		}
	}

	function admin_edit($role_id) {
		$role = $this->Role->find('first', array('conditions' => array('Role.id' => $role_id)));
		if($role == null) {
			$this->Session->setFlash(String::insert(__('Role doesn\'t exists.', true), $this->data['Role']));
			$this->redirect(array('action' => 'index'));
		}
		if(!empty($this->data['Role'])) {
			$this->data['Role']['id'] = $role_id;
			if($this->Role->save($this->data['Role'])) {
				$this->Session->setFlash(String::insert(__('Role :name updated.', true), $this->data['Role']));
				$this->redirect(array('action' => 'index'));
			}
		} else {
			$this->data = $role;
		}
		$this->set(compact('role'));
	}
}
?>
