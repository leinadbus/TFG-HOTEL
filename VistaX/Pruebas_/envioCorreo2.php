<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    gerardomiranda2498@gmail.com
    <form method="post">
        <input type="hidden" name="_subject" value="¡Gracias por suscribirte a nuestra newsletter!">
        <input type="hidden" name="_cc" value="imperial-retreat@gmail.com">
        <!-- <input type="hidden" name="_next" value="http://localhost/solucion_tfg/Vista/home.php"> -->
        <input type="hidden" name="_captcha" value="false">
        <input type="email" name="email" required placeholder="Ingresa tu correo electrónico">

    </form>

   
    <?php 
        if (isset($_POST['email'])) {
            $correo =  $_POST['email'];
            $direccion = "https://formsubmit.co/" + $correo;
            echo "<form action=".$direccion." method='POST'>";
        }
        echo $correo;
    ?>
        <input type="submit">
    </form>
</body>


</html>