<?php
App::uses('AppController', 'Controller');
class LedcategoriesController extends AppController {

////////////////////////////////////////////////////////////

	public function index() {
		$ledcategories = $this->Ledcategory->find('all', array(
			'recursive' => -1,
			'order' => array(
				'Ledcategory.name' => 'ASC'
			)
		));
		$this->set(compact('ledcategories'));
		return $ledcategories;
	}

////////////////////////////////////////////////////////////

	public function view($slug = null) {
		$manufacturer =  $this->Ledcategory->find('first', array(
			'conditions' => array(
				'Ledcategory.active' => 1
			
			)
		));
		if(empty($manufacturer)) {
			return $this->redirect(array('action' => 'index'));
		}
		$this->set(compact('ledcategory'));

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


	////////////////////////////////////////////////////////////

	public function admin_index() {
		$this->Paginator = $this->Components->load('Paginator');
		$this->Paginator->settings = array(
			'Ledcategory' => array(
				'recursive' => 0,
			)
		);
		$this->set('ledcategories', $this->Paginator->paginate());
	}

////////////////////////////////////////////////////////////

	public function admin_view($id = null) {

		$ledcategory = $this->Ledcategory->find('first', array(
			'conditions' => array(
				'Ledcategory.id' => $id,
			)
		));
		$this->set(compact('ledcategory'));
	}

////////////////////////////////////////////////////////////

	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Ledcategory->create();
			if ($this->Ledcategory->save($this->request->data)) {
				$this->Session->setFlash('The Ledcategory has been saved');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('The Ledcategory could not be saved. Please, try again.');
			}
		}

		/*$categories = $this->Category->generateTreeList(null, null, null, '--');
		$this->set(compact('bulbsizes'));*/
	}

////////////////////////////////////////////////////////////

	public function admin_edit($bid = null) {

		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Ledcategory->save($this->request->data)) {
				$this->Session->setFlash('The Ledcategory has been saved');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('The Ledcategory could not be saved. Please, try again.');
			}
		} else {
			$this->request->data = $this->Ledcategory->find('first', array('conditions' => array('Ledcategory.id' => $bid)));
		}

		//$bulbsizes = $this->Bulbsize->generateTreeList(null, null, null, '--');

		$this->set(compact('ledcategories'));

	}

////////////////////////////////////////////////////////////

	public function admin_delete($id = null) {
		$this->Ledcategory->id = $id;
	
		$this->request->onlyAllow('post', 'delete');
		if ($this->Ledcategory->delete()) {
			$this->Session->setFlash('Ledcategory deleted');
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash('Ledcategory was not deleted');
		return $this->redirect(array('action' => 'index'));
	}

////////////////////////////////////////////////////////////



}