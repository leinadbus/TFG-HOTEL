<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Nuevo Usuario</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="fondoLoginRegistro.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</head>
<style>
    .input {
        background-color: rgba(0, 0, 0, 0.1);

    }
</style>


<body>
    <?php
    include "../Controlador/controlador_sesion.php";
    ?>
    <div class="contenedorFormulario">
        <h1>Nuevo Usuario</h1>
        <div class="formularioRegistro">
            <form onsubmit="return validarFormulario()" method="post">
                <fieldset>
                    <legend>Registro</legend>
                    <label for="nombre">Nombre: <span style="color: red; font-size: 20px;">*</span></label>
                    <input type="text" class="input" name="nombrePropio" id="nombre" pattern="^[A-Za-záéíóúÁÉÍÓÚñÑ\s]{3,20}$" size="30" required>

                    <label for="apellido1">Primer apellido:<span style="color: red; font-size: 20px;">*</span></label>
                    <input type="text" class="input" name="primerApellido" id="apellido1" pattern="^[A-Za-záéíóúÁÉÍÓÚñÑ\s]{3,20}$" size="30" required>

                    <label for="apellido2">Segundo apellido: <span style="color: red; font-size: 20px;">*</span></label>
                    <input type="text" class="input" name="segundoApellido" id="apellido2" pattern="^[A-Za-záéíóúÁÉÍÓÚñÑ\s]{3,20}$" size="30">

                    <label for="celular">Teléfono de contacto: <span style="color: red; font-size: 20px;">*</span></label require>
                    <input type="tel" class="input" name="telefono" id="celular" pattern="[6789]\d{8}$" size="30" required>
                    <br/>
                    <p style="text-align: justify">Número de telefono de 9 digitos con un formato valido</p>

                    <label for="mail">Correo electrónico: <span style="color: red; font-size: 20px;">*</span></label>
                    <input type="text" class="input" name="correoElectronico" id="mail" size="30" required>
                    <span id="errorCorreo" class="error" style="color: red;"></span>

                    <label for="mail">Confirma el correo electrónico: <span style="color: red; font-size: 20px;">*</span></label>
                    <input type="text" class="input" name="correoElectronico2" id="mail2" size="30" required>
                    <span id="correoDiferente" class="error" style="color: red;"></span>


                    <!-- pattern="/^\w+([.-]?\w+)*@\w+([.-]?\w+)*(\.\w{2,3})+$/" -->

                    <!-- <label for="user">Nombre de usuario: *</label>
                <input type="text" name="nombreUsuario" id="nombreUsuario" pattern="^[A-Za-záéíóúÁÉÍÓÚñÑ0-9\s]{3,20}$" required>  -->
                    <br />
                    <label for="pass">Contraseña: <span style="color: red; font-size: 20px;">*</span></label>
                    <input type="password" class="input" id="password" name="contraseñaUsuario" required size="30" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*()_+\-=[\]{};':\\|,./?]).{8,20}">
                    <br />
                    <p style="text-align: justify">Al menos una mayuscula, al menos una minuscula, entre 8 y 20 caracteres e incluir al menos un caracter especial</p>
                    <br>
                    <div id="fuerza" value=""></div>
                    <div style="display: flex; justify-content: center;">
                        <input type="submit" name="btnNuevoUsuario" id="" value="Iniciar Sesion">
                    </div>

                    <p><?php echo $msg ?? '' ?></p>
                </fieldset>
            </form>
        </div>

    </div>

    <!-- <script type="text/javascript" async src="https://tenor.com/embed.js"></script> -->



</body>
<script type="text/javascript" src="fuerzaContraseña.js"></script>
<script>
    function validarFormulario() {
        let nombre = document.getElementById("nombre").value;
        let apellido = document.getElementById("apellido1").value;
        let correo = document.getElementById("mail").value;
        let regex = /^\w+([.-]?\w+)*@\w+([.-]?\w+)*(\.\w{2,3})+$/;

        if (!correo.match(regex)) {
            alert("Correo electrónico inválido");

            document.getElementById("errorCorreo").textContent = "Correo electrónico inválido";
            return false; // Evita enviar el formulario si el correo es inválido
        }

        // Verificar si las direcciones de correo electrónico coinciden
        if (!comprobarEmailsIguales()) {
            return false; // Evita enviar el formulario si las direcciones no coinciden
        }

        // Si todo está válido, se envía el formulario
        return true;
    }

    function comprobarEmailsIguales() {
        var email1 = document.getElementById("mail").value;
        var email2 = document.getElementById("mail2").value;

        if (email1 === email2) {
            return true; // Las direcciones de correo electrónico coinciden
        } else {
            alert("Las direcciones de correo electrónico no coinciden. Por favor, inténtalo de nuevo.");
            document.getElementById("correoDiferente").textContent = "Los correos electrónicos introducidos no coinciden";
            return false; // Las direcciones de correo electrónico no coinciden
        }
    }
</script>

</html>