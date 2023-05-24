<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="mediaQuery.css">

</head>


<body>
    <section>
        <div class="container encabezado">
            <p>Bienvenidos a Imperial Retreat, hotel de lujo 5 Estrellas, donde su estancia es nuestra prioridad.
                Disfrute de nuestras instalaciones de primer nivel, incluyendo nuestro exclusivo spa y gimnasio.
                En nuestro spa podrá relajarse y rejuvenecerse en un ambiente de tranquilidad, con una amplia variedad de tratamientos
                disponibles para su disfrute. Por otro lado, nuestro gimnasio cuenta con la última tecnología en equipos para mantener
                su rutina de entrenamiento mientras viaja. Pero eso no es todo, en nuestro hotel también encontrará una gran variedad de
                opciones culinarias, desde nuestro elegante restaurante de alta cocina hasta nuestro bar de cócteles, perfecto para relajarse
                y disfrutar de una bebida después de un día ajetreado. Además, nuestras habitaciones de lujo están diseñadas para satisfacer
                las necesidades de los huéspedes más exigentes, con una decoración elegante y todas las comodidades modernas que necesita.
                ¡Esperamos darle la bienvenida pronto a nuestro hotel de lujo y hacer de su estadía una experiencia inolvidable!</p>
        </div>
    </section>
    <div class="container">
        <div class="contenedorFormulario">
            <h1>Contacto</h1>
            <p>Por favor, complete el siguiente formulario para ponerse en contacto con nosotros:</p>
            <div class="formularioContacto">
    
                <form method="post">
                    <label for="nombre">Nombre: *</label>
                    <input type="text" id="nombre" name="nombre" size="29" pattern="^[A-Za-záéíóúÁÉÍÓÚñÑ\s]{3,20}$" required>
                    <label for="email">Correo electrónico: *</label>
                    <input type="text" name="correoElectronico" id="email" size="29" required>
                    <span id="errorCorreo" class="error" style="color: red;"></span>
                    <label for="telefono">Teléfono: *</label>
                    <input type="tel" id="telefono" name="telefono" size="29" pattern="[6789]\d{8}$" required><br/>
                    <label for="asunto">Asunto:</label><br/>
                    <input type="text" id="asunto" name="asunto" size="29" required><br>
                    <label for="mensaje">Mensaje:</label><br/>
                    <textarea id="mensaje" name="mensaje" rows="8" cols="31" required></textarea><br/><br/>
                    <div class="botonEnvio">
                        <input type="submit" value="Enviar">
                    </div>
                    

                </form>
            </div>
        </div>


    </div>
</body>

<script>
        function validarFormulario() {
        let correo = document.getElementById("email").value;
        let regex = /^\w+([.-]?\w+)*@\w+([.-]?\w+)*(\.\w{2,3})+$/;

        if (!correo.match(regex)) {
            alert("Correo electrónico inválido");

            document.getElementById("errorCorreo").textContent = "Correo electrónico inválido";
            return false; // Evita enviar el formulario si el correo es inválido
        }

        // Si todo está válido, se envía el formulario
        return true;
    }
</script>

</html>