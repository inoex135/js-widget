<?php
class ProductsController extends AppController {

	var $name = 'Products';

	function index() {
		$this->Product->recursive = 0;
		$this->set('products', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid product', true));
			$this->redirect(array('action' => 'index'));
		}
		$dir = WWW_ROOT.'img/products/'.$id.'/';
		$files = array();echo APP_PATH;
		if(is_dir($dir)){
			$handle = opendir($dir);
			while (false !== ($file = readdir($handle))) {
				$files[] = $dir.$file;
			}
		}
		$product = $this->Product->read(null, $id);
		$product['files'] = $files;
		$this->set('product', $product);
	}

	function add() {
		if (!empty($this->data)) {						
			$this->Product->create();								
			if ($this->Product->save($this->data)) {
				$dir = WWW_ROOT.'img/products/'.$this->Product->getLastInsertId().'/';
				if(!is_dir($dir)){
					mkdir($dir);
				}
				if(move_uploaded_file($this->data['Product']['image']['tmp_name'],$dir.$this->data['Product']['image']['name'])){
					$this->Session->setFlash(__('The product has been saved', true));
					$this->redirect(array('action' => 'index'));
				}
				else{
					echo 'error upload';
				}
			} else {
				$this->Session->setFlash(__('The product could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid product', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Product->save($this->data)) {
				$this->Session->setFlash(__('The product has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The product could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Product->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for product', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Product->delete($id)) {
			$this->Session->setFlash(__('Product deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Product was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>