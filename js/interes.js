$(document).ready(function(){
  
$("#div_oculta").hide();

        $("#Calcular").click(function(){
                      
            var Capital = $("#Capital").val();
            var T_interes = $("#T_interes").val();
            var Periodo = $("#Periodo").val();

             var opcioncapitalizable = $("#opcioncapitalizable").val();
                var opcionperiodo = $("#opcionperiodo").val();
                 var opcioninteres = $("#opcionInteres").val();

            if( $('#Capitalizable').prop('checked') ) {
           
                if(opcioncapitalizable == "01"){
                  if(opcionperiodo == "01"){
                      T_interes = (T_interes / 12);
                      Periodo = Periodo
                    }else if(opcionperiodo == "02"){
                      T_interes = (T_interes / 12);
                      Periodo = Periodo * 12;
                    }
                    
                } else if(opcioncapitalizable == "02"){
                  if(opcionperiodo == "01"){
                      T_interes = (T_interes / 6);
                      Periodo = Periodo / 2
                    }else if(opcionperiodo == "02"){
                      T_interes = (T_interes / 6);
                      Periodo = Periodo * 6;
                    }

                }else if(opcioncapitalizable == "03"){

                    if(opcionperiodo == "01"){
                      T_interes = (T_interes / 4);
                      Periodo = (Periodo / 3);
                    }else if(opcionperiodo == "02"){
                      T_interes = (T_interes / 4);
                      Periodo = Periodo * 4;
                    }
                } else if(opcioncapitalizable == "04"){
                    if(opcionperiodo == "01"){
                      T_interes = (T_interes / 2);
                      Periodo = (Periodo / 6);
                    }else if(opcionperiodo == "02"){
                      T_interes = (T_interes / 2);
                      Periodo = Periodo * 2;
                    }
                }

            }else{
                  if(opcioninteres=="01"){
                    if(opcionperiodo == "01"){
                      T_interes = T_interes;
                      Periodo = Periodo;
                    }else if(opcionperiodo == "02"){
                      T_interes = T_interes;
                      Periodo = Periodo * 12 ;
                    }
                  }else if (opcioninteres=="02"){
                    if(opcionperiodo == "01"){
                      T_interes = T_interes;
                      Periodo = Periodo / 2;
                    }else if(opcionperiodo == "02"){
                      T_interes = T_interes;
                      Periodo = Periodo * 6 ;
                    }
                  }else if (opcioninteres=="03"){
                    if(opcionperiodo == "01"){
                      T_interes = T_interes;
                      Periodo = Periodo / 3;
                    }else if(opcionperiodo == "02"){
                      T_interes = T_interes;
                      Periodo = Periodo * 4 ;
                    }
                  }else if (opcioninteres=="04"){
                    if(opcionperiodo == "01"){
                      T_interes = T_interes;
                      Periodo = Periodo / 6;
                    }else if(opcionperiodo == "02"){
                      T_interes = T_interes;
                      Periodo = Periodo * 2 ;
                    }
                  }else if (opcioninteres=="05"){
                    if(opcionperiodo == "01"){
                      T_interes = T_interes;
                      Periodo = Periodo / 12;
                    }else if(opcionperiodo == "02"){
                      T_interes = T_interes;
                      Periodo = Periodo;
                    }
                  }
                  

            }

              dataParam="Capital="+Capital+"&T_interes="+T_interes+"&Periodo="+Periodo;
             
               $.ajax({
                     url:'Interes.php',
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