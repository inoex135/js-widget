<?php
class WidgetController extends AppController {
    var $uses = array('Product');
    var $name = 'Widget';

    function single(){
        $this->layout = null;
        $this->render('single',null);
    }
    
    function thumb(){
        $this->layout = null;
        $this->render('thumb',null);
    }
    
    function json_product($id,$order = 'ASC'){
        $this->layout = null;
        $sign = 'max';
        if($order == 'ASC'){
            $sign = 'min';
        }
        $product = $this->Product->read(null,$id);
        if(empty($product))
            $product = $this->Product->find("id = (select $sign(id) from products)");
        $files = array();
        $dir = WWW_ROOT.'img/products/'.$product['Product']['id'].'/';
        if(is_dir($dir)){
                $handle = opendir($dir);
                while (false !== ($file = readdir($handle))) {
                        if($file!='.' && $file!='..')
                        $files[] = 'products/'.$product['Product']['id'].'/'.$file;
                }
        }
        
        $product['Product']['files'] = $files;
        echo json_encode($product['Product']);
        $this->render(false);
    }
    function js(){
        $this->layout = null;
    }
}
?>