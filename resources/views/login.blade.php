
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <style>

            /* sign in FORM */
            html,body{
                 background-image: url("/storage/background.png");
            }
            .titulos {
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
            }

            #logreg-forms{
                width:412px;
                margin:10vh auto;
                background-color:#f3f3f3;
                box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
                transition: all 0.3s cubic-bezier(.25,.8,.25,1);
            }
            #logreg-forms form {
                width: 100%;
                max-width: 410px;
                padding: 15px;
                margin: auto;
            }
            #logreg-forms .form-control {
                position: relative;
                box-sizing: border-box;
                height: auto;
                padding: 10px;
                font-size: 16px;
            }
            #logreg-forms .form-control:focus { z-index: 2; }
            #logreg-forms .form-signin input[type="email"] {
                margin-bottom: -1px;
                border-bottom-right-radius: 0;
                border-bottom-left-radius: 0;
            }
            #logreg-forms .form-signin input[type="password"] {
                border-top-left-radius: 0;
                border-top-right-radius: 0;
            }

            #logreg-forms .social-login{
                width:390px;
                margin:0 auto;
                margin-bottom: 14px;
            }
            #logreg-forms .social-btn{
                font-weight: 100;
                color:white;
                width:190px;
                font-size: 0.9rem;
            }

            #logreg-forms a{
                display: block;
                padding-top:10px;
                color:lightseagreen;
            }

            #logreg-form .lines{
                width:200px;
                border:1px solid red;
            }


            #logreg-forms button[type="submit"]{ margin-top:10px; }

            #logreg-forms .facebook-btn{  background-color:#3C589C; }

            #logreg-forms .google-btn{ background-color: #DF4B3B; }

            #logreg-forms .form-reset, #logreg-forms .form-signup{ display: none; }

            #logreg-forms .form-signup .social-btn{ width:210px; }

            #logreg-forms .form-signup input { margin-bottom: 2px;}

            .form-signup .social-login{
                width:210px !important;
                margin: 0 auto;
            }

            /* Mobile */

            @media screen and (max-width:500px){
                #logreg-forms{
                    width:300px;
                }

                #logreg-forms  .social-login{
                    width:200px;
                    margin:0 auto;
                    margin-bottom: 10px;
                }
                #logreg-forms  .social-btn{
                    font-size: 1.3rem;
                    font-weight: 100;
                    color:white;
                    width:200px;
                    height: 56px;

                }


            }
        </style>
        <title>asoGES</title>
    </head>
    <body>

        <script>
            function toggleResetPswd(e) {
                e.preventDefault();
                $('#logreg-forms .form-signin').toggle() // display:block or none
                $('#logreg-forms .form-reset').toggle() // display:block or none
            }

            function toggleSignUp(e) {
                e.preventDefault();
                $('#logreg-forms .form-signin').toggle(); // display:block or none
                $('#logreg-forms .form-signup').toggle(); // display:block or none
            }

            $(() => {
                // Login Register Form
                $('#logreg-forms #forgot_pswd').click(toggleResetPswd);
                $('#logreg-forms #cancel_reset').click(toggleResetPswd);
                $('#logreg-forms #btn-signup').click(toggleSignUp);
                $('#logreg-forms #cancel_signup').click(toggleSignUp);
            })
        </script>
        <div id="logreg-forms">
            <form class="form-signin" action="http://nubezar.corp:8000/_login" method="get">
                <h1 class="h3 mb-3 font-weight-normal" style="text-align: center"> INICIAR SESIÓN</h1>
                <p style="text-align:center"> Use sus credenciales para iniciar sesión.  </p>
                <table>
                    <tr>
                        <td>
                            <label for="txtUser"><b>Usuario:</label></b>
                        </td>
                        <td><input type="text" id="txtUser" class="form-control" placeholder="Usuario" required="" autofocus="" name="txtuser"></td>
                    </tr>
                    <tr><td> </td><td> </td></tr><tr><td> </td><td> </td></tr><tr><td> </td><td> </td></tr>
                    <tr>
                        <td>
                            <label for="txtPassword"><b>Contraseña:</b></label>
                        </td>
                        <td>
                            <input type="password" id="txtPassword" class="form-control" placeholder="Contraseña" required="" name="txtpassword">
                        </td>
                    </tr>
                </table>
                <button class="btn btn-success btn-block" type="submit"><i class="fas fa-sign-in-alt"></i> Iniciar sesión</button>
                <a href="#" id="forgot_pswd">¿Has olvidado tu contraseña??</a>
                <hr>
                <!-- <p>Don't have an account!</p>  -->
                <button class="btn btn-primary btn-block" type="button" id="btn-signup"><i class="fas fa-user-plus"></i> ¿No estás registrado? Solicita tu cuenta.</button>
                <a href="http://nubezar.corp:8000/" id="volver_asoges"><i class="fas fa-angle-left"></i> Volver a Inicio - asoGES</a>
                @if(isset($redirect))
                <input type="hidden" value="{{$redirect}}" name="redirect">
                @endif
            </form>

            <form action="resetpassword" class="form-reset" method="get">
                <p style="text-align:center"> Si ha olvidado su contraseña puede restablecerla mediante el siguiente formulario.  </p>
                <p style="text-align:center"> Podrá configurar su nueva contraseña mediante el enlace .  </p>
                <input type="email" name="txtemail" id="resetEmail" class="form-control" placeholder="Correo electrónico" required="" autofocus="">
                <button class="btn btn-primary btn-block" type="submit">Restablecer contraseña.</button>
                <a href="#" id="cancel_reset"><i class="fas fa-angle-left"></i> Volver</a>
            </form>

            <form action="/signup/" class="form-signup">
                <div class="social-login">
                    <button class="btn facebook-btn social-btn" type="button"><span><i class="fab fa-facebook-f"></i> Registrarse con Facebook</span> </button>
                </div>
                <div class="social-login">
                    <button class="btn google-btn social-btn" type="button"><span><i class="fab fa-google-plus-g"></i> Registrarse con Google</span> </button>
                </div>

                <p style="text-align:center">O INTRODUCE TUS DATOS</p>
                <p style="text-align:center"> El registro será revisado por el Órgano Gestor correspondiente, y le comunicaremos su rrsolución al correo electrónico indicado.  </p>
                <input type="text" id="user-name" class="form-control" placeholder="Nombre" required="" autofocus="">
                <input type="text" id="user-name" class="form-control" placeholder="Apellidos" required="" autofocus="">
                <input type="text" id="user-name" class="form-control" placeholder="Nº de socio" required="" autofocus="">

                <input type="email" id="user-email" class="form-control" placeholder="Correo electrónico" required autofocus="">
                <input type="email" id="user-email" class="form-control" placeholder="Usuario" required autofocus="">
                <input type="password" id="user-pass" class="form-control" placeholder="Contraseña" required autofocus="">
                <input type="password" id="user-repeatpass" class="form-control" placeholder="Repite la contraseña" required autofocus="">

                <button class="btn btn-primary btn-block" type="submit"><i class="fas fa-user-plus"></i> Solicitar registro</button>
                <a href="#" id="cancel_signup"><i class="fas fa-angle-left"></i> Volver</a>
            </form>
            <br>

        </div>
        <p style="text-align:center">
            <a href="function toggleResetPswd(e){
               e.preventDefault();
               $('#logreg-forms .form-signin').toggle() // display:block or none
               $('#logreg-forms .form-reset').toggle() // display:block or none
               }

               function toggleSignUp(e){
               e.preventDefault();
               $('#logreg-forms .form-signin').toggle(); // display:block or none
               $('#logreg-forms .form-signup').toggle(); // display:block or none
               }

               $(()=>{
               // Login Register Form
               $('#logreg-forms #forgot_pswd').click(toggleResetPswd);
               $('#logreg-forms #cancel_reset').click(toggleResetPswd);
               $('#logreg-forms #btn-signup').click(toggleSignUp);
               $('#logreg-forms #cancel_signup').click(toggleSignUp);
               })g" target="_blank" style="color:black">Soluciones Informáticas NUBEZAR</a>
        </p>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="/script.js"></script>
    </body>
</html>