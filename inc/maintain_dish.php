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
		
	
		$sql = "SELECT tbl_dish.dish_id,tbl_dish.dish_code,tbl_dish.dish_name,tbl_dish.ingredient,tbl_dish.dish_type,tbl_dish.calories,tbl_dish.proteins,tbl_dish.carbohydrates,tbl_dish.fats,tbl_dish.update_id FROM  tbl_dish";
		
		$res = $obj->getRows($sql);
		
	$html="";
    
    foreach ($res as $row)
    {
        $html.= "<tr>";
		$html.="<td style='width: 7%;' class='text-center'>".$row["dish_id"]."</td>";
		$html.="<td>".$row["dish_code"]."</td>";
		 $html.="<td>".$row["dish_name"]."</td>";
          $html.="<td>".$row["ingredient"]."</td>";
          $html.="<td>".$row["dish_type"]."</td>";
		  $meals="";
		  $sql3 = "SELECT dish_id,meal FROM  tbl_dish_meal where dish_id='".$row["dish_id"]."'";
		    $res3 = $obj->getRows($sql3);
			$updated="";
			$counter=1;
			foreach ($res3 as $row3)
            {
				$meals.=$counter.". ".$row3["meal"]."<br>";
				$counter=$counter+1;
			}
			
		  $html.="<td>".$meals."</td>";
		    $html.=" <td>".$row["calories"]."</td>";
			$html.=" <td>".$row["proteins"]."</td>";
			$html.=" <td>".$row["carbohydrates"]."</td>";
           $html.=" <td>".$row["fats"]."</td>";
		   $sql2 = "SELECT tbl_user.id, tbl_user.name, tbl_user.role,tbl_user.username,tbl_user.password,tbl_user.update_id FROM  tbl_user where tbl_user.id='".$row["update_id"]."'";
		    $res2 = $obj->getRows($sql2);
			$updated="";
			foreach ($res2 as $row2)
            {$updated=$row2["name"];
			}
           $html.="<td>".$updated."</td>";
         $html.="<td>";
		  $html.="<button class='btn btn-sm btn-primary btn-round' data-toggle='modal' data-target='#myModal' onclick='viewDish(".$row["dish_id"].");'><i class='material-icons'>edit</i> Edit<div class='ripple-container'></div></button>";
           $html.="<button class='btn btn-sm btn-danger btn-round' onclick='delfunc(".$row["dish_id"].")'><i class='material-icons'>delete</i> Delete<div class='ripple-container'></div></button>";
                                                
              $html.="</td>";
        $html.="</tr>";
    }
	        $status = "true";
            $msg = $html;
			echo json_encode(array('status' => $status, 'msg' => $msg));
	}
	


if($_POST['action']=="save")
{
	$id=$obj->get_max("tbl_dish","dish_id");
  	$query="insert into tbl_dish values(:dish_id,:dish_name,:dish_code,:ingredient,:dish_type,:cuisine,:calories,:proteins,:carbohydrates,:fats,:update_id,:updatedtime)";
	$param= array(
'dish_id' => $id,
'dish_name' =>$_POST['dishname'],
'dish_code' => $_POST['dishcode'],
'ingredient' => $_POST['ingredient'],
'dish_type' => $_POST['type'],
'cuisine' =>$_POST['cuisine'],
'calories' => $_POST['calories'],
'proteins' => $_POST['proteins'],
'carbohydrates' => $_POST['carbohyd'],
'fats' => $_POST['fats'],
'update_id' =>$_SESSION['uid'],
'updatedtime' =>date("d/m/Y h:i:s a")
); 
	$inserted=$obj->insert($query,$param);
$insert2=0;
foreach($_POST['optionsCheckboxes'] as $meal)
{
	$idd=$obj->get_max("tbl_dish_meal","did");
  	$query2="insert into tbl_dish_meal values(:did,:dish_id,:meal)";
	$param2= array(
'did' => $idd,
'dish_id' =>$id,
'meal' => $meal
); 
	$insert2=$obj->insert($query2,$param2);
}
	   if($inserted && $insert2) {
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
	
  	$query="update tbl_dish set dish_name=:dish_name,dish_code=:dish_code,ingredient=:ingredient,dish_type=:dish_type,calories=:calories,proteins=:proteins,carbohydrates=:carbohydrates,fats=:fats,update_id=:update_id,updatetime=:updatetime where dish_id=:dish_id";
	$param= array(
'dish_id' => $_POST['dish_id'],
'dish_name' =>$_POST['dishname'],
'dish_code' => $_POST['dishcode'],
'ingredient' => $_POST['ingredient'],
'dish_type' => $_POST['type'],
'calories' => $_POST['calories'],
'proteins' => $_POST['proteins'],
'carbohydrates' => $_POST['carbohyd'],
'fats' => $_POST['fats'],
'update_id' =>$_SESSION['uid'],
'updatetime' =>date("d/m/Y h:i:s a")
); 
	$inserted=$obj->update($query,$param);
$insert2=0;
$obj->delete('tbl_dish_meal', 'dish_id', $_POST['dish_id']);
foreach($_POST['optionsCheckboxes'] as $meal)
{
	$idd=$obj->get_max("tbl_dish_meal","did");
   	$query2="insert into tbl_dish_meal values(:did,:dish_id,:meal)";
	$param2= array(
'did' => $idd,
'dish_id' =>$_POST['dish_id'],
'meal' => $meal
); 
	$insert2=$obj->insert($query2,$param2);
}
	   if($inserted && $insert2) {
            $status = "true";
            $msg = "Successfully Updated";
        } else {
            $status = "false";
            $msg = "Something went wrong while Adding the Record, please try again.";
        }
	
        echo json_encode(array('status' => $status, 'msg' => $msg));
}	

if (isset($_POST['action']) && $_POST['action'] == "edit") {
		extract(array_map("filterIn", $_POST));
		$sql = "SELECT * FROM tbl_dish WHERE dish_id={$id}";
		$param = array($id);
		$res = $obj->getRows($sql, $param);
		
		$response= array();
    
    foreach ($res as $row)
    {
        $post = array();
        $post["dish_id"]  = $row["dish_id"];
        $post["dish_name"]  = $row["dish_name"];
		$post["dish_code"]  = $row["dish_code"];
        $post["ingredient"]  = $row["ingredient"];
		$post["category"] = array();
		$idd= $row["dish_id"];
		$sql2 = "SELECT * FROM tbl_dish_meal WHERE dish_id={$idd}";
		$param2 = array($idd);
		$res2 = $obj->getRows($sql2, $param2);    
		foreach ($res2 as $row2)
		{
          $category = array();
		$category[]  = $row2["meal"];
		 array_push($post["category"], $category);
		}
		$post["dish_type"]  = $row["dish_type"];
        $post["cuisine"] = $row["cuisine"];
		$post["calories"] = $row["calories"];
		$post["proteins"] = $row["proteins"];
		$post["carbohydrates"] = $row["carbohydrates"];
		$post["fats"] = $row["fats"];
        array_push($response, $post);
    }
    echo json_encode($response);
		
	}
	if (isset($_POST['action']) && $_POST['action'] == "delete") {
		extract(array_map("filterIn", $_POST));
		$isDeleted = $obj->delete('tbl_dish', 'dish_id', $id);
		$isDeleted2 = $obj->delete('tbl_dish_meal', 'dish_id', $id);
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