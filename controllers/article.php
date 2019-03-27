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
        $idCategory=$this->model->comment_parameter($id);
        $comments=$this->model->comment($id);
        $data=['article'=>$article,'categorizeArticles'=>$categorizeArticles,'mostView'=>$mostView,'newArticle'=>$newArticle,'idCategory'=>$idCategory,'comments'=>$comments];
        $this->view('articles/index',$data);

    }
}