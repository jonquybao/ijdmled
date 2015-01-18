<?php
App::uses('AppController', 'Controller');
class ManufacturersController extends AppController {

////////////////////////////////////////////////////////////

	public function index() {
		$manufacturers = $this->Manufacturer->find('all', array(
			'recursive' => -1,
			'order' => array(
				'Manufacturer.name' => 'ASC'
			)
		));
		$this->set(compact('manufacturers'));
		return $manufacturers;
	}

////////////////////////////////////////////////////////////

	public function view($slug = null) {
		$manufacturer =  $this->Manufacturer->find('first', array(
			'conditions' => array(
				'Manufacturer.active' => 1
			
			)
		));
		if(empty($manufacturer)) {
			return $this->redirect(array('action' => 'index'));
		}
		$this->set(compact('manufacturer'));

		/*$this->Paginator = $this->Components->load('Paginator');

		$this->Paginator->settings = array(
			'Product' => array(
				'recursive' => -1,
				'contain' => array(
					'Brand'
				),
				'limit' => 40,
				'conditions' => array(
					'Product.active' => 1,
					'Product.brand_id' => $brand['Brand']['id'],
					'Brand.active' => 1,

				),
				'order' => array(
					'Product.name' => 'ASC'
				),
				'paramType' => 'querystring',
			)
		);
		$products = $this->Paginator->paginate($this->Brand->Product);

		$this->set(compact('products'));*/

	}

  	public function admin_index() {
		$this->Paginator = $this->Components->load('Paginator');
		$this->Paginator->settings = array(
			'Manufacturer' => array(
				'recursive' => 0,
			)
		);
		$this->set('manufacturers', $this->Paginator->paginate());
	}

////////////////////////////////////////////////////////////

	public function admin_view($id = null) {
		if (!$this->Manufacturer->exists($id)) {
			throw new NotFoundException('Invalid manufacturer');
		}
		$manufacturer = $this->Manufacturer->find('first', array(
			'conditions' => array(
				'Manufacturer.id' => $id
			)
		));
		$this->set(compact('manufacturer'));
	}

////////////////////////////////////////////////////////////

	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Manufacturer->create();
			if ($this->Manufacturer->save($this->request->data)) {
				$this->Session->setFlash('The manufacturer has been saved');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('The manufacturer could not be saved. Please, try again.');
			}
		}

		//$manufacturers = $this->Manufacturer->generateTreeList(null, null, null, '--');
		//$this->set(compact('manufacturers'));

	}

////////////////////////////////////////////////////////////

	public function admin_edit($id = null) {
		if (!$this->Manufacturer->exists($id)) {
			throw new NotFoundException('Invalid manufacturer');
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Manufacturer->save($this->request->data)) {
				$this->Session->setFlash('The manufacturer has been saved');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('The manufacturer could not be saved. Please, try again.');
			}
		} else {
			$this->request->data = $this->Manufacturer->find('first', array('conditions' => array('Manufacturer.id' => $id)));
		}

		//$manufacturers = $this->Manufacturer->generateTreeList(null, null, null, '--');

		$this->set(compact('manufacturers'));

	}

////////////////////////////////////////////////////////////

	public function admin_delete($id = null) {
		$this->Manufacturer->id = $id;
		if (!$this->Manufacturer->exists()) {
			throw new NotFoundException('Invalid manufacturer');
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Manufacturer->delete()) {
			$this->Session->setFlash('Manufacturer deleted');
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash('Manufacturer was not deleted');
		return $this->redirect(array('action' => 'index'));
	}

////////////////////////////////////////////////////////////


}