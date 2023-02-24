<fieldset class="formulario__fieldset">
    <legend class="formulario__legend">Nueva actividad opcional</legend>

    <div class="formulario__campo">
        <label for="actividad" class="formulario__label">Actividad</label>
        <input type="text" class="formulario__input" id="actividad" name="actividad" placeholder="Actividad del viaje" value="<?php echo $actvOpcional->actividad ?? ''; ?>">
    </div>

    <div class="formulario__campo">
        <label for="viaje_id" class="formulario__label">Seleccione el viaje de la actividad</label>
        <select class="formulario__select" name="viaje_id" id="viaje_id">
            <option value="">- Seleccionar Viaje -</option>
            <?php foreach ($viajes as $viaje) { ?>
                <option <?php echo ($actvOpcional->viaje_id === $viaje->id) ? 'selected' : ''; ?> value="<?php echo $viaje->id; ?>"><?php echo $viaje->titulo; ?></option>
            <?php } ?>
        </select>
    </div>
</fieldset>