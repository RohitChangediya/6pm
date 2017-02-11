<!doctype html>
<html lang="en">


<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.html" />
    <link rel="icon" type="image/png" href="assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>6 Pack Meal | Add New User</title>
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
                        <a class="navbar-brand" href="#">6 Pack Meal | Add Customer </a>
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
                                <form id="form" method="POST" class="form-horizontal">
                                    <div class="card-header card-header-text">
                                        <h4 class="card-title">Add New User</h4>
                                    </div>
                                    <div class="card-content">
                                        <div class="row">
                                            <label class="col-sm-3 label-on-left">Full Name</label>
                                            <div class="col-sm-9">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <input type="text" class="form-control" name="full_name" placeholder="Enter Full Name">
                                                    <span class="help-block">First Name &nbsp; Middle Name &nbsp; Last Name</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-3 label-on-left">Phone Number</label>
                                            <div class="col-sm-4">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <input type="number" class="form-control" name="phone_no" placeholder="Enter 10 digit phone number">
                                                    <span class="help-block">Enter customers 10 digit phone number.</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-3 label-on-left">Email Id</label>
                                            <div class="col-sm-6">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <input type="email" class="form-control" name="email"  placeholder="Email Address">
                                                    <span class="help-block">Enter Customer's Email Id.</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-3 label-on-left">Age</label>
                                            <div class="col-sm-4">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <input type="number" class="form-control" name="age"  placeholder="Age in Years">
                                                    <span class="help-block">Enter Customer's Age is Years.</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-3 label-on-left">Gender</label>
                                            <div class="col-sm-9 checkbox-radios">
                                               
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="gender" checked="true" value="male"> Male
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="gender" value="female"> Female
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="gender" value="other"> Other
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-3 label-on-left">Weight</label>
                                            <div class="col-sm-4">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <input type="number" class="form-control" name="weight" placeholder="Weight in Kgs">
                                                    <span class="help-block">Enter Customer's Weight is Kgs.</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-3 label-on-left">Height</label>
                                            <div class="col-sm-4">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <input type="number" class="form-control" name="height" placeholder="Weight in Kgs">
                                                    <span class="help-block">Enter Customer's Height is Cms.</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-3 label-on-left">Address</label>
                                            <div class="col-sm-9">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <input type="text" class="form-control" name="address" placeholder="Address">
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
                                                        <input type="radio" name="mealpack" value="4" id="fourp" onclick="javascript:fourpack();"> 4-Four
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
                                            <label class="col-sm-3 label-on-left">Meal 1 Nutrient Intake</label>
                                            <div class="col-sm-2">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <input type="number" name="r11" class="form-control" placeholder="Calories">
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <input type="number" name="r12" class="form-control" placeholder="Carbohydrates">
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <input type="number" name="r13" class="form-control" placeholder="Proteins">
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <input type="number" name="r14" class="form-control" placeholder="Fats">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-3 label-on-left">Meal 2 Nutrient Intake</label>
                                            <div class="col-sm-2">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <input type="number" name="r21" class="form-control" placeholder="Calories">
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <input type="number" name="r22" class="form-control" placeholder="Carbohydrates">
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <input type="number" name="r23" class="form-control" placeholder="Proteins">
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <input type="number" name="r24" class="form-control" placeholder="Fats">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-3 label-on-left">Meal 3 Nutrient Intake</label>
                                            <div class="col-sm-2">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <input type="number" name="r31" class="form-control" placeholder="Calories">
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <input type="number" name="r32" class="form-control" placeholder="Carbohydrates">
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <input type="number" name="r33"class="form-control" placeholder="Proteins">
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <input type="number" name="r34" class="form-control" placeholder="Fats">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-3 label-on-left">Meal 4 Nutrient Intake</label>
                                            <div class="col-sm-2">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <input type="number" name="r41" class="form-control" placeholder="Calories">
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <input type="number" name="r42" class="form-control" placeholder="Carbohydrates">
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <input type="number" name="r43" class="form-control" placeholder="Proteins">
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <input type="number" name="r44" class="form-control" placeholder="Fats">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-3 label-on-left">Meal 5 Nutrient Intake</label>
                                            <div class="col-sm-2">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <input type="number" name="r51" class="form-control" placeholder="Calories">
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <input type="number" name="r52" class="form-control" placeholder="Carbohydrates">
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <input type="number" name="r53" class="form-control" placeholder="Proteins">
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <input type="number" name="r54" class="form-control" placeholder="Fats">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-3 label-on-left">Meal 6 Nutrient Intake</label>
                                            <div class="col-sm-2">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <input type="number" name="r61" class="form-control" placeholder="Calories">
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <input type="number" name="r62" class="form-control" placeholder="Carbohydrates">
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <input type="number" name="r63" class="form-control" placeholder="Proteins">
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <input type="number" name="r64" class="form-control" placeholder="Fats">
                                                </div>
                                            </div>
                                        </div>
                                        </div>

                                        <div id="fpack">
                                                   <div class="row">
                                            <label class="col-sm-3 label-on-left">Meal 1 Nutrient Intake</label>
                                            <div class="col-sm-2">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <input type="number" name="r11" class="form-control" placeholder="Calories">
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <input type="number" name="r12" class="form-control" placeholder="Carbohydrates">
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <input type="number" name="r13" class="form-control" placeholder="Proteins">
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <input type="number" name="r14" class="form-control" placeholder="Fats">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-3 label-on-left">Meal 2 Nutrient Intake</label>
                                            <div class="col-sm-2">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <input type="number" name="r21" class="form-control" placeholder="Calories">
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <input type="number" name="r22" class="form-control" placeholder="Carbohydrates">
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <input type="number" name="r23" class="form-control" placeholder="Proteins">
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <input type="number" name="r24" class="form-control" placeholder="Fats">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-3 label-on-left">Meal 3 Nutrient Intake</label>
                                            <div class="col-sm-2">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <input type="number" name="r31" class="form-control" placeholder="Calories">
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <input type="number" name="r32" class="form-control" placeholder="Carbohydrates">
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <input type="number" name="r33"class="form-control" placeholder="Proteins">
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <input type="number" name="r34" class="form-control" placeholder="Fats">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-3 label-on-left">Meal 4 Nutrient Intake</label>
                                            <div class="col-sm-2">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <input type="number" name="r41" class="form-control" placeholder="Calories">
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <input type="number" name="r42" class="form-control" placeholder="Carbohydrates">
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <input type="number" name="r43" class="form-control" placeholder="Proteins">
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <input type="number" name="r44" class="form-control" placeholder="Fats">
                                                </div>
                                            </div>
                                        </div>
                                        </div>

                                        <div class="row">
                                            <label class="col-sm-3 label-on-left">Allergies</label>
                                            <div class="col-sm-9">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <input type="text" class="form-control" name="allergies" placeholder="Allergies(If Any)">
                                                    <span class="help-block">Specify Customer's allergies if any.</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-3 label-on-left">Remarks</label>
                                            <div class="col-sm-9">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <input type="text" class="form-control" name="remark" placeholder="Remarks(If Any)">
                                                    <span class="help-block">Specify Customer's Remarks/Requests if any.</span>
                                                </div>
                                            </div>
                                        </div>
                                       
                                    </div>
                                    <div class="row">
                                            <div class="col-sm-12">
                                                <center>
                                                    <div class="form-group label-floating is-empty">
                                                        <button class="btn btn-primary btn-round" id="save">Save Details<div class="ripple-container"></div></button>
                                                    </div>
                                                </center>
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

<script src="js/customer.js"></script>
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



</html>