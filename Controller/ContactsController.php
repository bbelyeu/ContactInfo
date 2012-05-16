<?php
App::uses('ContactInfoAppController', 'ContactInfo.Controller');
App::uses('CakeEmail', 'Network/Email');

/**
 * Contacts Controller
 *
 * @property Contact $Contact
 */
class ContactsController extends ContactInfoAppController 
{
    /**
     * Get a form to submit an email
     */
    public function email()
    {
		if ($this->request->is('post')) {
            echo '<pre>';var_dump($this->request);die;
            $sql = "select info from contacts where contact_type_id = (select id from contact_types where name = 'email')";
            $result = $this->Contact->query($sql);

            $email = new CakeEmail();
            $email->from(array('webform@'.env('SERVER_NAME') => 'Website Email Form'));
            $email->to($result[0]['contacts']['info']);
            $email->subject('Website Form submitted by: ');
            $email->send('My message');
        } else {
            $this->layout = "modal";
        }
    }

    /**
     * If auth component is turned on allow index & view without authorization
     *
     * @return null
     */
    public function beforeFilter()
    {   
        if (!empty($this->Auth)) {
            $this->Auth->allow('email');
        }   
        parent::beforeFilter();
    }

    /**
     * admin_index method
     *
     * @return void
     */
	public function admin_index() 
    {
		$this->Contact->recursive = 0;
		$this->set('contacts', $this->paginate());
	}

    /**
     * admin_view method
     *
     * @param string $id
     * @return void
     */
	public function admin_view($id = null) 
    {
		$this->Contact->id = $id;
		if (!$this->Contact->exists()) {
			throw new NotFoundException(__('Invalid contact'));
		}
		$this->set('contact', $this->Contact->read(null, $id));
	}

    /**
     * admin_add method
     *
     * @return void
     */
	public function admin_add() 
    {
		if ($this->request->is('post')) {
			$this->Contact->create();
			if ($this->Contact->save($this->request->data)) {
				$this->Session->setFlash(__('The contact has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The contact could not be saved. Please, try again.'));
			}
		}
		$contactTypes = $this->Contact->ContactType->find('list');
		$this->set(compact('contactTypes'));
	}

    /**
     * admin_edit method
     *
     * @param string $id
     * @return void
     */
	public function admin_edit($id = null) 
    {
		$this->Contact->id = $id;
		if (!$this->Contact->exists()) {
			throw new NotFoundException(__('Invalid contact'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Contact->save($this->request->data)) {
				$this->Session->setFlash(__('The contact has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The contact could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Contact->read(null, $id);
		}
		$contactTypes = $this->Contact->ContactType->find('list');
		$this->set(compact('contactTypes'));
	}

    /**
     * admin_delete method
     *
     * @param string $id
     * @return void
     */
	public function admin_delete($id = null) 
    {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Contact->id = $id;
		if (!$this->Contact->exists()) {
			throw new NotFoundException(__('Invalid contact'));
		}
		if ($this->Contact->delete()) {
			$this->Session->setFlash(__('Contact deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Contact was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

}
