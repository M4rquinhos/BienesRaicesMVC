
<?php 
    if (!isset($_SESSION)) {
        session_start();
    }

    $auth = $_SESSION['login'] ?? false;

    if(!isset($inicio)) {
        $inicio =  false;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienes Raíces</title>
    <link rel="stylesheet" href="../public/build/css/app.css">
</head>
<body>

    <header class="header <?php echo $inicio ? 'inicio' : ''; ?>">
        <div class="contenedor contenido-header">
            <div class="barra">
                <!-- href="/BienesRaices" -->
                <a href="/index.php">
                    <img src="../public/build/img/logo.svg" alt="logotipo de bienes raices" srcset="">
                </a>

                <div class="mobile-menu">
                    <img src="../public/build/img/barras.svg" alt="icono menu responsive" srcset="">
                </div>

                <div class="derecha">
                    <img src="../public/build/img/dark-mode.svg" alt="boton dark mode" class="dark-mode-boton">
                    <nav class="navegacion">
                        <a href="nosotros.php">Nosotros</a>
                        <a href="anuncios.php">Anuncios</a>
                        <a href="blog.php">Blog</a>
                        <a href="contacto.php">Contacto</a>
                        <?php if($auth): ?>
                            <a href="cerrar-sesion.php">Cerrar Sesion</a>
                        <?php endif; ?>
                    </nav>
                </div>

            </div> <!-- Cierre de barra -->

            <?php if($inicio) { ?>
                <h1>Venta de Casas y Departamentos Exclusivos de Lujo</h1>
            <?php } ?>
        </div>
    </header>

    <?php echo $contenido; ?>

    <footer class="footer seccion">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
                <a href="nosotros.php">Nosotros</a>
                <a href="anuncios.php">Anuncios</a>
                <a href="blog.php">Blog</a>
                <a href="contacto.php">Contacto</a>
            </nav>
        </div>

        <p class="copyright">Todos los derechos reservados <?=date('Y')?> &copy;</p>
    </footer>

    <script src="../public/build/js/bundle.min.js" ></script>
</body>
</html>  