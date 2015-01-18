<?php
class OrderItemsController extends AppController {

////////////////////////////////////////////////////////////

	public $scaffold = 'admin';

////////////////////////////////////////////////////////////

	public function admin_index() {

		$this->Paginator = $this->Components->load('Paginator');

		$this->Paginator->settings = array(
			'OrderItems' => array(
				'recursive' => -1,
				'contain' => array(
				),
				'conditions' => array(
				)
				,
				'limit' => 20,
				'paramType' => 'querystring',
			)
		);
		$orderitems = $this->Paginator->paginate();

		$this->set(compact('orderitems'));
	}

}
