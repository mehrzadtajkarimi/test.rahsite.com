<?php

class admin extends Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->view('admin/index', [], 1, 1);
    }

    function articlesCategory() {
        $articlesCategory = $this->model->articlesCategory();
        $data = [
            'articlesCategory' => $articlesCategory
        ];
        $this->view('admin/articlesCategory', $data, 1, 1);
    }

}
