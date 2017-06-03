$(document).ready(function(){
$("#opcionperiododia").hide();

$( "#opcionperiodo" ).change(function() {
  var opcionperiodo = $("#opcionperiodo").val();
   if(opcionperiodo == "01"){
                      $("#opcionperiododia").show();
                     }else{
                        $("#opcionperiododia").hide();
                     }
                     
});

        $("#Calcular").click(function(){
                      
            var Capital = $("#Capital").val();
            var Interes = $("#Interes").val();
            var Periodo = $("#Periodo").val();

            //  var opcioncapitalizable = $("#opcioncapitalizable").val();
                 var opcionperiodo = $("#opcionperiodo").val();
                 var opcionperiododia = $("#opcionperiododia").val();
            //      var opcioninteres = $("#opcionInteres").val();

            if(opcionperiodo == "01"){
                if(opcionperiododia =="01"){
                    Periodo =(Periodo / 365);
                }else if (opcionperiododia =="02"){
                    Periodo =(Periodo / 360);
                }
                       
            }else if(opcionperiodo == "02"){
                      Periodo =(Periodo / 12);
            }else if(opcionperiodo == "03"){
                       Periodo = Periodo;
            }

            // if( $('#Capitalizable').prop('checked') ) {
           
            //     if(opcioncapitalizable == "01"){
            //       if(opcionperiodo == "01"){
            //           T_interes = (T_interes / 12);
            //           Periodo = Periodo
            //         }else if(opcionperiodo == "02"){
            //           T_interes = (T_interes / 12);
            //           Periodo = Periodo * 12;
            //         }
                    
            //     } else if(opcioncapitalizable == "02"){
            //       if(opcionperiodo == "01"){
            //           T_interes = (T_interes / 6);
            //           Periodo = Periodo / 2
            //         }else if(opcionperiodo == "02"){
            //           T_interes = (T_interes / 6);
            //           Periodo = Periodo * 6;
            //         }

            //     }else if(opcioncapitalizable == "03"){

            //         if(opcionperiodo == "01"){
            //           T_interes = (T_interes / 4);
            //           Periodo = (Periodo / 3);
            //         }else if(opcionperiodo == "02"){
            //           T_interes = (T_interes / 4);
            //           Periodo = Periodo * 4;
            //         }
            //     } else if(opcioncapitalizable == "04"){
            //         if(opcionperiodo == "01"){
            //           T_interes = (T_interes / 2);
            //           Periodo = (Periodo / 6);
            //         }else if(opcionperiodo == "02"){
            //           T_interes = (T_interes / 2);
            //           Periodo = Periodo * 2;
            //         }
            //     }

            // }else{
            //       if(opcioninteres=="01"){
            //         if(opcionperiodo == "01"){
            //           T_interes = T_interes;
            //           Periodo = Periodo;
            //         }else if(opcionperiodo == "02"){
            //           T_interes = T_interes;
            //           Periodo = Periodo * 12 ;
            //         }
            //       }else if (opcioninteres=="02"){
            //         if(opcionperiodo == "01"){
            //           T_interes = T_interes;
            //           Periodo = Periodo / 2;
            //         }else if(opcionperiodo == "02"){
            //           T_interes = T_interes;
            //           Periodo = Periodo * 6 ;
            //         }
            //       }else if (opcioninteres=="03"){
            //         if(opcionperiodo == "01"){
            //           T_interes = T_interes;
            //           Periodo = Periodo / 3;
            //         }else if(opcionperiodo == "02"){
            //           T_interes = T_interes;
            //           Periodo = Periodo * 4 ;
            //         }
            //       }else if (opcioninteres=="04"){
            //         if(opcionperiodo == "01"){
            //           T_interes = T_interes;
            //           Periodo = Periodo / 6;
            //         }else if(opcionperiodo == "02"){
            //           T_interes = T_interes;
            //           Periodo = Periodo * 2 ;
            //         }
            //       }else if (opcioninteres=="05"){
            //         if(opcionperiodo == "01"){
            //           T_interes = T_interes;
            //           Periodo = Periodo / 12;
            //         }else if(opcionperiodo == "02"){
            //           T_interes = T_interes;
            //           Periodo = Periodo;
            //         }
            //       }
                  

            // }

              dataParam="Capital="+Capital+"&Interes="+Interes+"&Periodo="+Periodo;
               $.ajax({
                     url:'T_interes_Interes.php',
                     data: dataParam,
                     type: 'POST',
                     success: function(response){          
                                           $("#Resultado").html(response);     
                               }
               });
        });
});


// function select_cap(){

//   if( $('#Capitalizable').prop('checked') ) {
//     $('#opcionInteres > option[value="05"]').attr('selected', 'selected');

//     $("#div_oculta").show();
//     }else{
//        $("#div_oculta").hide();
//     }

  
 

// }