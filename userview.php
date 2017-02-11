<!doctype html>
<html lang="en">


<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.html" />
    <link rel="icon" type="image/png" href="assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>6 Pack Meal | Customers</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <?php include 'inc/extcss.php';?>
    

    <style type="text/css">
    
    select.input-sm, select.form-group-sm .form-control
            {
                line-height: 15px;
            }
            span.dtr-data
            {
                white-space: normal;
            }
            table.dataTable>tbody>tr.child span.dtr-title
            {
                min-width: 10px;
            }
    </style>
</head>

<body>
    <div class="wrapper">
		<?php include 'inc/nav.php';?>


        <div class="main-panel">
            <nav class="navbar navbar-default navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-minimize">
                        <button id="minimizeSidebar" class="btn btn-round btn-white btn-fill btn-just-icon">
                            <i class="material-icons visible-on-sidebar-regular f-26">keyboard_arrow_left</i>
                            <i class="material-icons visible-on-sidebar-mini f-26">keyboard_arrow_right</i>
                        </button>
                    </div>
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">6 Pack Meal | Customers </a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="font-size: 16px;" onclick="logfunc()">
                                    <i class="material-icons">lock</i> Logout
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-content">
                                    <h4 class="card-title">Customers</h4>
                                    <div class="toolbar">
                                        <!--        Here you can write extra buttons/actions for the toolbar              -->
                                    </div>
                                    <div class="material-datatables">
                                        <table id="datatables" class="table table-striped table-no-bordered table-hover nowrap" cellspacing="0" width="100%" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th style="width: 7%;" class="text-center">ID</th>
                                                    <th>Name &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</th>
                                                    <th>Phone Number &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</th>
                                                    <th>Email Id &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</th>
                                                    <th>Type &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</th>
                                                    <th>Meal Pack &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</th>
                                                    <th>Age &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</th>
                                                    <th>Gender &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</th>
                                                    <th>Weight</th>
                                                    <th>Height</th>
                                                    <th>Address</th>
                                                    <th>Programme</th>
                                                    <th>Calorie Intake</th>
                                                    <th>Allergies</th>
                                                    <th>Remark</th>
                                                    <th>Updated By</th>
                                                    <th class="disabled-sorting">Actions</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th style="width: 7%;" class="text-center">ID</th>
                                                    <th>Name &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</th>
                                                    <th>Phone Number &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</th>
                                                    <th>Email Id</th>
                                                    <th>Type &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</th>
                                                    <th>Meal Pack &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</th>
                                                    <th>Age &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</th>
                                                    <th>Gender &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</th>
                                                    <th>Weight</th>
                                                    <th>Height</th>
                                                    <th>Address</th>
                                                    <th>Programme</th>
                                                    <th>Calorie Intake</th>
                                                    <th>Allergies</th>
                                                    <th>Remark</th>
                                                    <th>Updated By</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </tfoot>
                                            <tbody id="userbody">
											<?php
											require './inc/inc.con.php';
												$obj = new db();
	$obj->connect();
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
                                             echo $html;
