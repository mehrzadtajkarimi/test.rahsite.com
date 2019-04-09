<?php

class index extends Controller {

    function __construct() {
        //		echo 'salam';
    }

    function index() {
        $result = $this->model;
        $this->view('index/index', $result);
    }

    function tab() {
        $number = $_POST['number'];
        if ($number == 0) {
            $nemonekar = $this->model->nemonekar_company();
            $this->view('index/tab1', $nemonekar, 1, 1);
        }
        if ($number == 1) {
            $nemonekar = $this->model->nemonekar_person();
            $this->view('index/tab2', $nemonekar, 1, 1);
        }
        if ($number == 2) {
            $nemonekar = $this->model->nemonekar_shop();
            $this->view('index/tab3', $nemonekar, 1, 1);
        }
    }

}
