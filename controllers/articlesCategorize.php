<?php
	class articlesCategorize extends Controller {
		function __construct() {

		}
		function index(){
            $result = $this->model;

            $data=['result'=>$result];
			$this->view('articlesCategorize/index',$data);
		}
        function tab()
        {
            $number = $_POST['number'];
            if ($number==0) {
                $articles= $this->model->category();
                $time_logs= $this->model->timeLogs();
                $data=['articles'=>$articles,'timeLogs'=>$time_logs];
                $this->view( 'articlesCategorize/site_design',$data,1,1);
            }
            if ($number==1) {
                $articles= $this->model->category();
                $this->view( 'articlesCategorize/optimizing_site',$articles,1,1);
            }
        }
    }
