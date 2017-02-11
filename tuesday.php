<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.php" />
    <link rel="icon" type="image/png" href="assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>6 Pack Meal | Tuesday Meal Box</title>
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
                        <a class="navbar-brand" href="#">6 Pack Meal | Meal Box </a>
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
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-content">
                                    <h4 class="card-title">Select Date For Tuesday</h4>
                                    <div class="form-group">
                                        <input type="text" class="form-control datepicker" value="10/10/2016" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-content">
                                    <h4 class="card-title">Tuesday Meal</h4>
                                    <div class="toolbar">
                                        <!--        Here you can write extra buttons/actions for the toolbar              -->
                                    </div>
                                    <div class="material-datatables">
                                        <table id="datatables" class="table table-striped table-no-bordered table-hover nowrap" cellspacing="0" width="100%" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th style="width: 7%;" class="text-center">#</th>
                                                    <th>ID</th>
                                                    <th>Name</th>
                                                    <th>Type</th>
                                                    <th>Programme</th>
                                                    <th>Meal Pack</th>
                                                    <th>Calorie Intake</th>
                                                    <th>Allergies</th>
                                                    <th>Remark</th>
                                                    <th>Updated By</th>
                                                    <th class="disabled-sorting">Actions</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th style="width: 7%;" class="text-center">#</th>
                                                    <th>ID</th>
                                                    <th>Name</th>
                                                    <th>Type</th>
                                                    <th>Programme</th>
                                                    <th>Meal Pack</th>
                                                    <th>Calorie Intake</th>
                                                    <th>Allergies</th>
                                                    <th>Remark</th>
                                                    <th>Updated By</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                <tr class="success">
                                                <td style="width: 7%;" class="text-center">
                                                        <div class="checkbox">
                                                                <label>
                                                                    <input type="checkbox" name="optionsCheckboxes">
                                                                </label>
                                                            </div>
                                                    </td>
                                                    <td>1</td>
                                                    <td>Aakash Shah</td>
                                                    <td>Veg</td>
                                                    <td>Weight Loss</td>
                                                    <td>4</td>
                                                    <td>1700</td>
                                                    <td>Onion</td>
                                                    <td>Avoid Fried Food</td>
                                                    <td>Admin 1</td>
                                                    <td>
                                                        <button class="btn btn-sm btn-success btn-round" onclick="window.location.href = 'mealbox4.php';">Add Meal<div class="ripple-container"></div></button><button class="btn btn-sm btn-primary btn-round" data-toggle="modal" data-target="#myModal4"><i class="material-icons">edit</i> Edit<div class="ripple-container"></div></button><button class="btn btn-sm btn-danger btn-round"><i class="material-icons">delete</i> Delete<div class="ripple-container"></div></button>
                                                    </td>
                                                </tr>
                                                <tr class="danger">
                                                    <td style="width: 7%;" class="text-center">
                                                        <div class="checkbox">
                                                                <label>
                                                                    <input type="checkbox" name="optionsCheckboxes">
                                                                </label>
                                                            </div>
                                                    </td>
                                                    <td>2</td>
                                                    <td>Deepesh Bhoir</td>
                                                    <td>Non-Veg</td>
                                                    <td>Muscle Gain</td>
                                                    <td>6</td>
                                                    <td>1500</td>
                                                    <td>Garlic</td>
                                                    <td>Give More Non-Veg Food</td>
                                                    <td>Admin 2</td>
                                                    <td>
                                                       <button class="btn btn-sm btn-success btn-round" onclick="window.location.href = 'mealbox6.php';">Add Meal<div class="ripple-container"></div></button><button class="btn btn-sm btn-primary btn-round" data-toggle="modal" data-target="#myModal6"><i class="material-icons">edit</i> Edit<div class="ripple-container"></div></button><button class="btn btn-sm btn-danger btn-round"><i class="material-icons">delete</i> Delete<div class="ripple-container"></div></button>
                                                    </td>
                                                </tr>
                                                <tr class="warning">
                                                    <td style="width: 7%;" class="text-center">
                                                        <div class="checkbox">
                                                                <label>
                                                                    <input type="checkbox" name="optionsCheckboxes">
                                                                </label>
                                                            </div>
                                                    </td>
                                                    <td>3</td>
                                                    <td>Harshit Shah</td>
                                                    <td>Eggitarian</td>
                                                    <td>Weight Gain</td>
                                                    <td>6</td>
                                                    <td>1700</td>
                                                    <td>Onion</td>
                                                    <td>Avoid Fried Food</td>
                                                    <td>Admin 3</td>
                                                    <td>
                                                       <button class="btn btn-sm btn-success btn-round" onclick="window.location.href = 'mealbox6.php';">Add Meal<div class="ripple-container"></div></button><button class="btn btn-sm btn-primary btn-round" data-toggle="modal" data-target="#myModal6"><i class="material-icons">edit</i> Edit<div class="ripple-container"></div></button><button class="btn btn-sm btn-danger btn-round"><i class="material-icons">delete</i> Delete<div class="ripple-container"></div></button>
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
                                <div class="modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Customer Name Meal Box</h4>
                                      </div>
                                      <div class="modal-body">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="card">
                                                    <div class="alert alert-danger"><span> Allergy - Here The Allergies Of The Customer Will Be Displayed</span></div>
                                                            <div class="alert alert-warning"><span> Warning - Here The Warnings Of The Customer Will Be Displayed</span></div>
                                                        <form method="get" class="form-horizontal">
                                                            <div class="card-header card-header-text">
                                                                <h4 class="card-title">Edit Meals</h4>
                                                            </div>
                                                            <div class="card-content">
                                                                <div class="row">
                                                                    <label class="col-sm-3 label-on-left">Pre-Breakfast</label>
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group label-floating is-empty">
                                                                            <label class="control-label"></label>
                                                                            <input type="text" value="" placeholder="Enter Meal" class="tagsinput form-control" data-role="tagsinput"/>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-3">
                                                                        <div class="form-group label-floating is-empty">
                                                                            <label class="control-label" style="padding-top: 15%;">100 cal</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <label class="col-sm-3 label-on-left">Breakfast</label>
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group label-floating is-empty">
                                                                            <label class="control-label"></label>
                                                                            <input type="text" value="" placeholder="Enter Meal" class="tagsinput form-control" data-role="tagsinput"/>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-3">
                                                                        <div class="form-group label-floating is-empty">
                                                                            <label class="control-label" style="padding-top: 15%;">100 cal</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <label class="col-sm-3 label-on-left">Lunch</label>
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group label-floating is-empty">
                                                                            <label class="control-label"></label>
                                                                            <input type="text" value="" placeholder="Enter Meal" class="tagsinput form-control" data-role="tagsinput"/>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-3">
                                                                        <div class="form-group label-floating is-empty">
                                                                            <label class="control-label" style="padding-top: 15%;">100 cal</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <label class="col-sm-3 label-on-left">Snacks</label>
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group label-floating is-empty">
                                                                            <label class="control-label"></label>
                                                                            <input type="text" value="" placeholder="Enter Meal" class="tagsinput form-control" data-role="tagsinput"/>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-3">
                                                                        <div class="form-group label-floating is-empty">
                                                                            <label class="control-label" style="padding-top: 15%;">100 cal</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <label class="col-sm-3 label-on-left">Pre-Workout</label>
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group label-floating is-empty">
                                                                            <label class="control-label"></label>
                                                                            <input type="text" value="" placeholder="Enter Meal" class="tagsinput form-control" data-role="tagsinput"/>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-3">
                                                                        <div class="form-group label-floating is-empty">
                                                                            <label class="control-label" style="padding-top: 15%;">100 cal</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <label class="col-sm-3 label-on-left">Dinner</label>
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group label-floating is-empty">
                                                                            <label class="control-label"></label>
                                                                            <input type="text" value="" placeholder="Enter Meal" class="tagsinput form-control" data-role="tagsinput"/>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-3">
                                                                        <div class="form-group label-floating is-empty">
                                                                            <label class="control-label" style="padding-top: 15%;">100 cal</label>
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


                                <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Customer Name Meal Box</h4>
                                      </div>
                                      <div class="modal-body">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="card">
                                                    <div class="alert alert-danger"><span> Allergy - Here The Allergies Of The Customer Will Be Displayed</span></div>
                                                            <div class="alert alert-warning"><span> Warning - Here The Warnings Of The Customer Will Be Displayed</span></div>
                                                        <form method="get" class="form-horizontal">
                                                            <div class="card-header card-header-text">
                                                                <h4 class="card-title">Edit Meals</h4>
                                                            </div>

                                                            <div class="card-content">
                                                                
                                                                <div class="row">
                                                                    <label class="col-sm-3 label-on-left">Breakfast</label>
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group label-floating is-empty">
                                                                            <label class="control-label"></label>
                                                                            <input type="text" value="" placeholder="Enter Meal" class="tagsinput form-control" data-role="tagsinput"/>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-3">
                                                                        <div class="form-group label-floating is-empty">
                                                                            <label class="control-label" style="padding-top: 15%;">100 cal</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <label class="col-sm-3 label-on-left">Lunch</label>
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group label-floating is-empty">
                                                                            <label class="control-label"></label>
                                                                            <input type="text" value="" placeholder="Enter Meal" class="tagsinput form-control" data-role="tagsinput"/>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-3">
                                                                        <div class="form-group label-floating is-empty">
                                                                            <label class="control-label" style="padding-top: 15%;">100 cal</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <label class="col-sm-3 label-on-left">Snacks</label>
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group label-floating is-empty">
                                                                            <label class="control-label"></label>
                                                                            <input type="text" value="" placeholder="Enter Meal" class="tagsinput form-control" data-role="tagsinput"/>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-3">
                                                                        <div class="form-group label-floating is-empty">
                                                                            <label class="control-label" style="padding-top: 15%;">100 cal</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <label class="col-sm-3 label-on-left">Dinner</label>
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group label-floating is-empty">
                                                                            <label class="control-label"></label>
                                                                            <input type="text" value="" placeholder="Enter Meal" class="tagsinput form-control" data-role="tagsinput"/>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-3">
                                                                        <div class="form-group label-floating is-empty">
                                                                            <label class="control-label" style="padding-top: 15%;">100 cal</label>
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

<script>

$(document).ready(function() {
	
	demo.initFormExtendedDatetimepickers();

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

</html>