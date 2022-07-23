function loginuser(){
    
    email = document.getElementById('email').value
    pass = document.getElementById('password').value
    
    var parametros = {
        "email" : email,
        "pass" : pass
    }

    $.ajax({
        data: parametros,
        url: 'process_adm/login.php',
        type: 'POST',

        beforesend: function(){
            $('#mensajelogin').html('Espere un momento por favor')
        },

        success: function(resultado){

            if(resultado==1){
                setTimeout(()=>{
                    window.location.href="home.php"
                },1000)
            }else{
                $('#mensajelogin').html("Usuario o contraseña invalidos")
            }
        },
        
    })
}

function registeruser(){

    emailuser = document.getElementById('emailuser').value
    pass = document.getElementById('pass').value
    nameuser = document.getElementById('nameuser').value
    apeuser = document.getElementById('apeuser').value
    teluser = document.getElementById('teluser').value
    carduser = document.getElementById('carduser').value
    datecard = document.getElementById('datecarduser').value
    cvvcard = document.getElementById('cvvcarduser').value
    plans = document.getElementById('select-plans').value

    if(emailuser != "" || pass != "" || nameuser != "" || apeuser != ""){

        if(plans == 0){

            var parametros = {
                "emailuser" : emailuser,
                "pass" : pass,
                "nameuser" : nameuser,
                "apeuser" : apeuser,
                "teluser" : teluser,
                "plans" : plans
            }
        
            $.ajax({
                data: parametros,
                url: 'process_adm/register.php',
                type: 'POST',
        
                success: function(resultado){
                    if(resultado==1){

                        swal({
                            title: "Registrado!",
                            text: "Registro completado correctamente",
                            icon: "success",
                            button: "Aceptar",
                            timer: 2000
                          });

                        setTimeout(()=>{
                            window.location.href="login-page.php"
                        },2000)

                    }else{
                        alert(resultado)
                        swal({
                            title: "Error!",
                            text: "Ha ocurrido un error al registrar",
                            icon: "warning",
                            button: "Aceptar",
                            timer: 3000
                          });
                    }
                },
        
            })

        }else{

            if(carduser == "" || datecard == "" || cvvcard == ""){

                swal({
                    title: "Datos incompletos!",
                    text: "Por favor complete los datos de su tarjeta",
                    icon: "warning",
                    button: "Ok",
                    timer: 3000
                  });
            
            }else{
                var parametros = {
                    "emailuser" : emailuser,
                    "pass" : pass,
                    "nameuser" : nameuser,
                    "apeuser" : apeuser,
                    "teluser" : teluser,
                    "carduser" : carduser,
                    "datecard" : datecard,
                    "cvvcard" : cvvcard,
                    "plans" : plans
                }
            
                $.ajax({
                    data: parametros,
                    url: 'process_adm/register.php',
                    type: 'POST',
            
                    success: function(resultado){
                        if(resultado==1){

                            swal({
                                title: "Registrado!",
                                text: "Registro completado correctamente",
                                icon: "success",
                                button: "Aceptar",
                                timer: 2000
                              });

                            setTimeout(()=>{
                                window.location.href="login-page.php"
                            },2000)

                        }else{
                            swal({
                                title: "Error!",
                                text: "Ha ocurrido un error al registrar",
                                icon: "warning",
                                button: "Aceptar",
                                timer: 3000
                              });
                        }
                    },
            
                })

            }

        }
    
    }else{
        swal({
            title: "Datos incompletos!",
            text: "Por favor complete todos los campos requeridos (*)",
            icon: "warning",
            button: "Ok",
            timer: 3000
          });
    }
}

function activecard(){

    let selectplan = document.getElementById('select-plans').value

    if(selectplan == 0){
        document.getElementById('carduser').disabled = true
        document.getElementById('datecarduser').disabled = true
        document.getElementById('cvvcarduser').disabled = true
    }else{
        document.getElementById('carduser').disabled = false
        document.getElementById('datecarduser').disabled = false
        document.getElementById('cvvcarduser').disabled = false
    }
}