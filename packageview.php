<!doctype html>
<html lang="en">


<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.html" />
    <link rel="icon" type="image/png" href="assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>6 Pack Meal | Packaging View</title>
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
            @media only screen and (max-device-width: 480px) {
                        .mobile {
                                    display: block;
                                 }
                                 .desktop {
                                    display: none;
                                 }

                                }

                    @media only screen and (min-device-width: 481px) {
                        .mobile {
                                     display: none;
                                 }
                                 .desktop {
                                     display: block;
                                 }
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
                        <a class="navbar-brand" href="#">6 Pack Meal | Pakaging Details </a>
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
                        
                        <div class="col-lg-12 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Foodbank</h4>
                                </div>
                                <div class="card-content">
                                    <div class="dropdown col-sm-3 pull-right desktop">
                                                        <button href="#" class="dropdown-toggle btn btn-primary btn-round btn-block" data-toggle="dropdown">Export Data
                                                            <b class="caret"></b>
                                                        </button>
                                                        <ul class="dropdown-menu dropdown-menu-left">
                                                            <!--<li>
                                                                <a href="#" onClick ="$('#datatables').tableExport({type:'pdf',escape:'false',ignoreColumn:'[0,3]',pdfLeftMargin:-20})">PDF</a>
                                                            </li>
                                                            <li class="divider"></li>-->
                                                            <li>
                                                                <a href="#" onClick ="$('#datatables').tableExport({type:'excel',escape:'false',ignoreColumn:'[0,3]'})">Excel</a>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                    <div class="dropdown col-sm-3 mobile">
                                                        <button href="#" class="dropdown-toggle btn btn-primary btn-round btn-block" data-toggle="dropdown">Export Data
                                                            <b class="caret"></b>
                                                        </button>
                                                        <ul class="dropdown-menu dropdown-menu-left">
                                                            <!--<li>
                                                                <a href="#" onClick ="$('#datatables').tableExport({type:'pdf',escape:'false',ignoreColumn:'[0,3]',pdfLeftMargin:-20})">PDF</a>
                                                            </li>
                                                            <li class="divider"></li>-->
                                                            <li>
                                                                <a href="#" onClick ="$('#datatables').tableExport({type:'excel',escape:'false',ignoreColumn:'[0,3]'})">Excel</a>
                                                            </li>

                                                        </ul>
                                                    </div>
                                    <div class="toolbar">
                                        <!--        Here you can write extra buttons/actions for the toolbar              -->
                                    </div>
                                    <div class="material-datatables">
                                        <table id="datatables" class="table table-striped table-no-bordered table-hover nowrap" cellspacing="0" width="100%" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th style="width: 7%;" class="text-center">
                                                        #
                                                    </th>
                                                    <th>Customer Name</th>
                                                    <th>Meal Details</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th style="width: 7%;" class="text-center">
                                                        #
                                                    </th>
                                                    <th>Customer Name</th>
                                                    <th>Meal Details</th>
                                                    <th>Action</th>
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
                                                    <td>Aakash Shah</td>
                                                    <td>
                                                        <ol>
                                                            <li>Coconut Water - 200ml</li>
                                                            <li>Sandwhich - 1 Plate</li>
                                                            <li>Cheese Sandwhich - 1 Plate</li>
                                                            <li>Mush - 100gms</li>
                                                            <li>Mix Veg Salad - 200gms</li>
                                                            <li>Boiled Eggs - 4 pieces</li>
                                                            <li>Chicken Main Course - 1/2 Plate</li>
                                                        </ol>
                                                    </td>
                                                    <td>
                                                           
                                                            <button class="btn btn-sm btn-danger btn-round" onclick="delfunc()"><i class="material-icons">close</i> Remove<div class="ripple-container"></div></button>
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
                                                    <td>Harshit Shah</td>
                                                    <td>
                                                        <ol>
                                                            <li>Coconut Water - 500ml</li>
                                                            <li>Sandwhich - 2 Plate</li>
                                                            <li>Cheese Sandwhich - 2 Plate</li>
                                                            <li>Mush - 300gms</li>
                                                            <li>Mix Veg Salad - 400gms</li>
                                                            <li>Boiled Eggs - 5 piece</li>
                                                            <li>Chicken Main Course - 1 Plate</li>
                                                        </ol>
                                                    </td>
                                                    <td>
                                                           
                                                            <button class="btn btn-sm btn-danger btn-round" onclick="delfunc()"><i class="material-icons">close</i> Remove<div class="ripple-container"></div></button>
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
                                                    <td>Mohit Parikh</td>
                                                    <td>
                                                        <ol>
                                                            <li>Coconut Water - 250ml</li>
                                                            <li>Sandwhich - 1 Plate</li>
                                                            <li>Cheese Sandwhich - 1 Plate</li>
                                                            <li>Mush - 350gms</li>
                                                            <li>Mix Veg Salad - 350gms</li>
                                                            <li>Boiled Eggs - 4 pieces</li>
                                                            <li>Chicken Main Course - 1 Plate</li>
                                                        </ol>
                                                    </td>
                                                    <td>
                                                           
                                                            <button class="btn btn-sm btn-danger btn-round" onclick="delfunc()"><i class="material-icons">close</i> Remove<div class="ripple-container"></div></button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
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