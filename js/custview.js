var customer_crud = function() {
	
	  

    //reload_table();
	
	  

	var register_fun = function() {
		
		$("#save").on('click', function(event) {
	      event.preventDefault(); 
	         var $formData = $('#form').serialize();
		  $formData+="&action=update";
	      console.log($formData);

		    var $request = $.ajax({
		                          url :'inc/maintain_customer.php',
		                          type: "POST",
		                          data: $formData,
								 // cache: false,
								dataType: 'json',
								//processData: false, // Don't process the files
								//contentType: false, // Set content type to false as jQuery will tell the server its a query string request
		                        });
		        $request.done(function(data) {
		          //if success close modal and reload ajax table

                  if (data.status) {		             //console.log(data);
                      $('#reply').html('<div class="alert bg-success" role="alert">' + data.msg + '...<a href="#" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a></div>');
					   setTimeout(function() {
                  $('#reply').html('');
				  $('#myModal').modal('hide');
				  reload_table();
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
					  
              });

	    });
		
		
		
	
	}
	return{
		init:function() {
			register_fun();
			
		} 
	}
	
	function reload_table()
	{
	
	
            data = {
                "action": "datatable"
                
                
            };
              console.log(data);
          
			$.ajax( {
                    url: 'inc/maintain_customer.php',
                    type: 'POST',
                     dataType: "JSON",
                    data: data
                } )
                .done( function( data ) {
                    if (data.status) {		             console.log(data);
                      $("#userbody").html(data.msg);
                  } else {                                   
               			   
				  }
                } )
                .always( function( $resp ) {
					// console.log( $resp );
                   
                } );
	}
	

	
	
	
}();