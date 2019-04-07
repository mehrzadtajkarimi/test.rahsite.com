<?php
class article extends Controller
{
  function __construct()
  {

  }
  function index($id_articles,$id_articles_category){

    $article=$this->model->articleInfo($id_articles);
    $articlesCategorize=$this->model->articlesCategorize();
    $mostView=$this->model->mostView();
    $newArticle=$this->model->newArticle();

    $commentParameter=$this->model->commentParameter($id_articles,$id_articles_category);
    $commentParameterName=$commentParameter['titel'];
    $commentParameterScores=$commentParameter['scores_total'];

    $comments=$this->model->comment($id_articles,$id_articles_category);
    $data=[
      'article'=>$article,
      'articlesCategorize'=>$articlesCategorize,
      'mostView'=>$mostView,
      'newArticle'=>$newArticle,
      'commentParameterName'=>$commentParameterName,
      'commentParameterScores'=>$commentParameterScores,

      'comments'=>$comments
    ];
    $this->view('articles/index',$data);

  }
}
