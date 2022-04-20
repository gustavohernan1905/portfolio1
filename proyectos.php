<?php

$pg = "proyectos";

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyectos</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body id="proyectos">
    <?php include_once("header.php"); ?>
    <main class="container">
        <div class="row">
            <div class="col-12 pt-3 pb-5">
                <h1>Proyectos</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p>Los siguientes son algunos trabajos que he realizado</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-4 p-3">
                <div class="proyecto">
                    <img src="images/abmclientes.png" alt="ABM CLIENTES" class="img-fluid">
                    <h2 class="p-3 d-block">ABM CLIENTES</h2>
                    <p class="p-3 pb-3 d-block">Alta, baja y modificaci'on de un registro de clientes. Realizado n HTML,
                        CSS, PHP, Bootstrap y Json.</p>
                    <div class="row my-5">
                        <div class="col-6 p-4">
                            <a href="" target="_blank" class="btn btn-rojo">Ver Online</a>
                        </div>
                        <div class="col-6 text-center">
                            <a href="" target="_blank">Codigo Fuente</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-4 p-3">
                <div class="proyecto">
                    <img src="images/abmventas.png" alt="AMB" class="img-fluid">
                    <h2 class="p-3 d-block">SISTEMA DE GESTION DE VENTAS</h2>
                    <p class="p-3 pb-3 d-block">Alta, baja y modificaci'on de un registro de clientes. Realizado n HTML,
                        CSS, PHP, Bootstrap y Json.</p>
                    <div class="row my-5">
                        <div class="col-6 p-4">
                            <a href="" target="_blank" class="btn btn-rojo">Ver Online</a>
                        </div>
                        <div class="col-6 text-center">
                            <a href="" target="_blank">Codigo Fuente</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-4 p-3">
                <div class="proyecto">
                    <img src="images/proyecto-integrador.png" alt="ABM CLIENTES" class="img-fluid">
                    <h2 class="p-3 d-block">PROYECTO INTEGRADOR</h2>
                    <p class="p-3 pb-3 d-block">Proyecto Full Stack desarrollado en PHP, Laravel, Javascript, jQuery,
                        AJAX, HTML, CSS, Mercadopago con panel administrador, gestor de usuarios, módulo de permisos y
                        funcionalidades a fines.</p>
                    <div class="row my-5">
                        <div class="col-6 p-4">
                            <a href="" target="_blank" class="btn btn-rojo">Ver Online</a>
                        </div>
                        <div class="col-6 text-center">
                            <a href="" target="_blank">Codigo Fuente</a>
                        </div>
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