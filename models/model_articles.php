<?php

class model_articles{
	function __construct() {

	}
	function options(){
		$serverName='localhost';
		$userName='rahsitec_admin';
		$password='Mehrzad@1';
		$dbName='rahsitec_webzad';
		$attr=array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8');
		$conn= new PDO('mysql:host='.$serverName.';dbname='.$dbName,$userName,$password,$attr);

	}
	function category(){
		$serverName='localhost';
		$userName='rahsitec_admin';
		$password='Mehrzad@1';
		$dbName='rahsitec_webzad';
		$attr=array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8');
		$conn= new PDO('mysql:host='.$serverName.';dbname='.$dbName,$userName,$password,$attr);
		$sql="SELECT * FROM tbl_attribute";
		$stmt=$conn->prepare($sql);
		$stmt->execute();
		$result=$stmt->fetchAll();
		return $result;

	}
}

?>
