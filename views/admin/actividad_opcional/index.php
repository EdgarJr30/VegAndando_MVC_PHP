<h2 class="dashboard__heading"><?php echo $titulo; ?></h2>

<div class="dashboard__contenedor-boton">
    <a class="dashboard__boton" href="/admin/actividad_opcional/crear">
        <i class="fa-solid fa-circle-plus"></i>
        Añadir Viaje
    </a>
</div>


<div class="dashboard__contenedor">
    <?php if (!empty($actvOpcionales)) { ?>
        <table class="table">
            <thead class="table__thead">
                <tr>
                    <th scope="col" class="table__th">Actividad</th>
                    <th scope="col" class="table__th">Viaje</th>
                    <th scope="col" class="table__th"></th>
                </tr>
            </thead>

            <tbody class="table__tbody">
                <?php foreach ($actvOpcionales as $actvOpcional) { ?>
                    <tr class="table__tr">
                        <td class="table__td">
                            <?php echo $actvOpcional->actividad; ?>
                        </td>
                        <td class="table__td">
                            <?php echo $actvOpcional->viajefrase->titulo; ?>
                        </td>
                        <td class="table__td--acciones">
                            <a class="table__accion table__accion--editar" href="/admin/actividad_opcional/editar?id=<?php echo $actvOpcional->id; ?>"><i class="fa-solid fa-user-pen"></i> Editar</a>

                            <form method="POST" action="/admin/actividad_opcional/eliminar" class="table__formulario">
                                <input type="hidden" name="id" value="<?php echo $actvOpcional->id; ?>">
                                <button class="table__accion table__accion--eliminar" id="table__accion--eliminar" type="submit"><i class="fa-solid fa-circle-xmark"></i> Eliminar</button>
                            </form>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    <?php } else { ?>
        <p class="text-center">No hay Actividades Aun</p>
    <?php } ?>
</div>