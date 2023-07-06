<h2 class="dashboard__heading"><?php echo $titulo; ?></h2>

<div class="dashboard__contenedor-boton">
    <a class="dashboard__boton" href="/admin/detalles/crear">
        <i class="fa-solid fa-circle-plus"></i>
        Añadir Viaje
    </a>
</div>

<div class="dashboard__contenedor">
    <?php if (!empty($detalles)) { ?>
        <table class="table">
            <thead class="table__thead">
                <tr>
                    <th scope="col" class="table__th">Lugares a Visitar</th>
                    <th scope="col" class="table__th">El Viaje Incluye</th>
                    <th scope="col" class="table__th">Horas de salida</th>
                    <th scope="col" class="table__th">Frase</th>
                    <th scope="col" class="table__th"></th>
                </tr>
            </thead>

            <tbody class="table__tbody">
                <?php foreach ($detalles as $detalle) { ?>
                    <tr class="table__tr">
                        <td class="table__td">
                            <?php echo $detalle->lugaresavisitar->lugarvisitar; ?>
                        </td>
                        <td class="table__td">
                            <?php echo $detalle->elviajeincluye->incluyeimg; ?>
                        </td>
                        <td class="table__td">
                            <?php echo $detalle->horariosdesalida->hora . ', ' . $detalle->horariosdesalida->provincia . ', ' . $detalle->horariosdesalida->lugar; ?>
                        </td>
                        <td class="table__td">
                            <?php echo $detalle->frase->frase; ?>
                        </td>
                        <td class="table__td--acciones">
                            <a class="table__accion table__accion--editar" href="/admin/detalles/editar?id=<?php echo $detalle->id; ?>"><i class="fa-solid fa-user-pen"></i> Editar</a>

                            <form method="POST" action="/admin/detalles/eliminar" class="table__formulario">
                                <input type="hidden" name="id" value="<?php echo $detalle->id; ?>">
                                <button class="table__accion table__accion--eliminar" id="table__accion--eliminar" type="submit"><i class="fa-solid fa-circle-xmark"></i> Eliminar</button>
                            </form>
                        </td>
                    </tr>

                <?php } ?>
            </tbody>
        </table>
    <?php } else { ?>
        <p class="text-center">No hay Detalles Aun</p>
    <?php } ?>
</div>