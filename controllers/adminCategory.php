<?php

class adminCategory extends Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
                $adminCategory = $this->model->adminCategory();
        $data = [
            'adminCategory' => $adminCategory
        ];
        $this->view('admin/category/index',$data, 1, 1);
    }


}
