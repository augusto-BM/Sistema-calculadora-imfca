<?php
    @include '../../controlador/login/login.php'
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/login.css">

</head>
<body>
<!-- <a href="../administrador/principal.php">hola</a> -->
<div class="contenedor contenedor_login">
                        <div class="form-container">
                            <form action="" method="post" class="formulario" id="formulario">
                            <h3 class="titulo-Formulario">INICIAR SESION</h3>

                                <?php
                                    if(isset($error)){
                                        foreach($error as $error){
                                            echo '<span class="error-msg">'.$error.'</span>';
                                        };
                                    }
                                ?>
                            
                            <!-- Grupo: Correo Electronico -->
                                <div class="formulario__grupo 1" id="grupo__correo">
                                <div class="formulario__grupo-input">
                                    <input type="text" class="formulario__input" name="email" id="correo" placeholder=" " value="<?php if(isset($email)) echo $email?>">
                                    <label for="email" class="formulario__label">Correo Electrónico</label>
                                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                                    <i class="fas fa-user"></i>
                            <!--                      <i class="fa-regular fa-envelope fa-xl iconos"></i>
                            -->	</div>
                                        
                                <p class="formulario__input-error">El correo solo puede contener letras, numeros, puntos, guiones y guion bajo. <b><i>ejemplo@correo.com</i></b></p>
                                </div>
                                
                            <!-- Grupo: Contraseña -->
                                <div class="formulario__grupo 2" id="grupo__password">
                                    <div class="formulario__grupo-input">
                                    <input type="password" class="formulario__input" name="password" id="password" placeholder=" ">
                                    <label for="password" class="formulario__label">Contraseña</label>
                                    <i class="formulario__validacion-estado fas fa-times-circle circulo-error"></i>
                                    <i class="fas fa-unlock"></i>

                                    <!-- <i class="fa-regular fa-envelope fa-xl iconos"></i> -->
                                                        
                                    <p class="formulario__input-error">La contraseña tiene que ser de 3 a 12 dígitos.</p>
                                    </div>
                                    <div class="formulario__grupo formulario__grupo-btn-enviar">
                                    <button type="submit" class="formulario__btn" name="submit" id="enviar" >Ingresar</button>
                                    </div>
                                </div>
                            </form>
                        </div>      
                    </div>


                    <script src="../js/login.js"></script>

</body>
</html>