<?php
class HomeModel{
    public $_table='products';

    public function getList() {
        $data= [
            'Item 1',
            'Item 2',
            'Item 3',
            'Item 4',
        ];

        return $data;
    }

    public function getDetails($id){
        $data=[
           'item1',
           'item2',
           'item3',
        ];
        return $data[$id];
    }
}