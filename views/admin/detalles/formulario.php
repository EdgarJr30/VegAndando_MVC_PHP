<?php debuguear($detalles);?>
<fieldset class="formulario__fieldset">
    <legend class="formulario__legend">Agregar Detalle al Viaje</legend>

    <div class="formulario__campo">
        <?php foreach ($lugaresVisitar as $lugarVisitar) { ?>
            <div>
                <label for="<?php echo $lugarVisitar->id; ?>">Ingrese los lugares a visitar</label>
                <input type="text" name="lugaresavisitar_id" id="<?php echo $lugarVisitar->id; ?>" value="<?php echo $lugarVisitar->id; ?>" <?php echo ($detalle->lugaresavisitar_id === $lugarVisitar->id) ? 'checked' : ''; ?>>
            </div>
        <?php } ?>
    </div>

    <div class="formulario__campo">
        <label for="provincia" class="formulario__label">Provincia</label>
        <input type="text" class="formulario__input" id="provincia" name="provincia" placeholder="Provincia" value="<?php echo $detalle->provincia ?? ''; ?>">
    </div>

    <div class="formulario__campo">
        <label for="lugar" class="formulario__label">Lugar De Salida</label>
        <input type="text" class="formulario__input" id="lugar" name="lugar" placeholder="Lugar De Salida" value="<?php echo $detalle->lugar ?? ''; ?>">
    </div>

    <div class="formulario__campo">
        <label for="estatus" class="formulario__label">Seleccione el Viaje</label>
        <select class="formulario__select" name="estatus_id" id="estatus">
            <option value="">- Seleccionar Viaje -</option>
            <?php foreach ($viajes as $viaje) { ?>
                <option <?php echo ($viaje->id === $detalle->viaje_id) ? 'selected' : ''; ?> value="<?php echo $viaje->id; ?>"><?php echo $viaje->titulo; ?></option>
            <?php } ?>
        </select>
    </div>
</fieldset>