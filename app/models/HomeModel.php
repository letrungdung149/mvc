<?php

// kế thừa class model

class HomeModel{
    protected $_table = 'products';

    public function getlist(){
        $data = [
            'item 1',
            'item 2',
            'item 3'
        ];
        return $data;
    }

    public function getDetail($id){
        $data = [
            'item 1',
            'item 2',
            'item 3'
        ];

        return $data[$id];
    }
}