<?php
	class categorizeArticles extends Controller {
		function __construct() {

		}
		function index(){
            $result = $this->model;

            $data=['result'=>$result];
			$this->view('categorizeArticles/index',$data);
		}
        function tab()
        {
            $number = $_POST['number'];
            if ($number==0) {
                $articles= $this->model->category();
                $time_logs= $this->model->timeLogs();
                $data=['article'=>$articles,'timeLogs'=>$time_logs];
                $this->view( 'categorizeArticles/site_design',$data,1,1);
            }
            if ($number==1) {
                $articles= $this->model->category();
                $this->view( 'categorizeArticles/optimizing_site',$articles,1,1);
            }
        }
    }
