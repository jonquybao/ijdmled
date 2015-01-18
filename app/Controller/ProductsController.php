<?php
App::uses('AppController', 'Controller');
class ProductsController extends AppController {

////////////////////////////////////////////////////////////

	public $components = array(
		'RequestHandler',
	);

////////////////////////////////////////////////////////////

	public function beforeFilter() {
		parent::beforeFilter();
	}

////////////////////////////////////////////////////////////

	public function index() {
		$products = $this->Product->find('all', array(
			'recursive' => -1,
			'contain' => array(
				'Brand'
			),
			'limit' => 20,
			'conditions' => array(
				'Product.active' => 1,
				'Brand.active' => 1
			),
			'order' => array(
				'Product.views' => 'ASC'
			)
		));
		$this->set(compact('products'));

		$this->Product->updateViews($products);

		$this->set('title_for_layout', Configure::read('Settings.SHOP_TITLE'));
	}

////////////////////////////////////////////////////////////
//--test
	public function shop($type=null, $input = null) {

		$options =array(
				'Product.active' => 1,
				'Brand.active' => 1
		);

		$categories = $this->requestAction('ledcategories/index'); 
		$manufacturers = $this->requestAction('manufacturers/index'); 
		$bulbsizes = $this->requestAction('bulbsizes/index'); 
		$positions = $this->requestAction('positions/index'); 

		$this->set(compact('categories'));
		$this->set(compact('manufacturers'));
		$this->set(compact('bulbsizes'));
		$this->set(compact('positions'));

		/*$ledcategory = $this->request->data('ledcategory');
		if (!empty($ledcategory )) {

			 $options['Product.ledcategory_id'] = $ledcategory;
		}

		$manufacturer = $this->request->data('manufacturer');
		if (!empty($manufacturer)) {

			 $options['Product.manufacturer_id'] = $manufacturer;
		}

		$bulbsize = $this->request->data('bulbsize');
		if (!empty($bulbsize)) {

			 $options['Product.bulbsize_id'] = $bulbsize;
		}

		$position = $this->request->data('position');
		if (!empty($position)) {

			 $options['Product.position_id'] = $position;
		}*/
		
		/*switch ($type) {
		    case 'ledcategory':
		         $options['Product.ledcategory_id'] = $input; 
		        break;
		    case 'manufacturer':
		        $options['Product.manufacturer_id'] = $input;
		        break;
		    case 'bulbsize':
		        $options['Product.bulbsize_id'] = $input;
		        break;
		    case 'position':
		        $options['Product.position_id'] = $input;
		        break;
		}*/
		
		if ($type == 'ledcategory') {
		    $options['Product.ledcategory_id'] = $input; 
		} elseif ($type == 'manufacturer') {
		    $options['Product.manufacturer_id'] = $input;
		} elseif ($type == 'bulbsize') {
		    $options['Product.bulbsize_id'] = $input;
		} elseif ($type == 'position') {
		    $options['Product.position_id'] = $input;
		}
		



		/*$products =$this->Product->find('all', array(
			'recursive' => -1,
			'contain' => array(
				'Brand'
			),
			'limit' => 500,
			'conditions' => $options,
			'order' => array(
				'Product.views' => 'ASC'
			)
		));
		$this->set(compact('products'));

		$this->Product->updateViews($products);*/
		$this->Paginator = $this->Components->load('Paginator');

		$this->Paginator->settings = array(
			'Product' => array(
				'recursive' => -1,
				'contain' => array(
					'Brand'
				),
				'limit' => 15,
				'conditions' =>  $options,
				'order' => array(
					'Product.name' => 'ASC'
				),
				'paramType' => 'querystring',
			)
		);
		$products = $this->Paginator->paginate();
		$this->set(compact('products'));
		$this->set(compact('type'));
		$this->set(compact('input'));
		$this->set(compact('options'));
		
		


		$this->set('title_for_layout', Configure::read('Settings.SHOP_TITLE'));
	}

//--test
	public function products() {

		$this->Paginator = $this->Components->load('Paginator');

		$this->Paginator->settings = array(
			'Product' => array(
				'recursive' => -1,
				'contain' => array(
					'Brand'
				),
				'limit' => 15,
				'conditions' => array(
					'Product.active' => 1,
					'Brand.active' => 1
				),
				'order' => array(
					'Product.name' => 'ASC'
				),
				'paramType' => 'querystring',
			)
		);
		$products = $this->Paginator->paginate();
		$this->set(compact('products'));

		$this->set('title_for_layout', 'All Products - ' . Configure::read('Settings.SHOP_TITLE'));

	}

////////////////////////////////////////////////////////////

