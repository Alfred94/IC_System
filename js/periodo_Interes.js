$(document).ready(function(){
$("#div_oculta").hide();

        $("#Calcular").click(function(){
                      
            var Capital = $("#Capital").val();
            var T_interes = $("#T_interes").val();
            var Interes = $("#Interes").val();

             var opcioncapitalizable = $("#opcioncapitalizable").val();
                 var opcioninteres = $("#opcionInteres").val();

            if( $('#Capitalizable').prop('checked') ) {
           
                if(opcioncapitalizable == "01"){
                  T_interes = (T_interes / 12);
                    
                } else if(opcioncapitalizable == "02"){
                  T_interes = (T_interes / 6);
                }else if(opcioncapitalizable == "03"){
                   T_interes = (T_interes / 4);

                    
                } else if(opcioncapitalizable == "04"){
                    T_interes = (T_interes / 2);
                }

            }else{
                  if(opcioninteres=="01"){
                   T_interes = T_interes;
                  }else if (opcioninteres=="02"){
                    T_interes = T_interes;
                  }else if (opcioninteres=="03"){
                    T_interes = T_interes;
                  }else if (opcioninteres=="04"){
                    T_interes = T_interes;
                  }else if (opcioninteres=="05"){
                   T_interes = T_interes;
                  }
                  

            }

              dataParam="Capital="+Capital+"&Interes="+Interes+"&T_interes="+T_interes;
              alert(dataParam);
               $.ajax({
                     url:'Periodo_Interes.php',
                     data: dataParam,
                     type: 'POST',
                     success: function(response){          
                                           $("#Resultado").html(response);     
                               }
               });
        });
});


function select_cap(){

  if( $('#Capitalizable').prop('checked') ) {
    $('#opcionInteres > option[value="05"]').attr('selected', 'selected');

    $("#div_oculta").show();
    }else{
       $("#div_oculta").hide();
    }

  
 

}