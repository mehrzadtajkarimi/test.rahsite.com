<?php
class article extends Controller
{
    function __construct()
    {

    }
    function index($id){

        $article=$this->model->articleInfo($id);
        $categorizeArticles=$this->model->categorizeArticles();
        $mostView=$this->model->mostView();
        $newArticle=$this->model->newArticle();
        $data=['article'=>$article,'categorizeArticles'=>$categorizeArticles,'mostView'=>$mostView,'newArticle'=>$newArticle];
        $this->view('articles/index',$data);

    }
}