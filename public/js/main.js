$(document).ready(function(){
    $("#stateOfOrigin").change( function() {
       var id =$(this).val();
       //$("#lga").hide();
          $.getJSON("/getLGA/"+id, function(data, status){
           var $d = $("#lgaOfOrigin");
           
                    $d.empty();
                    $d.append('<option value="">Select </option>');
                  
                      
                       $.each(data, function(index, value) {
                    
                           $d.append('<option value="' +value.id +'">' + value.lga_name + '</option>');
                         
                       });
                      
                      
                      // $("#myModal").modal("hide");
           });
       
       
       });

       $("#currency").change( function() {
        var id =$(this).val();
        //$("#lga").hide();
           $.getJSON("/getDonationSetup/"+id, function(data, status){
            var $d = $("#amountRange");
            
                     $d.empty();
                     $d.append('<option value="">Select </option>');
                   
                       
                        $.each(data, function(index, value) {
                     
                            $d.append('<option value="' +value.id +'">' + value.minimum_amount +'</option>');
                          
                        });
                       
                       
                       // $("#myModal").modal("hide");
            });
        
        
        });
    });