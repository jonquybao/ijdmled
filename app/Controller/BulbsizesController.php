<?php
App::uses('AppController', 'Controller');
class BulbsizesController extends AppController {

////////////////////////////////////////////////////////////

	public function index() {
		$bulbsizes = $this->Bulbsize->find('all');
		$this->set(compact('bulbsizes'));
		return $bulbsizes ;
	}
	
	public function size() {
		$bulbsize  =  $this->Bulbsize ->find('first', array(
			'conditions' => array(
				'Bulbsize.size' => $this->params->params['size']
			
			)
		));
		return $bulbsize ;
	}


////////////////////////////////////////////////////////////

	public function view($slug = null) {
		$bulbsize  =  $this->Bulbsize ->find('first', array(
			'conditions' => array(
				'Bulbsizes .active' => 1
			
			)
		));
		if(empty($bulbsizes )) {
			return $this->redirect(array('action' => 'index'));
		}
		$this->set(compact('bulbsize '));
/*
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

		$this->set(compact('products'));
*/
	}

	////////////////////////////////////////////////////////////

	public function admin_index() {
		$this->Paginator = $this->Components->load('Paginator');
		$this->Paginator->settings = array(
			'Bulbsize' => array(
				'recursive' => 0,
			)
		);
		$this->set('bulbsizes', $this->Paginator->paginate());
	}

////////////////////////////////////////////////////////////

	public function admin_view($id = null) {

		$bulbsize = $this->Bulbsize->find('first', array(
			'conditions' => array(
				'Bulbsize.id' => $id,
			)
		));
		$this->set(compact('bulbsize'));
	}

////////////////////////////////////////////////////////////

	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Bulbsize->create();
			if ($this->Bulbsize->save($this->request->data)) {
				$this->Session->setFlash('The Bulbsize has been saved');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('The Bulbsize could not be saved. Please, try again.');
			}
		}

		/*$categories = $this->Category->generateTreeList(null, null, null, '--');
		$this->set(compact('bulbsizes'));*/
	}

////////////////////////////////////////////////////////////

	public function admin_edit($bid = null) {

		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Bulbsize->save($this->request->data)) {
				$this->Session->setFlash('The bulbsize has been saved');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('The bulbsize could not be saved. Please, try again.');
			}
		} else {
			$this->request->data = $this->Bulbsize->find('first', array('conditions' => array('Bulbsize.id' => $bid)));
		}

		//$bulbsizes = $this->Bulbsize->generateTreeList(null, null, null, '--');

		$this->set(compact('bulbsizes'));

	}

////////////////////////////////////////////////////////////

	public function admin_delete($id = null) {
		$this->Bulbsize->id = $id;
	
		$this->request->onlyAllow('post', 'delete');
		if ($this->Bulbsize->delete()) {
			$this->Session->setFlash('Bulbsize deleted');
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash('Bulbsize was not deleted');
		return $this->redirect(array('action' => 'index'));
	}

////////////////////////////////////////////////////////////



}