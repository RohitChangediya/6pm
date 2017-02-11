<!doctype html>
<html lang="en">


<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.html" />
    <link rel="icon" type="image/png" href="assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>6 Pack Meal | Add Meal</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
   
    <?php include 'inc/extcss.php';?>
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
                        <a class="navbar-brand" href="#">6 Pack Meal | Add Meal </a>
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
                        <div class="alert alert-danger"><span> Allergy - Here The Allergies Of The Customer Will Be Displayed</span></div>
                        <div class="alert alert-warning"><span> Warning - Here The Warnings Of The Customer Will Be Displayed</span></div>
                            <div class="card">
                                                        <form method="get" class="form-horizontal" action="sunday.php">
                                                            <div class="card-header card-header-text">
                                                                <h4 class="card-title">Customer Name Meal Box</h4>
                                                            </div>
                                                            <div class="card-content">
                                                                
                                                                <div class="row">
                                                                    <label class="col-sm-3 label-on-left">Meal 1</label>
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group label-floating is-empty">
                                                                            <label class="control-label"></label>
                                                                            <input type="text" value="" placeholder="Enter Meal" class="form-control"/>
                                                                            <span class="help-block">100 Calories</span>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                </div>
                                                                <div class="row">
                                                                    <label class="col-sm-3 label-on-left">Meal 2</label>
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group label-floating is-empty">
                                                                            <label class="control-label"></label>
                                                                            <input type="text" value="" placeholder="Enter Meal" class="form-control"/>
                                                                            <span class="help-block">100 Calories</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <label class="col-sm-3 label-on-left">Meal 3</label>
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group label-floating is-empty">
                                                                            <label class="control-label"></label>
                                                                            <input type="text" value="" placeholder="Enter Meal" class="form-control"/>
                                                                            <span class="help-block">100 Calories</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <label class="col-sm-3 label-on-left">Meal 4</label>
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group label-floating is-empty">
                                                                            <label class="control-label"></label>
                                                                            <input type="text" value="" placeholder="Enter Meal" class="form-control"/>
                                                                            <span class="help-block">100 Calories</span>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                </div>
                                                                <div class="row">
                                                                    <label class="col-sm-3 label-on-left">Updated By</label>
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group label-floating is-empty">
                                                                            <label class="control-label"></label>
                                                                            <input type="text" class="form-control" placeholder="Your Name">
                                                                            <span class="help-block">Enter the name of the person entering this data.</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                <div class="col-sm-12">
                                                                <center>
                                                                        <div class="form-group label-floating is-empty">
                                                                            <button class="btn btn-primary btn-round">Save Details<div class="ripple-container"></div></button>
                                                                        </div>
                                                                        </center>
                                                                    </div>
                                                                    
                                                                </div>
                                                            </div>
                                                        </form>
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

<script>
    $(document).ready(function() { 

  swal({
  type: 'warning',
  allowOutsideClick: false,
  allowEscapeKey: false,
  html:
    '<div class="alert alert-danger"><span> Allergy - Here The Allergies Of The Customer Will Be Displayed</span></div>'+'<div class="alert alert-warning"><span> Warning - Here The Warnings Of The Customer Will Be Displayed</span></div>',
  confirmButtonText:'OK',
})

    })
</script>


</html>