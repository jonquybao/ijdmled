<?php
App::uses('AppController', 'Controller');
class PositionsController extends AppController {

////////////////////////////////////////////////////////////

	public function index() {
		$positions = $this->Position->find('all');
		$this->set(compact('positions'));
		return $positions ;
	}

////////////////////////////////////////////////////////////

	public function view($slug = null) {
		$position  =  $this->Position ->find('first', array(
			'conditions' => array(
				'Bulbsizes .active' => 1
			
			)
		));
		if(empty($position )) {
			return $this->redirect(array('action' => 'index'));
		}
		$this->set(compact('$position '));

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
			'Position' => array(
				'recursive' => 0,
			)
		);
		$this->set('positions', $this->Paginator->paginate());
	}

////////////////////////////////////////////////////////////

	public function admin_view($id = null) {
		if (!$this->Position->exists($id)) {
			throw new NotFoundException('Invalid position');
		}
		$position = $this->Position->find('first', array(
			'conditions' => array(
				'Position.id' => $id
			)
		));
		$this->set(compact('position'));
	}

////////////////////////////////////////////////////////////

	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Position->create();
			if ($this->Position->save($this->request->data)) {
				$this->Session->setFlash('The position has been saved');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('The position could not be saved. Please, try again.');
			}
		}

		//$positions = $this->Position->generateTreeList(null, null, null, '--');
		//$this->set(compact('positions'));

	}

////////////////////////////////////////////////////////////

	public function admin_edit($id = null) {
		if (!$this->Position->exists($id)) {
			throw new NotFoundException('Invalid position');
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Position->save($this->request->data)) {
				$this->Session->setFlash('The position has been saved');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('The position could not be saved. Please, try again.');
			}
		} else {
			$this->request->data = $this->Position->find('first', array('conditions' => array('Position.id' => $id)));
		}

		//$positions = $this->Position->generateTreeList(null, null, null, '--');

		$this->set(compact('positions'));

	}

////////////////////////////////////////////////////////////

	public function admin_delete($id = null) {
		$this->Position->id = $id;
		if (!$this->Position->exists()) {
			throw new NotFoundException('Invalid position');
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Position->delete()) {
			$this->Session->setFlash('Position deleted');
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash('Position was not deleted');
		return $this->redirect(array('action' => 'index'));
	}

////////////////////////////////////////////////////////////


}