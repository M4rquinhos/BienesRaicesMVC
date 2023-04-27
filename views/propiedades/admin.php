<main class="contenedor seccion">
        <h1>Administrador de Bienes Raices</h1>

        <?php if($resultado): ?>
            <?php $mensaje = mostrarNotificacion(intval($resultado)); 
            if($mensaje): ?>
            <p class="alerta exito"><?=s($mensaje);?></p>
            <?php endif;?>
        <?php endif; ?>

        <a href="/admin/propiedades/crear.php" class="boton boton-verde">Nueva propiedad</a>
        <a href="/admin/vendedores/crear.php" class="boton boton-amarillo">Nuevo vendedor</a>


        <h2>Propiedades</h2>
        <table class="propiedades">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titulo</th>
                    <th>Imagen</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody> <!-- Mostrar los resultados de la base de datos -->
            <?php foreach( $propiedades as $propiedad ): ?>
                <tr>
                    <td><?=$propiedad->id;?></td>
                    <td><?=$propiedad->titulo;?></td>
                    <td> <img src="../../public/imagenes/<?=$propiedad->imagen;?>"  class="imagen-tabla"> </td>
                    <td>$ <?=$propiedad->precio;?></td>
                    <td>
                        <form method="POST" class="w-100">
                            <input type="hidden" name="id" value="<?=$propiedad->id;?>">
                            <input type="hidden" name="tipo" value="propiedad">
                            <input type="submit" value="Eliminar" class="boton-rojo-block">
                        </form>
                        <a href="/admin/propiedades/actualizar.php?id=<?=$propiedad->id;?>" class="boton-amarillo-block">Actualizar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
</main>