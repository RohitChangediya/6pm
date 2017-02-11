var customer_crud = function() {
		var register_fun = function() {
		
		
		$("#save").on('click', function(event) {
	      event.preventDefault(); 
	         var $formData = $('#form').serialize();
		  $formData+="&action=save";
	      console.log($formData);

		    var $request = $.ajax({
		                          url :'inc/maintain_customer.php',
		                          type: "POST",
		                          data: $formData,
								 // cache: false,
								//dataType: 'json',
								//processData: false, // Don't process the files
								//contentType: false, // Set content type to false as jQuery will tell the server its a query string request
		                        });
		        $request.done(function(data) {
		          //if success close modal and reload ajax table

                  if (data.status) {		             //console.log(data);
                      $('#reply').html('<div class="alert bg-success" role="alert">' + data.msg + '...<a href="#" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a></div>');
					   setTimeout(function() {
                  $('#reply').html('');
                   //window.location.assign('index.php');
                },2000);
                  } else {
                      $('#reply').html('<div class="alert bg-danger" role="alert">' + data.msg + '... <a href="#" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a></div>');
                   setTimeout(function() {
                  $('#reply').html('');
                    
                },2000);
				  }
              });
              $request.always(function(data) {
				  console.log(data);
					   //reDrawDataTable();
              // resetmem();
              });

	    });
		
	
		
	
	}
	return{
		init:function() {
			register_fun();
			
		} 
	}
	
	
	
}();