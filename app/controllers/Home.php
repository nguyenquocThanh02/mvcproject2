<?php
class Home extends Controller{

    public $model_home;

    public function __construct(){
        $this->model_home= $this->model('HomeModel');
    }
   
    public function index(){
        $data= $this->model_home->getList();

        print_r($data);

        $detail= $this->model_home->getDetails(0);
        print_r($detail);
    }

    
    
}