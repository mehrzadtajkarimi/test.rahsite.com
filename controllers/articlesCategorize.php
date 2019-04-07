<?php
	class articlesCategorize extends Controller {
		function __construct() {

		}
		function index(){
            $result = $this->model;
            $articles=$this->model->articles();
            $data=[
							'result'=>$result,
							'articles'=>$articles
						];
			$this->view('articlesCategorize/index',$data);
		}
        function tab()
        {
            $number = $_POST['number'];
            if ($number==0) {
                $articles= $this->model->articles();
                $time_logs= $this->model->timeLogs();
                $data=[
									'articles'=>$articles,
									'timeLogs'=>$time_logs
								];
                $this->view( 'articlesCategorize/site_design',$data,1,1);
            }
            if ($number==1) {
                $articles= $this->model->articles();
                $this->view( 'articlesCategorize/optimizing_site',$articles,1,1);
            }
        }
    }
