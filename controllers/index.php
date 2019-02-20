<?php
class index extends Controller
{
	public $var1 = 'click site';
	function __construct() {
		//		echo 'salam';
	}
	function index() {
		$result= $this->model->getProduct();
		$this->view( 'index/index',$result );
	}
	function tab()
	{
		$number = $_POST['number'];
	if ($number==0) {

		$this->view('index/nemonekar-tab1',[],1,1);
	}
	}
}