	public function view($id = null) {

		
		$categories = $this->requestAction('ledcategories/index'); 
		$manufacturers = $this->requestAction('manufacturers/index'); 
		$bulbsizes = $this->requestAction('bulbsizes/index'); 
		$positions = $this->requestAction('positions/index'); 

		$this->set(compact('categories'));
		$this->set(compact('manufacturers'));
		$this->set(compact('bulbsizes'));
		$this->set(compact('positions'));

		$product = $this->Product->find('first', array(
			'recursive' => -1,
			'contain' => array(
				'Category',
				'Brand'
			),
			'conditions' => array(
				'Brand.active' => 1,
				'Product.active' => 1,
				'Product.slug' => $id
			)
		));
		if (empty($product)) {
			return $this->redirect(array('action' => 'index'), 301);
		}

		$this->Product->updateViews($product);

		$this->set(compact('product'));

		$this->set('title_for_layout', $product['Product']['name'] . ' ' . Configure::read('Settings.SHOP_TITLE'));

	}

////////////////////////////////////////////////////////////

	public function search() {

		$search = null;
		if(!empty($this->request->query['search']) || !empty($this->request->data['name'])) {
			$search = empty($this->request->query['search']) ? $this->request->data['name'] : $this->request->query['search'];
			$search = preg_replace('/[^a-zA-Z0-9 ]/', '', $search);
			$terms = explode(' ', trim($search));
			$terms = array_diff($terms, array(''));
			$conditions = array(
				'Brand.active' => 1,
				'Product.active' => 1,
			);
			foreach($terms as $term) {
				$terms1[] = preg_replace('/[^a-zA-Z0-9]/', '', $term);
				$conditions[] = array('Product.name LIKE' => '%' . $term . '%');
			}
			
			$this->Paginator = $this->Components->load('Paginator');

		$this->Paginator->settings = array(
			'Product' => array(
				'recursive' => -1,
				'contain' => array(
					'Brand'
				),
				'limit' => 15,
				'conditions' =>  $conditions,
				'order' => array(
					'Product.name' => 'ASC'
				),
				'paramType' => 'querystring',
			)
		);
		$products = $this->Paginator->paginate();
			/*$products = $this->Product->find('all', array(
				'recursive' => -1,
				'contain' => array(
					'Brand'
				),
				'conditions' => $conditions,
				'limit' => 200,
			));*/
			if(count($products) == 1) {
				return $this->redirect(array('controller' => 'products', 'action' => 'view', 'slug' => $products[0]['Product']['slug']));
			}
			$terms1 = array_diff($terms1, array(''));
			$this->set(compact('products', 'terms1'));
		}
		$this->set(compact('search'));

		if ($this->request->is('ajax')) {
			$this->layout = false;
			$this->set('ajax', 1);
		} else {
			$this->set('ajax', 0);
		}

		$this->set('title_for_layout', 'Search');

		$description = 'Search';
		$this->set(compact('description'));

		$keywords = 'search';
		$this->set(compact('keywords'));
	}

////////////////////////////////////////////////////////////

	public function searchjson() {

		$search = null;
		if(!empty($this->request->query['search'])) {
			$search = $this->request->query['search'];
			$terms = explode(' ', trim($search));
			$terms = array_diff($terms, array(''));
			$conditions = array(
				'Brand.active' => 1,
				'Product.active' => 1
			);
			foreach($terms as $term) {
				$conditions[] = array('Product.name LIKE' => '%' . $term . '%');
			}
			$products = $this->Product->find('all', array(
				'recursive' => -1,
				'contain' => array(
					'Brand'
				),
				'fields' => array(
					'Product.name',
					'Product.image'
				),
				'conditions' => $conditions,
				'limit' => 200,
			));
		}
		echo json_encode($products);
		$this->autoRender = false;

	}

////////////////////////////////////////////////////////////

