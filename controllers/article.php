<?php
class article extends Controller
{
    function __construct()
    {

    }
    function index($id,$idCategorize){

        $article=$this->model->articleInfo($id);
        $articlesCategorize=$this->model->articlesCategorize();
        $mostView=$this->model->mostView();
        $newArticle=$this->model->newArticle();
        $commentCategory=$this->model->commentCategory($idCategorize);
        $comments=$this->model->comment($id);
        $data=['article'=>$article, 'articlesCategorize' =>$articlesCategorize,'mostView'=>$mostView,'newArticle'=>$newArticle,'commentCategory'=>$commentCategory,'comments'=>$comments];
        $this->view('articles/index',$data);

    }
}