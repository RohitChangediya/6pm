<!doctype html>
<html lang="en">


<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.html" />
    <link rel="icon" type="image/png" href="assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>6 Pack Meal | Add Dish</title>
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
                        <a class="navbar-brand" href="#">6 Pack Meal | Add Dish </a>
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
							
                                <form method="POST" id="form" class="form-horizontal">
                                    <div class="card-header card-header-text">
                                        <h4 class="card-title">Add New Dish</h4>
                                    </div>
                                    <div class="card-content">
									<div class="row" id="reply">
									
									</div>
                                        <div class="row">
                                            <label class="col-sm-2 label-on-left">Dish Name</label>
                                            <div class="col-sm-10">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <input type="text" class="form-control" name="dishname" placeholder="Dish Name">
                                                    <span class="help-block">Enter the name of dish.</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2 label-on-left">Dish Code</label>
                                            <div class="col-sm-10">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <input type="text" class="form-control" name="dishcode" placeholder="Dish Code">
                                                    <span class="help-block">Enter the unique code of dish.</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2 label-on-left">Ingredients</label>
                                            <div class="col-sm-10">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <input type="text" value="" name="ingredient" class="tagsinput form-control" data-role="tagsinput"/>
                                                    <span class="help-block">Enter the all the ingredients used in this dish and click Enter.</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2 label-on-left">Type</label>
                                            <div class="col-sm-10 checkbox-radios">
                                               <div class="radio">
                                                    <label>
                                                        <input type="radio" name="type" value="veg"> Veg
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
                                            <label class="col-sm-2 label-on-left">Cuisine</label>
                                            <div class="col-sm-3 select">
                                            <select class="form-control" name="cuisine">
                                                                <option>Select an Option</option>
                                                                <option value="italian">Italian</option>
                                                                <option value="indian">Indian</option>
                                                                <option value="mexican">Mexican</option>
                                                                <option value="thai">Thai</option>
                                                                <option value="greek">Greek</option>
                                                                <option value="chinese">Chinese</option>
                                                                <option value="lebanese">Lebanese</option>
                                                                <option value="spanish">Spanish</option>
                                                                <option value="turkish">Turkish</option>
                                                                <option value="french">French</option>
                                                            </select>
                                                    </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2 label-on-left">Categories</label>
                                            <div class="col-sm-10 checkbox-radios">
                                               
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="optionsCheckboxes[]" value="Pre_Breakfast"> Pre-Breakfast
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="optionsCheckboxes[]" value="Breakfast"> Breakfast
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="optionsCheckboxes[]" value="Lunch"> Lunch
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="optionsCheckboxes[]" value="Snacks"> Snacks
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="optionsCheckboxes[]" value="Pre_Workout"> Pre-Workout
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="optionsCheckboxes[]" value="Dinner"> Dinner
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2 label-on-left">Calories /100gm</label>
                                            <div class="col-sm-3">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <input type="text" class="form-control" name="calories" placeholder="Calories">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2 label-on-left">Proteins /100gm</label>
                                            <div class="col-sm-3">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <input type="text" class="form-control" name="proteins" placeholder="Proteins">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2 label-on-left">Carbohydrates /100gm</label>
                                            <div class="col-sm-3">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <input type="text" class="form-control" name="carbohyd" placeholder="Carbohydrates">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2 label-on-left">Fats /100gm</label>
                                            <div class="col-sm-3">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <input type="text" class="form-control" name="fats" placeholder="Fats">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <label class="col-sm-2 label-on-left">New Ingredient (If Any)</label>

                                            <div class="col-sm-10">
                                            <div class="col-sm-5">
                                                <div class="form-group label-floating">
                                                    <label class="control-label"></label>
                                                    <input type="text" class="form-control" placeholder="Ingredient Name">
                                                </div>
                                                
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label"></label>
                                                    <input type="text" class="form-control" placeholder="Ingredient Code">
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group label-floating">
                                                <label class="control-label"></label>
                                                <a href="javascript:void(0);" class="add_button" style="color: #51b155; font-weight: 400; font-size: 16px; padding-top: 15%;">More Ingredient<div class="ripple-container"></div></a>
                                                </div>
                                            </div>
                                            </div>
                                        </div>

                                        <div class="field_wrapper">
                                            
                                        </div>

                                        <!--div class="row">
                                            <label class="col-sm-2 label-on-left">Updated By</label>
                                            <div class="col-sm-10">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <input type="text" class="form-control" placeholder="Your Name">
                                                    <span class="help-block">Enter the name of the person entering this data.</span>
                                                </div>
                                            </div>
                                        </div-->
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <center>
                                                    <div class="form-group label-floating is-empty">
                                                        <button class="btn btn-primary btn-round" id="save">Save Details<div class="ripple-container"></div></button>
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
<script src="js/typeahead.js"></script>

<script src="js/addDish.js"></script>
 <script type="text/javascript">
    /* Global JavaScript File for working with jQuery library */
        $(function(){
            // execute when the HTML file's (document object model: DOM) has loaded
   
            dish_crud.init();
			  
        });
	
	
	
    </script>
<script type="text/javascript">
$(document).ready(function(){
    var maxField = 10; //Input fields increment limitation
    var addButton = $('.add_button'); //Add button selector
    var wrapper = $('.field_wrapper'); //Input field wrapper
    
    var fieldHTML = '<div class="row dynamic'+x+'"><label class="col-sm-2 label-on-left"></label><div class="col-sm-10"><div class="col-sm-5"><div class="form-group label-floating"><label class="control-label"></label><input type="text" class="form-control" placeholder="Ingredient Name"></div></div><div class="col-sm-4"><div class="form-group label-floating"><label class="control-label"></label><input type="text" class="form-control" placeholder="Ingredient Code"></div></div><div class="col-sm-3"><div class="form-group label-floating"><label class="control-label"></label><a class="remove_button desktop" href="javascript:void(0);"><img src="assets/img/cross.svg" style="width:15%;"><div class="ripple-container"></div></a><a class="remove_button mobile" href="javascript:void(0);" style="color:red;">Remove<div class="ripple-container"></div></a></div></div></div></div>'; //New input field html 
    var x = 1; //Initial field counter is 1
    $(addButton).click(function(){ //Once add button is clicked
        if(x < maxField){ //Check maximum number of input fields
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); // Add field html
        }
    });
    $(wrapper).on('click', '.remove_button', function(e){ //Once remove button is clicked
        e.preventDefault();
        $(this).parent("div").parent("div").parent("div").remove(); //Remove field html
        x--; //Decrement field counter
    });
});
</script>



</html>