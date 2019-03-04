<?php

class model_index{
	function __construct() {

	}
	function options(){
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
	function nemonekar_company(){
		$serverName='localhost';
		$userName='root';
		$password='';
		$dbName='webzad';
		$attr=array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8');
		$conn= new PDO('mysql:host='.$serverName.';dbname='.$dbName,$userName,$password,$attr);
		$sql="SELECT * FROM nemonekar_company";
		$stmt=$conn->prepare($sql);
		$stmt->execute();
		$result=$stmt->fetchAll();
		return $result;

	}
	function nemonekar_person(){
		$serverName='localhost';
		$userName='root';
		$password='';
		$dbName='webzad';
		$attr=array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8');
		$conn= new PDO('mysql:host='.$serverName.';dbname='.$dbName,$userName,$password,$attr);
		$sql="SELECT * FROM nemonekar_person";
		$stmt=$conn->prepare($sql);
		$stmt->execute();
		$result=$stmt->fetchAll();
		return $result;

	}

	function nemonekar_shop(){
		$serverName='localhost';
		$userName='root';
		$password='';
		$dbName='webzad';
		$attr=array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8');
		$conn= new PDO('mysql:host='.$serverName.';dbname='.$dbName,$userName,$password,$attr);
		$sql="SELECT * FROM nemonekar_shop";
		$stmt=$conn->prepare($sql);
		$stmt->execute();
		$result=$stmt->fetchAll();
		return $result;

	}

}

?>
