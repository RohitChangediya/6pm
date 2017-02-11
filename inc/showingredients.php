<?php  
session_start();

require 'inc.con.php';
	$obj = new db();
	$obj->connect();
		function filterIn($str)
	{
		return addslashes(htmlspecialchars($str));		
	}
	function filterOut($str)
	{
		return stripslashes(htmlspecialchars_decode($str));		
	}
$id=$_GET['query'];
$sql = "SELECT * FROM tbl_ingredient where ingredient LIKE '%{$id}%'";
		$param = array($id);
		$res = $obj->getRows($sql,$param );
	
		$response= array();
    
    foreach ($res as $row)
    {
       
      
        array_push($response, $row["ingredient"]);
    }
    echo json_encode($response);
		
?>  