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
                                                <tr class="success">
                                                    <td style="width: 7%;" class="text-center">1</td>
                                                    <td>Aakash Shah</td>
                                                    <td>9769111572</td>
                                                    <td>sky496@gmail.com</td>
                                                    <td>Veg</td>
                                                    <td>6</td>
                                                    <td>21</td>
                                                    <td>Male</td>
                                                    <td>100 kgs</td>
                                                    <td>176 cm</td>
                                                    <td>demo address, demo address, demo address, demo address, Mumbai - 400001</td>
                                                    <td>Weight Loss</td>
                                                    <td>1700</td>
                                                    <td>Onion</td>
                                                    <td>Avoid Fried Food</td>
                                                    <td>Admin 1</td>
                                                    <td>
                                                       <button class="btn btn-sm btn-primary btn-round" data-toggle="modal" data-target="#myModal"><i class="material-icons">edit</i> Edit<div class="ripple-container"></div></button>
                                                       <button class="btn btn-sm btn-danger btn-round" onclick="delfunc()"><i class="material-icons">delete</i> Delete<div class="ripple-container"></div></button>
                                                    </td>
                                                </tr>
                                                <tr class="danger">
                                                    <td style="width: 7%;" class="text-center">2</td>
                                                    <td>Deepesh Bhoir</td>
                                                    <td>9769111555</td>
                                                    <td>deepeshbhoir@gmail.com</td>
                                                    <td>Non-Veg</td>
                                                    <td>6</td>
                                                    <td>22</td>
                                                    <td>Male</td>
                                                    <td>80 kgs</td>
                                                    <td>176 cm</td>
                                                    <td>demo address, demo address, demo address, demo address, Mumbai - 400046</td>
                                                    <td>Muscle Gain</td>
                                                    <td>1500</td>
                                                    <td>Garlic</td>
                                                    <td>Give More Non-Veg Food</td>
                                                    <td>Admin 2</td>
                                                    <td>
                                                       <button class="btn btn-sm btn-primary btn-round" data-toggle="modal" data-target="#myModal"><i class="material-icons">edit</i> Edit<div class="ripple-container"></div></button>
                                                       <button class="btn btn-sm btn-danger btn-round" onclick="delfunc()"><i class="material-icons">delete</i> Delete<div class="ripple-container"></div></button>
                                                    </td>
                                                </tr>
                                                <tr class="warning">
                                                    <td style="width: 7%;" class="text-center">3</td>
                                                    <td>Harshit Shah</td>
                                                    <td>9722111572</td>
                                                    <td>hshah@gmail.com</td>
                                                    <td>Eggitarian</td>
                                                    <td>6</td>
                                                    <td>22</td>
                                                    <td>Male</td>
                                                    <td>70 kgs</td>
                                                    <td>165 cm</td>
                                                    <td>demo address, demo address, demo address, demo address, Mumbai - 400025</td>
                                                    <td>Weight Gain</td>
                                                    <td>1700</td>
                                                    <td>Onion</td>
                                                    <td>Avoid Fried Food</td>
                                                    <td>Admin 3</td>
                                                    <td>
                                                       <button class="btn btn-sm btn-primary btn-round" data-toggle="modal" data-target="#myModal"><i class="material-icons">edit</i> Edit<div class="ripple-container"></div></button>
                                                       <button class="btn btn-sm btn-danger btn-round" onclick="delfunc()"><i class="material-icons">delete</i> Delete<div class="ripple-container"></div></button>
                                                    </td>
                                                </tr>
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
                                                        <input type="radio" name="programme" checked="true"> Weight Loss
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="programme"> Weight Gain
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="programme"> Muscle Gain
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-3 label-on-left">Type</label>
                                            <div class="col-sm-9 checkbox-radios">
                                               
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="type" checked="true"> Veg
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="type"> Non-Veg
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="type"> Eggitarian
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-3 label-on-left">Meal Pack</label>
                                            <div class="col-sm-9 checkbox-radios">
                                               
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="mealpack" id="fourp" onclick="javascript:fourpack();"> 4-Four
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="mealpack" id="sixp" onclick="javascript:sixpack();"> 6-Six
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
                                                    <span class="help-block">Prescribed Calorie Intake</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-3 label-on-left">Lunch Calories Intake</label>
                                            <div class="col-sm-6">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <input type="number" class="form-control" placeholder="Lunch Calories">
                                                    <span class="help-block">Prescribed Calorie Intake</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-3 label-on-left">Snacks Calories Intake</label>
                                            <div class="col-sm-6">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <input type="number" class="form-control" placeholder="Snacks Calories">
                                                    <span class="help-block">Prescribed Calorie Intake</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-3 label-on-left">Pre-Workout Calories Intake</label>
                                            <div class="col-sm-6">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <input type="number" class="form-control" placeholder="Pre-Workout Calories">
                                                    <span class="help-block">Prescribed Calorie Intake</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-3 label-on-left">Dinner Calories Intake</label>
                                            <div class="col-sm-6">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <input type="number" class="form-control" placeholder="Dinner Calories">
                                                    <span class="help-block">Prescribed Calorie Intake</span>
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
                                                    <span class="help-block">Prescribed Calorie Intake</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-3 label-on-left">Lunch Calories Intake</label>
                                            <div class="col-sm-6">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <input type="number" class="form-control" placeholder="Lunch Calories">
                                                    <span class="help-block">Prescribed Calorie Intake</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-3 label-on-left">Snacks Calories Intake</label>
                                            <div class="col-sm-6">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <input type="number" class="form-control" placeholder="Snacks Calories">
                                                    <span class="help-block">Prescribed Calorie Intake</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-3 label-on-left">Dinner Calories Intake</label>
                                            <div class="col-sm-6">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <input type="number" class="form-control" placeholder="Dinner Calories">
                                                    <span class="help-block">Prescribed Calorie Intake</span>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-3 label-on-left">Allergies</label>
                                            <div class="col-sm-9">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <input type="text" class="form-control" placeholder="Allergies(If Any)">
                                                    <span class="help-block">Specify Customer's allergies if any.</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-3 label-on-left">Remarks</label>
                                            <div class="col-sm-9">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <input type="text" class="form-control" placeholder="Remarks(If Any)">
                                                    <span class="help-block">Specify Customer's Remarks/Requests if any.</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-3 label-on-left">Updated By</label>
                                            <div class="col-sm-9">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <input type="text" class="form-control" placeholder="Your Name">
                                                    <span class="help-block">Enter the name of the person entering this data.</span>
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
                                        <button type="button" class="btn btn-primary">Save changes</button>
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