?>											 
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- end content-->
                            </div>
                            <!--  end card  -->
                        </div>
                        <!-- end col-md-12 -->
                    </div>
                </div>
            </div>
            <!-- Modal -->
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Customers</h4>
                                      </div>
                                      <div class="modal-body">
                                        <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <form method="get" class="form-horizontal">
                                    <div class="card-header card-header-text">
                                        <h4 class="card-title">Add New User</h4>
                                    </div>
                                    <div class="card-content">
                                        <div class="row">
                                            <label class="col-sm-3 label-on-left">Full Name</label>
                                            <div class="col-sm-9">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <input type="text" class="form-control" placeholder="Enter Full Name">
                                                    <span class="help-block">First Name &nbsp; Middle Name &nbsp; Last Name</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-3 label-on-left">Phone Number</label>
                                            <div class="col-sm-6">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <input type="number" class="form-control" placeholder="Enter 10 digit phone number">
                                                    <span class="help-block">Enter customers 10 digit phone number.</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-3 label-on-left">Email Id</label>
                                            <div class="col-sm-6">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <input type="email" class="form-control" placeholder="Email Address">
                                                    <span class="help-block">Enter Customer's Email Id.</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-3 label-on-left">Age</label>
                                            <div class="col-sm-6">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <input type="number" class="form-control" placeholder="Age in Years">
                                                    <span class="help-block">Enter Customer's Age is Years.</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-3 label-on-left">Gender</label>
                                            <div class="col-sm-9 checkbox-radios">
                                               
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="gender" checked="true"> Male
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="gender"> Female
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="gender"> Other
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-3 label-on-left">Weight</label>
                                            <div class="col-sm-6">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <input type="number" class="form-control" placeholder="Weight in Kgs">
                                                    <span class="help-block">Enter Customer's Weight is Kgs.</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-3 label-on-left">Height</label>
                                            <div class="col-sm-6">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <input type="number" class="form-control" placeholder="Weight in Kgs">
                                                    <span class="help-block">Enter Customer's Height is Cms.</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-3 label-on-left">Address</label>
                                            <div class="col-sm-9">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <input type="text" class="form-control" placeholder="Address">
                                                    <span class="help-block">Full Address of the customer</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-3 label-on-left">Programme</label>
                                            <div class="col-sm-9 checkbox-radios">
                                               
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="programme" checked="true" value="weight_loss"> Weight Loss
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="programme" value="weight_gain"> Weight Gain
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="programme" value="muscle_gain"> Muscle Gain
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-3 label-on-left">Type</label>
                                            <div class="col-sm-9 checkbox-radios">
                                               
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="type" checked="true" value="veg"> Veg
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="type" value="nonveg"> Non-Veg
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="type" value="eggitarian"> Eggitarian
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-3 label-on-left">Meal Pack</label>
                                            <div class="col-sm-9 checkbox-radios">
                                               
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="mealpack" id="fourp" value="4" onclick="javascript:fourpack();"> 4-Four
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="mealpack" id="sixp" value="6" onclick="javascript:sixpack();"> 6-Six
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="spack">
                                        <div class="row">
                                            <label class="col-sm-3 label-on-left">Pre-Breakfast Calories Intake</label>
                                            <div class="col-sm-6">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <input type="number" class="form-control" placeholder=" Pre-Breakfast Calories">
                                                    <span class="help-block">Prescribed Calorie Intake</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-3 label-on-left">Breakfast Calories Intake</label>
                                            <div class="col-sm-6">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <input type="number" class="form-control" placeholder="Breakfast Calories">
                                                    <span class="help-block">Breakfast Calories Intake</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-3 label-on-left">Lunch Calories Intake</label>
                                            <div class="col-sm-6">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <input type="number" class="form-control" placeholder="Lunch Calories">
                                                    <span class="help-block">Lunch Calories Intake</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-3 label-on-left">Snacks Calories Intake</label>
                                            <div class="col-sm-6">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <input type="number" class="form-control" placeholder="Snacks Calories">
                                                    <span class="help-block">Snacks Calories Intake</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-3 label-on-left">Pre-Workout Calories Intake</label>
                                            <div class="col-sm-6">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <input type="number" class="form-control" placeholder="Pre-Workout Calories">
                                                    <span class="help-block">Pre-Workout Calories Intake</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-3 label-on-left">Dinner Calories Intake</label>
                                            <div class="col-sm-6">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <input type="number" class="form-control" placeholder="Dinner Calories">
                                                    <span class="help-block">Dinner Calories Intake</span>
                                                </div>
                                            </div>
                                        </div>
                                        </div>

                                        <div id="fpack">
                                        <div class="row">
                                            <label class="col-sm-3 label-on-left">Breakfast Calories Intake</label>
                                            <div class="col-sm-6">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <input type="number" class="form-control" placeholder="Breakfast Calories">
                                                    <span class="help-block">Breakfast Calories Intake</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-3 label-on-left">Lunch Calories Intake</label>
                                            <div class="col-sm-6">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <input type="number" class="form-control" placeholder="Lunch Calories">
                                                    <span class="help-block">Lunch Calories Intake</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-3 label-on-left">Snacks Calories Intake</label>
                                            <div class="col-sm-6">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <input type="number" class="form-control" placeholder="Snacks Calories">
                                                    <span class="help-block">Snacks Calories Intake</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-3 label-on-left">Dinner Calories Intake</label>
                                            <div class="col-sm-6">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <input type="number" class="form-control" placeholder="Dinner Calories">
                                                    <span class="help-block">Dinner Calories Intake</span>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-3 label-on-left">Allergies</label>
                                            <div class="col-sm-9">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <input type="text" class="form-control" name="allergies" id="allergies" placeholder="Allergies(If Any)">
                                                    <span class="help-block">Specify Customer's allergies if any.</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-3 label-on-left">Remarks</label>
                                            <div class="col-sm-9">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <input type="text" class="form-control" name="remark" id="remark" placeholder="Remarks(If Any)">
                                                    <span class="help-block">Specify Customer's Remarks/Requests if any.</span>
                                                </div>
                                            </div>
                                        </div>
                                      
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary" id="save">Save changes</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
            <?php include 'inc/footer.php';?>
        </div>
    </div>
