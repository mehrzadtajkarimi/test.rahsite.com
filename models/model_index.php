<?php

class model_index{
	function __construct() {

	}
	function getProduct(){
		$serverName='localhost';
		$userName='root';
		$password='';
		$dbName='webzad';
		$attr=array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8');
		$conn= new PDO('mysql:host='.$serverName.';dbname='.$dbName,$userName,$password,$attr);
		$sql="SELECT * FROM nemonekar";
		$stmt=$conn->prepare($sql);
		$stmt->execute();
		$result=$stmt->fetchAll();
		return $result;

	}
}

?>