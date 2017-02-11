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


  if ( $_POST['action'] == "datatable") {
		
	
		$sql = "SELECT tbl_user.id, tbl_user.name, tbl_user.role,tbl_user.username,tbl_user.password,tbl_user.update_id FROM  tbl_user";
		
		$res = $obj->getRows($sql);
		
	$html="";
    
    foreach ($res as $row)
    {
        $html.= "<tr>";
		$html.="<td style='width: 7%;' class='text-center'>".$row["id"]."</td>";
		 $html.="<td>".$row["name"]."</td>";
          $html.="<td>".$row["role"]."</td>";
          $html.="<td>".$row["username"]."</td>";
           $html.=" <td>".$row["password"]."</td>";
		   $sql2 = "SELECT tbl_user.id, tbl_user.name, tbl_user.role,tbl_user.username,tbl_user.password,tbl_user.update_id FROM  tbl_user where tbl_user.id='".$row["update_id"]."'";
		    $res2 = $obj->getRows($sql2);
			$updated="";
			foreach ($res2 as $row2)
            {$updated=$row2["name"];
			}
           $html.="<td>".$updated."</td>";
         $html.="<td>";
         $html.="<button class='btn btn-sm btn-primary btn-round' data-toggle='modal' data-target='#myModal' onclick='viewUser(".$row["id"].");'><i class='material-icons'>edit</i> Edit<div class='ripple-container'></div></button>";
          $html.="<button class='btn btn-sm btn-danger btn-round' onclick='delfunc(".$row["id"].")'><i class='material-icons'>delete</i> Delete<div class='ripple-container'></div></button>";
         $html.="</td>";
        $html.="</tr>";
    }
	        $status = "true";
            $msg = $html;
			echo json_encode(array('status' => $status, 'msg' => $msg));
	}
	


if($_POST['action']=="save")
{
	$id=$obj->get_max("tbl_user","id");
  	$query="insert into tbl_user values(:id,:name,:role,:username,:password,:update_id,:updatedtime)";
	$param= array(
'id' => $id,
'name' =>$_POST['name'],
'role' => $_POST['role'],
'username' => $_POST['username'],
'password' => $_POST['password'],
'update_id' =>$_SESSION['uid'],
'updatedtime' =>date("d/m/Y h:i:s a")
); 
	$inserted=$obj->insert($query,$param);

	   if($inserted) {
            $status = "true";
            $msg = "Successfully Added";
        } else {
            $status = "false";
            $msg = "Something went wrong while Adding the Record, please try again.";
        }
	
        echo json_encode(array('status' => $status, 'msg' => $msg));
}	
	if($_POST['action']=="update")
{
	
	
  	$query="update tbl_user set name=:name,username=:username,password=:password,update_id=:update_id,updatedtime=:updatedtime where id=:id";
	$param= array(
'id' => $_POST['id'],
'name' =>$_POST['name'],
'username' => $_POST['username'],
'password' => $_POST['password'],
'update_id' =>$_SESSION['uid'],
'updatedtime' =>date("d/m/Y h:i:s a")
); 

	$inserted=$obj->update($query,$param);

	   if($inserted) {
            $status = "true";
            $msg = "Successfully Updated";
        } else {
            $status = "false";
            $msg = "Something went wrong while Updating the Record, please try again.";
        }
	
        echo json_encode(array('status' => $status, 'msg' => $msg));
}

if (isset($_POST['action']) && $_POST['action'] == "edit") {
		extract(array_map("filterIn", $_POST));
		$sql = "SELECT tbl_user.id, tbl_user.name,tbl_user.username,tbl_user.password FROM tbl_user WHERE id={$id}";
		$param = array($id);
		$res = $obj->getRows($sql, $param);
		/*$send_data = array();
		foreach ($res as $key => $value) {
 			$send_data[] = array_map('filterOut',$value);
		}*/
		$response= array();
    
    foreach ($res as $row)
    {
        $post = array();
        $post["id"]  = $row["id"];
        $post["name"]  = $row["name"];
		$post["username"]  = $row["username"];
        $post["password"]  = $row["password"];
	
        array_push($response, $post);
    }
    echo json_encode($response);
		
	}
	if (isset($_POST['action']) && $_POST['action'] == "delete") {
		extract(array_map("filterIn", $_POST));
		$isDeleted = $obj->delete('tbl_user', 'id', $id);
		if ($isDeleted) {
			$status = true;
			$msg = ' Record no.: '.$id.', Successfully Deleted!'; 
		} else {
			$status = false;
			$msg = 'Error, while Deleted Record no.: '.$id; 
		}
	 echo json_encode(array('status' => $status, 'msg' => $msg));
	}

?>  