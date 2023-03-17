<?php


class Home
{
    public function index(){
        echo  'a';
    }

    public function detail($id='',$slug=''){
        echo 'id sản phẩm: ' . $id . '<br>';
        echo 'slug: ' . $slug;
    }

    public function search($keywords = ''){
        echo 'từ khóa cần tìm' . $keywords;
    }
}