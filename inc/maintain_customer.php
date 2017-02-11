<?php  
session_start();
$_SESSION['uid']=1;
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
		
	
		$sql = "SELECT cust_id,full_name,phone_no,email,age,gender,weight,height,address,programme,type,mealpack,allergies,remark,update_id FROM  tbl_customer";
		
		$res = $obj->getRows($sql);
		
	$html="";
    
    foreach ($res as $row)
    {
        $html.= "<tr class='success'>";
		$html.="<td style='width: 7%;' class='text-center'>".$row["cust_id"]."</td>";
		 $html.="<td>".$row["full_name"]."</td>";
          $html.="<td>".$row["phone_no"]."</td>";
          $html.="<td>".$row["email"]."</td>";
		  $html.=" <td>".$row["type"]."</td>";
		$html.=" <td>".$row["mealpack"]."</td>";
		$html.=" <td>".$row["age"]."</td>";
		$html.=" <td>".$row["gender"]."</td>";
		$html.=" <td>".$row["weight"]."</td>";
		$html.=" <td>".$row["height"]."</td>";
		$html.=" <td>".$row["address"]."</td>";
		$html.=" <td>".$row["programme"]."</td>";
		  $calories=0;
		  $sql3 = "SELECT calories FROM  tbl_customer_meal where cust_id='".$row["cust_id"]."'";
		    $res3 = $obj->getRows($sql3);
			$updated="";
			
			foreach ($res3 as $row3)
            {   $cal=$row3["calories"];
			     settype($cal,"float");
				$calories=$calories+$cal;
				
			}
			
		  $html.="<td>".$calories."</td>";
		
			$html.=" <td>".$row["allergies"]."</td>";
           $html.=" <td>".$row["remark"]."</td>";
		    $sql2 = "SELECT tbl_user.id, tbl_user.name, tbl_user.role,tbl_user.username,tbl_user.password,tbl_user.update_id FROM  tbl_user where tbl_user.id='".$row["update_id"]."'";
		    $res2 = $obj->getRows($sql2);
			$updated="";
			foreach ($res2 as $row2)
            {$updated=$row2["name"];
			}
           $html.="<td>".$updated."</td>";
         $html.="<td>";
		   $html.="<button class='btn btn-sm btn-primary btn-round' data-toggle='modal' data-target='#myModal' onclick='viewCustomer(".$row["cust_id"].");'><i class='material-icons'>edit</i> Edit<div class='ripple-container'></div></button>";
           $html.="<button class='btn btn-sm btn-danger btn-round' onclick='delfunc(".$row["cust_id"].")'><i class='material-icons'>delete</i> Delete<div class='ripple-container'></div></button>";
          
                                                
              $html.="</td>";
        $html.="</tr>";
    }
	        $status = "true";
            $msg = $html;
			echo json_encode(array('status' => $status, 'msg' => $msg));
	}
	


if($_POST['action']=="save")
{
	$id=$obj->get_max("tbl_customer","cust_id");
  	$query="insert into tbl_customer values(:cust_id,:full_name,:phone_no,:email,:age,:gender,:weight,:height,:address,:programme,:type,:mealpack,:allergies,:remark,:update_id,:updatedtime,:registerdate)";
	$param= array(
'cust_id' => $id,
'full_name' =>$_POST['full_name'],
'phone_no' => $_POST['phone_no'],
'email' => $_POST['email'],
'age' => $_POST['age'],
'gender' =>$_POST['gender'],
'weight' => $_POST['weight'],
'height' => $_POST['height'],
'address' => $_POST['address'],
'programme' => $_POST['programme'],
'type' => $_POST['type'],
'mealpack' => $_POST['mealpack'],
'allergies' => $_POST['allergies'],
'remark' => $_POST['remark'],
'update_id' =>$_SESSION['uid'],
'updatedtime' =>date("d/m/Y h:i:s a"),
'registerdate' =>date("d/m/Y h:i:s a")
); 
	$inserted=$obj->insert($query,$param);
$insert2=0;
if($_POST['mealpack']=="4")
{
for($i=1;$i<5;$i++)
{
	$idd=$obj->get_max("tbl_customer_meal","cmid");
  	$query2="insert into tbl_customer_meal values(:cmid,:cust_id,:meal,:calories,:carbohydrates,:proteins,:fats)";
	$param2= array(
'cmid' => $idd,
'cust_id' =>$id,
'meal' =>"meal".$i,
'calories' =>$_POST["r".$i."1"],
'carbohydrates' =>$_POST["r".$i."2"],
'proteins' =>$_POST["r".$i."3"],
'fats' =>$_POST["r".$i."4"],
); 
	$insert2=$obj->insert($query2,$param2);
}
}
else
{
for($i=1;$i<7;$i++)
{
	$idd=$obj->get_max("tbl_customer_meal","cmid");
  	$query2="insert into tbl_customer_meal values(:cmid,:cust_id,:meal,:calories,:carbohydrates,:proteins,:fats)";
	$param2= array(
'cmid' => $idd,
'cust_id' =>$id,
'meal' =>"meal".$i,
'calories' =>$_POST["r".$i."1"],
'carbohydrates' =>$_POST["r".$i."2"],
'proteins' =>$_POST["r".$i."3"],
'fats' =>$_POST["r".$i."4"],
); 
	$insert2=$obj->insert($query2,$param2);
}	
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