	public function sitemap() {
		$products = $this->Product->find('all', array(
			'recursive' => -1,
			'contain' => array(
				'Brand'
			),
			'fields' => array(
				'Product.slug'
			),
			'conditions' => array(
				'Brand.active' => 1,
				'Product.active' => 1
			),
			'order' => array(
				'Product.created' => 'DESC'
			),
		));
		$this->set(compact('products'));

		$website = Configure::read('Settings.WEBSITE');
		$this->set(compact('website'));

		$this->layout = 'xml';
		$this->response->type('xml');
	}

////////////////////////////////////////////////////////////

	public function admin_reset() {
		$this->Session->delete('Product');
		return $this->redirect(array('action' => 'index'));
	}

////////////////////////////////////////////////////////////

	public function admin_index() {

		if ($this->request->is('post')) {

			if($this->request->data['Product']['active'] == '1' || $this->request->data['Product']['active'] == '0') {
				$conditions[] = array(
					'Product.active' => $this->request->data['Product']['active']
				);
				$this->Session->write('Product.active', $this->request->data['Product']['active']);
			} else {
				$this->Session->write('Product.active', '');
			}

			if(!empty($this->request->data['Product']['brand_id'])) {
				$conditions[] = array(
					'Product.brand_id' => $this->request->data['Product']['brand_id']
				);
				$this->Session->write('Product.brand_id', $this->request->data['Product']['brand_id']);
			} else {
				$this->Session->write('Product.brand_id', '');
			}

			if(!empty($this->request->data['Product']['name'])) {
				$filter = $this->request->data['Product']['filter'];
				$this->Session->write('Product.filter', $filter);
				$name = $this->request->data['Product']['name'];
				$this->Session->write('Product.name', $name);
				$conditions[] = array(
					'Product.' . $filter . ' LIKE' => '%' . $name . '%'
				);
			} else {
				$this->Session->write('Product.filter', '');
				$this->Session->write('Product.name', '');
			}

			$this->Session->write('Product.conditions', $conditions);
			return $this->redirect(array('action' => 'index'));

		}

		if($this->Session->check('Product')) {
			$all = $this->Session->read('Product');
		} else {
			$all = array(
				'active' => '',
				'brand_id' => '',
				'name' => '',
				'filter' => '',
				'conditions' => ''
			);
		}
		$this->set(compact('all'));

		$this->Paginator = $this->Components->load('Paginator');

		$this->Paginator->settings = array(
			'Product' => array(
				'contain' => array(
					'Category',
					'Brand',
					'Position',
					'Manufacturer',
					'Bulbsize',
					'Ledcategory',
				),
				'recursive' => -1,
				'limit' => 50,
				'conditions' => $all['conditions'],
				'order' => array(
					'Product.name' => 'ASC'
				),
				'paramType' => 'querystring',
			)
		);
		$products = $this->Paginator->paginate();

		$brands = $this->Product->Brand->findList();

		$brandseditable = array();
		foreach ($brands as $key => $value) {
			$brandseditable[] = array(
				'value' => $key,
				'text' => $value,
			);
		}

		$positions = $this->Product->Position->findList();
		$ledcategories = $this->Product->Ledcategory->findList();
		$manufacturers = $this->Product->Manufacturer->findList();
		$bulbsizes = $this->Product->Bulbsize->findList();

		/*$positionseditable = array();
		foreach ($positions as $key => $value) {
			$positionseditable[] = array(
				'value' => $key,
				'text' => $value,
			);*/

		// $categories= $this->Product->Category->find('list', array(
		// 	'recursive' => -1,
		// 	'order' => array(
		// 		'Category.name' => 'ASC'
		// 	)
		// ));
		$categories = $this->Product->Category->generateTreeList(null, null, null, '--');

		$categorieseditable = array();
		foreach ($categories as $key => $value) {
			$categorieseditable[] = array(
				'value' => $key,
				'text' => $value,
			);
		}

		$this->set(compact('products', 'brands', 'brandseditable', 'categorieseditable', 'positions', 'ledcategories', 'manufacturers', 'bulbsizes'));

	}

////////////////////////////////////////////////////////////

