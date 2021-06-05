<?php
namespace App\Controllers;

use App\Controllers\Contracts\Controller;

class ArticleController extends Controller {



    function index($id_articles, $id_articles_category) {


        view('articles/index');
    }

}
