<?php
            $action2 = "";
            if (isset($_POST['enviar2'])) {
                $correoDestino = $_POST['correoDestino'];
                $nombre = $_POST['nombre'];
                $correoCliente = $_POST['correoElectronico'];
                $telefono = $_POST['telefono'];
                $asunto = $_POST['asunto'];
                $mensaje = $_POST['mensaje'];

                
                // echo $correoDestino;
                $action2 = "https://formsubmit.co/" . $correoDestino;
            }
            

 if ($action2 !== ""){
       echo " <form action='$action2' method='POST' id='autoSubmitForm2' hidden>";
         echo "   <input type='text' name='nombre' value='$nombre' >   hidden";
         echo "   <input type='email' name='correoElectronico' value='$correoCliente' >   hidden";
         echo "   <input type='text' name='telefono' value='$telefono' >   hidden";
         echo "   <input type='text' name='asunto' value='$asunto' >   hidden";
         echo "   <input type='text' name='mensaje' value='$mensaje' >   hidden";
         echo "   <input type='text' name='_captcha' value='false' >   hidden";

        // echo "<input type='hidden' name='_next' value='http://localhost/tfg_final/master/Vista/'>";
        echo "<input type='hidden' name='_next' value='http://localhost/TFG-HOTEL/Vista/'>";
        
        echo"</form>";

        echo "<script>
            window.addEventListener('DOMContentLoaded', (event) => {
                document.getElementById('autoSubmitForm2').submit();
            });
           
        </script>";
        }

        
        ?>