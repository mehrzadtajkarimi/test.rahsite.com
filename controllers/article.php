<?php
class article extends Controller
{
    function __construct()
    {

    }
    function index($id){

        $article=$this->model->articleInfo($id);
        $categorizeArticles=$this->model->categorizeArticles();
        $data=['article'=>$article,'categorizeArticles'=>$categorizeArticles];
        $this->view('articles/index',$data);

    }
}