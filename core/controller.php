<?php

class Controller
{
	function __construct() {

	}

	function view( $viewUrl, $data=[],$noIncludeHeader='',$noIncludeFooter='' ) {
		if ($noIncludeHeader=='') {
			require( 'header.php' );
		}
		require( 'views/' . $viewUrl . '.php' );
		if ($noIncludeFooter=='') {
			require( 'footer.php' );
		}
	}

	function model( $modelUrl ) {
		require( 'models/model_' . $modelUrl . '.php' );
		$className = 'model_' . $modelUrl;
		$this->model = new $className;
	}

}

?>
