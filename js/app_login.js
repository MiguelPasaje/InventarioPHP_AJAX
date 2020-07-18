//alert('hola');
$(document).ready(function(){
    $('#ADDuser').hide();
    $('#LOGuser').hide();


    $('#LoginUser').click(()=>{
        $('#LOGuser').show();
        $('#ADDuser').hide();

        
    });

    $('#regUser').click(()=>{
        $('#ADDuser').show();
        $('#LOGuser').hide();
        
    });

    $('#emailUser').click(()=>{
        $("#msg_error").hide();

    });
    
    $('#pwdUser').click(()=>{
        $("#msg_error").hide();

    });

    $('#idEmailLogin').click(()=>{
        $("#msg_error").hide();

    });
    
    $('#idEmailpwd').click(()=>{
        $("#msg_error").hide();

    });

    $('#btn_addUser').click(()=>{
        let user = $('#emailUser').val();
        let pwd = $('#pwdUser').val();
        
        const postDate = {
            user : $('#emailUser').val(),
            pwd  : $('#pwdUser').val()
        };

        if (user && pwd) {

            if (postDate.pwd.length < 8) {
                $("#msg_error").text("la contraseña debe ser mayor de 8 caracteres").show();
                return false;
            }

            $.post('./config/userAdd.php',postDate,(response)=>{
                alert('datos');
                console.log(response);
                               
                
                if (response == 1) {
                    $("#msg_error").text("email ya existe").show();
                }


                $('#userForm').trigger('reset');
            
            });
            
        }

    });

    $('#btn_RegUser').click(()=>{
        let user = $('#idEmailLogin').val();
        //alert (user);
        let pwd = $('#idEmailpwd').val();
        
        const postDate = {
            user : $('#idEmailLogin').val(),
            pwd  : $('#idEmailpwd').val()
        };
        //alert(user);

        if (user && pwd) {       

            $.post('./config/userLogin.php',postDate,(response)=>{
                //alert("bienvenido");
                //console.log("Bienvenido");
                               
                
                if (response == 1) {
                    //$("#msg_error").text("email ya existe").show();
                    location.href = "./view/index.php";
                    //console.log(" asdf"+location.href);
                    console.log("sesion iniciada");
                }else{
                    $('#formLogin').trigger('reset');
                    $("#msg_error").text("incorrecto").show();
                    
                }

                
            
            });
            
        }

    });


    /*--------HOME----------*/
    $('#changepwd').hide();
    $('#changeuser').hide();
    $('#divPWD').hide();
    $('#divUSER').hide();



    $('#ajustes').click(()=>{
        $('#changepwd').toggle();
        $('#changeuser').toggle();
        
        
    });

    $('#changepwd').click(()=>{
        $('#divPWD').toggle();
        $('#divUSER').hide();        
    });

    $('#changeuser').click(()=>{
        $('#divUSER').toggle();
        $('#divPWD').hide();        
    });
    

    
});