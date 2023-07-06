<h2 class="dashboard__heading"><?php echo $titulo; ?></h2>

<div class="dashboard__contenedor-boton">
    <a class="dashboard__boton" href="/admin/viajes/crear">
        <i class="fa-solid fa-circle-plus"></i>
        Añadir Viaje
    </a>
</div>


<div class="dashboard__contenedor">
    <?php if (!empty($viajes)) { ?>
        <table class="table">
            <thead class="table__thead">
                <tr>
                    <th scope="col" class="table__th">Titulo</th>
                    <th scope="col" class="table__th">Descripcion</th>
                    <th scope="col" class="table__th">Ciudad</th>
                    <th scope="col" class="table__th">Fecha</th>
                    <!-- <th scope="col" class="table__th">Hora</th> -->
                    <!-- <th scope="col" class="table__th">Lugar de salida</th> -->
                    <th scope="col" class="table__th">Precio</th>
                    <th scope="col" class="table__th">Estatus</th>
                    <th scope="col" class="table__th">Imagen</th>
                    <th scope="col" class="table__th"></th>
                </tr>
            </thead>

            <tbody class="table__tbody">
                <?php foreach ($viajes as $viaje) { ?>
                    <tr class="table__tr">
                        <td class="table__td">
                            <?php echo $viaje->titulo; ?>
                        </td>
                        <td class="table__td">
                            <?php echo $viaje->descripcion; ?>
                        </td>
                        <td class="table__td">
                            <?php echo $viaje->ciudad; ?>
                        </td>
                        <td class="table__td">
                            <?php echo $viaje->fecha; ?>
                        </td>
                        <!-- <td class="table__td">
                            <?php echo $viaje->hora; ?>
                        </td> -->
                        <!-- <td class="table__td">
                            <?php echo $viaje->salida; ?>
                        </td> -->
                        <td class="table__td">
                            $ <?php echo $viaje->precio; ?>
                        </td>
                        <td class="table__td">
                            <?php echo $viaje->estatus->status; ?>
                        </td>
                        <td class="table__td--img">
                            <picture>
                                <source srcset="<?php echo $_ENV['HOST'] . '/img/viajes/' . $viaje->imagen; ?>.webp" type="image/webp">
                                <source srcset="<?php echo $_ENV['HOST'] . '/img/viajes/' . $viaje->imagen; ?>.png" type="image/png">
                                <img src="<?php echo $_ENV['HOST'] . '/img/viajes/' . $viaje->imagen; ?>.png" alt="Imagen Viaje">
                            </picture>
                        </td>

                        <td class="table__td--acciones">
                            <a class="table__accion table__accion--editar" href="/admin/viajes/editar?id=<?php echo $viaje->id; ?>"><i class="fa-solid fa-user-pen"></i> Editar</a>

                            <form method="POST" action="/admin/viajes/eliminar" class="table__formulario">
                                <input type="hidden" name="id" value="<?php echo $viaje->id; ?>">
                                <button class="table__accion table__accion--eliminar" id="table__accion--eliminar" type="submit"><i class="fa-solid fa-circle-xmark"></i> Eliminar</button>
                            </form>
                        </td>
                    </tr>

                <?php } ?>
            </tbody>
        </table>
    <?php } else { ?>
        <p class="text-center">No hay Viajes Aun</p>
    <?php } ?>
</div>