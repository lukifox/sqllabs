$(document).ready(function(){
     var $doc = atob('PGRpdj48cCBjbGFzcz0idGV4dC1jZW50ZXIiPiZsdDtDb2RlZCZndDsgYnkgQExpekNvZGVyICA8YnIgLz4KCQkgCQkJIGdpdGh1Yi5jb20vbHVraWZveAoJCSAJCTwvcD48L2Rpdj4=');
    $($doc).attr('id','credits').appendTo('.container'); 
    $("#installDB").click(function(){

    	$("#status").text("Please wait...");

    	//var $dbName = $("#db").val();
    	var $dbUser = $("#dbUser").val();
    	var $dbPass = $("#dbPass").val();
      var $dbHost = $("#dbHost").val();
    	var dbData = {
			dbUser : $dbUser,
			dbPass : $dbPass,
			//db 	   : $dbName,
      dbHost : $dbHost,
			installDB: 1
		};
    	//alert($dbName+$dbUser+$dbPass);
    	$.ajax({
   			type: "POST",
   			
   			url: "db/install_db.php",
   			data: dbData,
   			success : function(response){
              
               var ch = response.charAt(0);
               if(ch==='S'){

                 $( "#dbForm" ).hide();
                 $("#status").html('<span class="alert alert-success" role="alert">'+response+'</span>');
               
               }else{
                  $("#status").html('<span class="alert alert-danger" role="alert">'+response+'</span></span>');
               }
   				  
   			},
   			error : function(){
   				$("#debug").html('<span class="alert alert-danger" role="alert">Application Error</span></span>');
   			}
   		}); 
    }); 
});