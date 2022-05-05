<?php
$pg = "contacto";
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Confirmacion de Envio</title>
</head>

<body id="contacto">
    <?php include_once("header.php"); ?>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center py-5">
                <h1>Gracias!</h1>
            </div>
            <div class="row">
                <div class="col-12">
                    <p>Sera respondido a la brevedad!</p>
                </div>

            </div>
        </div>
    </main>
    <?php include_once("footer.php"); ?>
    <div class="whatsapp pt-3 pb-4 px-3">
        <a href="https://api.WhatsApp.com/send?phone=03512061608">
            <i class="fa-brands fa-whatsapp"></i></a>
    </div>
</body>

</html>