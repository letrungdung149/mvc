<?php

class Dashboard{
    public function index(){
        echo 'dashboard';
    }

    public function detail($id){
        echo 'trang chi tiet dashboard' . $id;
    }
}