	public function admin_view($id = null) {

		if (($this->request->is('post') || $this->request->is('put')) && !empty($this->request->data['Product']['image']['name'])) {

			$this->Img = $this->Components->load('Img');

			$newName = $this->request->data['Product']['slug'];

			$ext = $this->Img->ext($this->request->data['Product']['image']['name']);

			$origFile = $newName . '.' . $ext;
			$dst = $newName . '.jpg';

			$targetdir = WWW_ROOT . 'images/original';

			$upload = $this->Img->upload($this->request->data['Product']['image']['tmp_name'], $targetdir, $origFile);

			if($upload == 'Success') {
				$this->Img->resampleGD($targetdir . DS . $origFile, WWW_ROOT . 'images/large/', $dst, 800, 800, 1, 0);
				$this->Img->resampleGD($targetdir . DS . $origFile, WWW_ROOT . 'images/small/', $dst, 180, 180, 1, 0);
				$this->request->data['Product']['image'] = $dst;
			} else {
				$this->request->data['Product']['image'] = '';
			}

			if ($this->Product->save($this->request->data)) {
				$this->Session->setFlash($upload);
				return $this->redirect($this->referer());
			} else {
				$this->Session->setFlash('The Product could not be saved. Please, try again.');
			}
		}

		if (($this->request->is('post') || $this->request->is('put')) && !empty($this->request->data['Product']['subimage_1']['name'])) {

			$this->Img = $this->Components->load('Img');

			$newName = $this->request->data['Product']['slug'];

			$ext = $this->Img->ext($this->request->data['Product']['subimage_1']['name']);

			$origFile = $newName . '.' . $ext;
			$dst = $newName . '-sub1.jpg';

			$targetdir = WWW_ROOT . 'images/original';

			$upload = $this->Img->upload($this->request->data['Product']['subimage_1']['tmp_name'], $targetdir, $origFile);

			if($upload == 'Success') {
				$this->Img->resampleGD($targetdir . DS . $origFile, WWW_ROOT . 'images/large/', $dst, 800, 800, 1, 0);
				$this->Img->resampleGD($targetdir . DS . $origFile, WWW_ROOT . 'images/small/', $dst, 180, 180, 1, 0);
				$this->request->data['Product']['subimage_1'] = $dst;
			} else {
				$this->request->data['Product']['subimage_1'] = '';
			}

			if ($this->Product->save($this->request->data)) {
				$this->Session->setFlash($upload);
				return $this->redirect($this->referer());
			} else {
				$this->Session->setFlash('The Product could not be saved. Please, try again.');
			}
		}

		if (($this->request->is('post') || $this->request->is('put')) && !empty($this->request->data['Product']['subimage_2']['name'])) {

			$this->Img = $this->Components->load('Img');

			$newName = $this->request->data['Product']['slug'];

			$ext = $this->Img->ext($this->request->data['Product']['subimage_2']['name']);

			$origFile = $newName . '.' . $ext;
			$dst = $newName . '-sub2.jpg';

			$targetdir = WWW_ROOT . 'images/original';

			$upload = $this->Img->upload($this->request->data['Product']['subimage_2']['tmp_name'], $targetdir, $origFile);

			if($upload == 'Success') {
				$this->Img->resampleGD($targetdir . DS . $origFile, WWW_ROOT . 'images/large/', $dst, 800, 800, 1, 0);
				$this->Img->resampleGD($targetdir . DS . $origFile, WWW_ROOT . 'images/small/', $dst, 180, 180, 1, 0);
				$this->request->data['Product']['subimage_2'] = $dst;
			} else {
				$this->request->data['Product']['subimage_2'] = '';
			}

			if ($this->Product->save($this->request->data)) {
				$this->Session->setFlash($upload);
				return $this->redirect($this->referer());
			} else {
				$this->Session->setFlash('The Product could not be saved. Please, try again.');
			}
		}
		
			if (($this->request->is('post') || $this->request->is('put')) && !empty($this->request->data['Product']['subimage_3']['name'])) {

			$this->Img = $this->Components->load('Img');

			$newName = $this->request->data['Product']['slug'];

			$ext = $this->Img->ext($this->request->data['Product']['subimage_3']['name']);

			$origFile = $newName . '.' . $ext;
			$dst = $newName . '-sub3.jpg';

			$targetdir = WWW_ROOT . 'images/original';

			$upload = $this->Img->upload($this->request->data['Product']['subimage_3']['tmp_name'], $targetdir, $origFile);

			if($upload == 'Success') {
				$this->Img->resampleGD($targetdir . DS . $origFile, WWW_ROOT . 'images/large/', $dst, 800, 800, 1, 0);
				$this->Img->resampleGD($targetdir . DS . $origFile, WWW_ROOT . 'images/small/', $dst, 180, 180, 1, 0);
				$this->request->data['Product']['subimage_3'] = $dst;
			} else {
				$this->request->data['Product']['subimage_3'] = '';
			}

			if ($this->Product->save($this->request->data)) {
				$this->Session->setFlash($upload);
				return $this->redirect($this->referer());
			} else {
				$this->Session->setFlash('The Product could not be saved. Please, try again.');
			}
		}

		if (($this->request->is('post') || $this->request->is('put')) && !empty($this->request->data['Product']['subimage_4']['name'])) {

			$this->Img = $this->Components->load('Img');

			$newName = $this->request->data['Product']['slug'];

			$ext = $this->Img->ext($this->request->data['Product']['subimage_4']['name']);

			$origFile = $newName . '.' . $ext;
			$dst = $newName . '-sub4.jpg';

			$targetdir = WWW_ROOT . 'images/original';

			$upload = $this->Img->upload($this->request->data['Product']['subimage_4']['tmp_name'], $targetdir, $origFile);

			if($upload == 'Success') {
				$this->Img->resampleGD($targetdir . DS . $origFile, WWW_ROOT . 'images/large/', $dst, 800, 800, 1, 0);
				$this->Img->resampleGD($targetdir . DS . $origFile, WWW_ROOT . 'images/small/', $dst, 180, 180, 1, 0);
				$this->request->data['Product']['subimage_4'] = $dst;
			} else {
				$this->request->data['Product']['subimage_4'] = '';
			}

			if ($this->Product->save($this->request->data)) {
				$this->Session->setFlash($upload);
				return $this->redirect($this->referer());
			} else {
				$this->Session->setFlash('The Product could not be saved. Please, try again.');
			}
		}
		
			if (($this->request->is('post') || $this->request->is('put')) && !empty($this->request->data['Product']['subimage_5']['name'])) {

			$this->Img = $this->Components->load('Img');

			$newName = $this->request->data['Product']['slug'];

			$ext = $this->Img->ext($this->request->data['Product']['subimage_5']['name']);

			$origFile = $newName . '.' . $ext;
			$dst = $newName . '-sub5.jpg';

			$targetdir = WWW_ROOT . 'images/original';

			$upload = $this->Img->upload($this->request->data['Product']['subimage_5']['tmp_name'], $targetdir, $origFile);

			if($upload == 'Success') {
				$this->Img->resampleGD($targetdir . DS . $origFile, WWW_ROOT . 'images/large/', $dst, 800, 800, 1, 0);
				$this->Img->resampleGD($targetdir . DS . $origFile, WWW_ROOT . 'images/small/', $dst, 180, 180, 1, 0);
				$this->request->data['Product']['subimage_5'] = $dst;
			} else {
				$this->request->data['Product']['subimage_5'] = '';
			}

			if ($this->Product->save($this->request->data)) {
				$this->Session->setFlash($upload);
				return $this->redirect($this->referer());
			} else {
				$this->Session->setFlash('The Product could not be saved. Please, try again.');
			}
		}
		
			if (($this->request->is('post') || $this->request->is('put')) && !empty($this->request->data['Product']['subimage_6']['name'])) {

			$this->Img = $this->Components->load('Img');

			$newName = $this->request->data['Product']['slug'];

			$ext = $this->Img->ext($this->request->data['Product']['subimage_6']['name']);

			$origFile = $newName . '.' . $ext;
			$dst = $newName . '-sub6.jpg';

			$targetdir = WWW_ROOT . 'images/original';

			$upload = $this->Img->upload($this->request->data['Product']['subimage_6']['tmp_name'], $targetdir, $origFile);

			if($upload == 'Success') {
				$this->Img->resampleGD($targetdir . DS . $origFile, WWW_ROOT . 'images/large/', $dst, 800, 800, 1, 0);
				$this->Img->resampleGD($targetdir . DS . $origFile, WWW_ROOT . 'images/small/', $dst, 180, 180, 1, 0);
				$this->request->data['Product']['subimage_6'] = $dst;
			} else {
				$this->request->data['Product']['subimage_6'] = '';
			}

			if ($this->Product->save($this->request->data)) {
				$this->Session->setFlash($upload);
				return $this->redirect($this->referer());
			} else {
				$this->Session->setFlash('The Product could not be saved. Please, try again.');
			}
		}

	if (($this->request->is('post') || $this->request->is('put')) && !empty($this->request->data['Product']['subimage_7']['name'])) {

			$this->Img = $this->Components->load('Img');

			$newName = $this->request->data['Product']['slug'];

			$ext = $this->Img->ext($this->request->data['Product']['subimage_7']['name']);

			$origFile = $newName . '.' . $ext;
			$dst = $newName . '-sub7.jpg';

			$targetdir = WWW_ROOT . 'images/original';

			$upload = $this->Img->upload($this->request->data['Product']['subimage_7']['tmp_name'], $targetdir, $origFile);

			if($upload == 'Success') {
				$this->Img->resampleGD($targetdir . DS . $origFile, WWW_ROOT . 'images/large/', $dst, 800, 800, 1, 0);
				$this->Img->resampleGD($targetdir . DS . $origFile, WWW_ROOT . 'images/small/', $dst, 180, 180, 1, 0);
				$this->request->data['Product']['subimage_7'] = $dst;
			} else {
				$this->request->data['Product']['subimage_7'] = '';
			}

			if ($this->Product->save($this->request->data)) {
				$this->Session->setFlash($upload);
				return $this->redirect($this->referer());
			} else {
				$this->Session->setFlash('The Product could not be saved. Please, try again.');
			}
		}




			


		if (!$this->Product->exists($id)) {
			throw new NotFoundException('Invalid product');
		}
		$product = $this->Product->find('first', array(
			'recursive' => -1,
			'contain' => array(
				'Category',
				'Brand',
				'Ledcategory',
				'Manufacturer',
				'Bulbsize',
				'Position',
			),
			'conditions' => array(
				'Product.id' => $id
			)
		));
		$this->set(compact('product'));
	}

////////////////////////////////////////////////////////////

	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Product->create();
			if ($this->Product->save($this->request->data)) {
				$this->Session->setFlash('The product has been saved');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('The product could not be saved. Please, try again.');
			}
		}
		$brands = $this->Product->Brand->find('list');
		$this->set(compact('brands'));
                
		$manufacturers = $this->Product->Manufacturer->find('list');
		$this->set(compact('manufacturers'));
                
		$bulbsizes = $this->Product->Bulbsize->find('list');
		$this->set(compact('bulbsizes'));
                
		$positions = $this->Product->Position->find('list');
		$this->set(compact('positions'));

		$ledcategories = $this->Product->Ledcategory->find('list');
		$this->set(compact('ledcategories'));
	}

