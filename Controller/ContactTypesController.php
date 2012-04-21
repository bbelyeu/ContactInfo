<?php
App::uses('ContactInfoAppController', 'ContactInfo.Controller');
/**
 * ContactTypes Controller
 *
 * @property ContactType $ContactType
 */
class ContactTypesController extends ContactInfoAppController {


/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->ContactType->recursive = 0;
		$this->set('contactTypes', $this->paginate());
	}

/**
 * admin_view method
 *
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->ContactType->id = $id;
		if (!$this->ContactType->exists()) {
			throw new NotFoundException(__('Invalid contact type'));
		}
		$this->set('contactType', $this->ContactType->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->ContactType->create();
			if ($this->ContactType->save($this->request->data)) {
				$this->Session->setFlash(__('The contact type has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The contact type could not be saved. Please, try again.'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->ContactType->id = $id;
		if (!$this->ContactType->exists()) {
			throw new NotFoundException(__('Invalid contact type'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ContactType->save($this->request->data)) {
				$this->Session->setFlash(__('The contact type has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The contact type could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->ContactType->read(null, $id);
		}
	}

/**
 * admin_delete method
 *
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->ContactType->id = $id;
		if (!$this->ContactType->exists()) {
			throw new NotFoundException(__('Invalid contact type'));
		}
		if ($this->ContactType->delete()) {
			$this->Session->setFlash(__('Contact type deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Contact type was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
