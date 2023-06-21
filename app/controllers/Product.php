<?php
class Product  extends Controller{
    public $data= [];

    public function index(){
        echo 'Danh sach san pham';
    }

    public function list_product(){
        $product = $this->model('ProductModel');
        $dataProduct= $product->getProductLists();
        $ab='xin chao';
        $cd='hello';

        $this->data['product_list'] = $dataProduct;
        $this->data['product_ab'] = $ab;
        $this->data['product_cd'] = $cd;

        // Render view
        $this->render('products/list', $this->data);
    
    }

    public function detail($id=0){
        $product = $this->model('ProductModel');
        $this->data['info']= $product->getDetail($id);
        $this->data['content']= 'products/detail';
        $this->render('layouts/client_layout', $this->data);
    }
}