////////////////////////////////////////////////////////////

	public function admin_edit($id = null) {
		if (!$this->Product->exists($id)) {
			throw new NotFoundException('Invalid product');
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Product->save($this->request->data)) {
				$this->Session->setFlash('The product has been saved');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('The product could not be saved. Please, try again.');
			}
		} else {
			$product = $this->Product->find('first', array(
				'conditions' => array(
					'Product.id' => $id
				)
			));
			$this->request->data = $product;
		}
		$brands = $this->Product->Brand->find('list');
		$this->set(compact('brands'));

                $manufacturers = $this->Product->Manufacturer->find('list');
		$this->set(compact('manufacturers'));
                
		$bulbsizes = $this->Product->Bulbsize->find('list');
		$this->set(compact('bulbsizes'));
                
		$positions = $this->Product->Position->find('list');
		$this->set(compact('positions'));
    
		$categories = $this->Product->Category->generateTreeList(null, null, null, '--');
		$this->set(compact('categories'));

		$ledcategories = $this->Product->Ledcategory->find('list');
		$this->set(compact('ledcategories'));

	}

////////////////////////////////////////////////////////////

	public function admin_csv() {
		$products = $this->Product->find('all', array(
			'recursive' => -1,
		));
		$this->set(compact('products'));
		$this->layout = false;
	}

////////////////////////////////////////////////////////////

	public function admin_delete($id = null) {
		$this->Product->id = $id;
		if (!$this->Product->exists()) {
			throw new NotFoundException('Invalid product');
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Product->delete()) {
			$this->Session->setFlash('Product deleted');
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash('Product was not deleted');
		return $this->redirect(array('action' => 'index'));
	}

////////////////////////////////////////////////////////////

}