</body>
<!--   Core JS Files   -->
<?php include 'inc/extjs.php';?>
<script src="js/custview.js"></script>
 <script type="text/javascript">
    /* Global JavaScript File for working with jQuery library */
        $(function(){
            // execute when the HTML file's (document object model: DOM) has loaded
   
            customer_crud.init();
			  
        });
	
	function viewCustomer(custid)
	{
		
		//alert(dishid);
	
            var $id = custid;
		
            var $formData = { action: "edit", id: $id };

            $.ajax( {
                    url: 'inc/maintain_customer.php',
                    type: 'POST',
                    dataType: 'json',
                    data: $formData,
                } )
                .done( function( $resp ) {
                    //console.log( $resp );
                    if( typeof $resp !== 'undefined' ) {
    
						 $("#dish_id").val($resp[0].dish_id);
$("#dishname").val($resp[0].dish_name);
 $("#dishcode").val($resp[0].dish_code);

$("input:radio[name=type][value="+$resp[0].dish_type+"]").prop('checked', true);

  for(var i=0;i<$resp[0].category.length;i++)
  {
  $('.category').each(function(){ if($(this).val()==$resp[0].category[i]){$(this).prop("checked",true); }});
  }
   $("#calories").val($resp[0].calories);
     $("#proteins").val($resp[0].proteins);
	   $("#carbohyd").val($resp[0].carbohydrates);
	     $("#fats").val($resp[0].fats);
// console.log($resp[0].photo);
 


                        
						
                    } else {
                       // $( '#error-msg' ).html( '<div class="alert alert-danger">error</div>' );
                    }
                } )
                .always( function( $resp ) {
					// console.log( $resp );
                         // reDrawDataTable();
						  
                } );
		
	}
	
	
    </script>
<script type="text/javascript">
    window.onload = function() {
        document.getElementById('fpack').style.display = 'none';
        document.getElementById('spack').style.display = 'none';
    }

    function fourpack() {
        if (document.getElementById('fourp').checked) {
            document.getElementById('fpack').style.display = 'block';
            document.getElementById('spack').style.display = 'none';
        } 
        else {
            document.getElementById('fpack').style.display = 'none';
        }
    }

    function sixpack() {
        if (document.getElementById('sixp').checked) {
            document.getElementById('spack').style.display = 'block';
            document.getElementById('fpack').style.display = 'none';
        } 
        else {
            document.getElementById('spack').style.display = 'none';
        }
    }

</script>


<script type="text/javascript">
    $(document).ready(function() {
        $('#datatables').DataTable({


            "pagingType": "full_numbers",
            "lengthMenu": [
                [10, 25, 50, -1],
                [10, 25, 50, "All"]
            ],
            responsive: true,
            language: {
                search: "_INPUT_",
                searchPlaceholder: "Search records",
            }

        });


        var table = $('#datatables').DataTable();


        $('.card .material-datatables label').addClass('form-group');
    });
</script>

<script>
    function delfunc()
    {
        swal({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          type: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, delete it!',
          cancelButtonText: 'No, cancel!',
          confirmButtonClass: 'btn btn-success',
          cancelButtonClass: 'btn btn-danger',
          buttonsStyling: false
        }).then(function () {
          swal(
            'Deleted!',
            'Your file has been deleted.',
            'success'
          )
        }, function (dismiss) {
          // dismiss can be 'cancel', 'overlay',
          // 'close', and 'timer'
          if (dismiss === 'cancel') {
            swal(
              'Cancelled',
              'Your imaginary file is safe :)',
              'error'
            )
          }
        })
    };
</script>

</html>