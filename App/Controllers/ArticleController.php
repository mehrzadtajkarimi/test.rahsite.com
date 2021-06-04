<?php
namespace App\Controllers;

use App\Controllers\Contracts\Controller;

class ArticleController extends Controller {

    function __construct() {
        parent::__construct();
    }

    function index($id_articles, $id_articles_category) {

        $article = $this->model->articleInfo($id_articles);
        $article_fetchAll = $article['article_fetchAll'];
        $article_fetch = $article['article_fetch'];
        $articlesCategorize = $this->model->articlesCategorize();
        $mostView = $this->model->mostView();
        $newArticle = $this->model->newArticle();


        $commentParameter = $this->model->commentParameter($id_articles, $id_articles_category);
        $commentParameterName = $commentParameter['titel'];
        $commentParameterScores = $commentParameter['scores_total'];
        $comments = $this->model->comment($id_articles, $id_articles_category);
        $commentCount = $this->model->commentCount();
        $data = [
            'article_fetchAll' => $article_fetchAll,
            'article_fetch' => $article_fetch,
            'articlesCategorize' => $articlesCategorize,
            'mostView' => $mostView,
            'newArticle' => $newArticle,
            'commentParameterName' => $commentParameterName,
            'commentParameterScores' => $commentParameterScores,
            'comments' => $comments,
            'commentCount' => $commentCount
        ];
        $this->view('articles/index', $data);
    }

    function tab($id_articles, $id_articles_category) {
        $number = $_POST['number'];
        if ($number == 0) {
            $commentParameter = $this->model->commentParameter($id_articles, $id_articles_category);
            $commentParameterName = $commentParameter['titel'];
            $commentParameterScores = $commentParameter['scores_total'];
            $comments = $this->model->comment($id_articles, $id_articles_category);
            $data = [
                'commentParameterName' => $commentParameterName,
                'commentParameterScores' => $commentParameterScores,
                'comments' => $comments
            ];
            $this->view('articles/comment_results', $data, 1, 1);
        }
        if ($number == 1) {
            $comment_questionANDanswer = $this->model->comment_questionANDanswer($id_articles);
            $comment_question = $comment_questionANDanswer['comment_question'];
            $comment_answer = $comment_questionANDanswer['comment_answer'];


            $data = [
                'comment_question' => $comment_question,
                'comment_answer' => $comment_answer
            ];

            $this->view('articles/comment_questionANDanswer', $data, 1, 1);
        }
    }

}
