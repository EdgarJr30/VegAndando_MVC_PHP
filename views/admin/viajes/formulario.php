<fieldset class="formulario__fieldset">
    <legend class="formulario__legend">Informacion Del Viaje</legend>

    <div class="formulario__campo">
        <label for="titulo" class="formulario__label">Titulo</label>
        <input type="text" class="formulario__input" id="titulo" name="titulo" placeholder="Titulo del viaje" value="<?php echo $viaje->titulo ?? ''; ?>">
    </div>

    <div class="formulario__campo">
        <label for="descripcion" class="formulario__label">Descripción</label>
        <input type="text" class="formulario__input" id="descripcion" name="descripcion" placeholder="Descripción del viaje" value="<?php echo $viaje->descripcion ?? ''; ?>">
    </div>

    <div class="formulario__campo">
        <label for="frase" class="formulario__label">Frase</label>
        <input type="text" class="formulario__input" id="frase" name="frase" placeholder="Frase del viaje" value="<?php echo $viaje->frase ?? ''; ?>">
    </div>

    <div class="formulario__campo">
        <label for="ciudad" class="formulario__label">Ciudad</label>
        <input type="text" class="formulario__input" id="ciudad" name="ciudad" placeholder="Ciudad del viaje" value="<?php echo $viaje->ciudad ?? ''; ?>">
    </div>

    <div class="formulario__campo">
        <label for="fecha" class="formulario__label">Fecha</label>
        <input type="text" class="formulario__input" id="fecha" name="fecha" placeholder="Fecha del viaje" value="<?php echo $viaje->fecha ?? ''; ?>">
    </div>

    <div class="formulario__campo">
        <label for="precio" class="formulario__label">Precio</label>
        <input type="text" class="formulario__input" id="precio" name="precio" placeholder="Precio del viaje" value="<?php echo $viaje->precio ?? ''; ?>">
    </div>

    <div class="formulario__campo">
        <label for="precio2" class="formulario__label">Precio - 2</label>
        <input type="text" class="formulario__input" id="precio2" name="precio2" placeholder="Precio - 2 del viaje" value="<?php echo $viaje->precio2 ?? ''; ?>">
    </div>

    <div class="formulario__campo">
        <label for="precio3" class="formulario__label">Precio - 3</label>
        <input type="text" class="formulario__input" id="precio3" name="precio3" placeholder="Precio - 3 del viaje" value="<?php echo $viaje->precio3 ?? ''; ?>">
    </div>

    <div class="formulario__campo">
        <label for="estatus" class="formulario__label">Seleccione el estatus del viaje</label>
        <select class="formulario__select" name="estatus_id" id="estatus">
            <option value="">- Seleccionar Estatus -</option>
            <?php foreach ($estatus as $status) { ?>
                <option <?php echo ($viaje->estatus_id === $status->id) ? 'selected' : ''; ?> value="<?php echo $status->id; ?>"><?php echo $status->status; ?></option>
            <?php } ?>
        </select>
    </div>

    <div class="formulario__campo">
        <label for="actvopcional" class="formulario__label">Seleccione Actividad Opcional</label>
        <select class="formulario__select" name="actvopcional" id="actvopcional">
            <option value="">- Seleccionar Actividad -</option>
            <?php foreach ($actvOpcionales as $actvOpcional) { ?>
                <option <?php echo ($actvOpcional->viaje_id === $viaje->id) ? 'selected' : ''; ?> value="<?php echo $actvOpcional->actividad; ?>"><?php echo $actvOpcional->actividad; ?></option>
            <?php } ?>
        </select>
    </div>

    <div class="formulario__campo">
        <label for="imagen" class="formulario__label">Imagen</label>
        <input type="file" class="formulario__input formulario__input--file" id="imagen" name="imagen">
    </div>

    <?php if (isset($viaje->imagen_actual)) { ?>
        <p class="formulario__texto">Imagen Actual:</p>
        <div class="formulario__imagen">
            <picture>
                <source srcset="<?php echo $_ENV['HOST'] . '/img/viajes/' . $viaje->imagen; ?>.webp" type="image/webp">
                <source srcset="<?php echo $_ENV['HOST'] . '/img/viajes/' . $viaje->imagen; ?>.png" type="image/png">
                <img src="<?php echo $_ENV['HOST'] . '/img/viajes/' . $viaje->imagen; ?>.png" alt="Imagen Viaje">
            </picture>
        </div>
    <?php } ?>
</fieldset>

<fieldset class="formulario__fieldset">
    <legend class="formulario__legend">Horario De Salida</legend>

    <div class="formulario__campo">
        <label for="hora1" class="formulario__label">Hora - 1</label>
        <input type="time" class="formulario__input" id="hora1" name="hora1" placeholder="Primera Hora de salida viaje" value="<?php echo $viaje->hora1 ?? ''; ?>">
    </div>

    <div class="formulario__campo">
        <label for="hora2" class="formulario__label">Hora - 2</label>
        <input type="time" class="formulario__input" id="hora2" name="hora2" placeholder="Segunda Hora de salida viaje" value="<?php echo $viaje->hora2 ?? ''; ?>">
    </div>

    <div class="formulario__campo">
        <label for="hora3" class="formulario__label">Hora - 3</label>
        <input type="time" class="formulario__input" id="hora3" name="hora3" placeholder="Tercera Hora de salida viaje" value="<?php echo $viaje->hora3 ?? ''; ?>">
    </div>
</fieldset>

<fieldset class="formulario__fieldset">
    <legend class="formulario__legend">Provincia de salida</legend>

    <div class="formulario__campo">
        <label for="provinciasalida1" class="formulario__label">Provincia de salida - 1</label>
        <input type="text" class="formulario__input" id="provinciasalida1" name="provinciasalida1" placeholder="Provicia de salida - 1" value="<?php echo $viaje->provinciasalida1 ?? ''; ?>">
    </div>

    <div class="formulario__campo">
        <label for="provinciasalida2" class="formulario__label">Provincia de salida - 2</label>
        <input type="text" class="formulario__input" id="provinciasalida2" name="provinciasalida2" placeholder="Provicia de salida - 2" value="<?php echo $viaje->provinciasalida2 ?? ''; ?>">
    </div>

    <div class="formulario__campo">
        <label for="provinciasalida3" class="formulario__label">Provincia de salida - 3</label>
        <input type="text" class="formulario__input" id="provinciasalida3" name="provinciasalida3" placeholder="Provicia de salida - 3" value="<?php echo $viaje->provinciasalida3 ?? ''; ?>">
    </div>
</fieldset>

<fieldset class="formulario__fieldset">
    <legend class="formulario__legend">Lugares de salida</legend>
    <div class="formulario__campo">
        <label for="salida1" class="formulario__label">Lugar de salida - 1</label>
        <input type="text" class="formulario__input" id="salida1" name="salida1" placeholder="Lugar de salida - 1" value="<?php echo $viaje->salida1 ?? ''; ?>">
    </div>

    <div class="formulario__campo">
        <label for="salida2" class="formulario__label">Lugar de salida - 2</label>
        <input type="text" class="formulario__input" id="salida2" name="salida2" placeholder="Lugar de salida - 2" value="<?php echo $viaje->salida2 ?? ''; ?>">
    </div>

    <div class="formulario__campo">
        <label for="salida3" class="formulario__label">Lugar de salida - 3</label>
        <input type="text" class="formulario__input" id="salida3" name="salida3" placeholder="Lugar de salida - 3" value="<?php echo $viaje->salida3 ?? ''; ?>">
    </div>
</fieldset>

<fieldset class="formulario__fieldset">
    <legend class="formulario__legend">Cuales Lugares Vistaremos?</legend>
    <div class="formulario__campo">
        <label for="visitaremos1" class="formulario__label">Lugar a visitar - 1</label>
        <input type="text" class="formulario__input" id="visitaremos1" name="visitaremos1" placeholder="Lugar a visitar - 1" value="<?php echo $viaje->visitaremos1 ?? ''; ?>">
    </div>

    <div class="formulario__campo">
        <label for="visitaremos2" class="formulario__label">Lugar a visitar - 2</label>
        <input type="text" class="formulario__input" id="visitaremos2" name="visitaremos2" placeholder="Lugar a visitar - 2" value="<?php echo $viaje->visitaremos2 ?? ''; ?>">
    </div>

    <div class="formulario__campo">
        <label for="visitaremos3" class="formulario__label">Lugar a visitar - 3</label>
        <input type="text" class="formulario__input" id="visitaremos3" name="visitaremos3" placeholder="Lugar a visitar - 3" value="<?php echo $viaje->visitaremos3 ?? ''; ?>">
    </div>

    <div class="formulario__campo">
        <label for="visitaremos4" class="formulario__label">Lugar a visitar - 4</label>
        <input type="text" class="formulario__input" id="visitaremos4" name="visitaremos4" placeholder="Lugar a visitar - 4" value="<?php echo $viaje->visitaremos4 ?? ''; ?>">
    </div>

    <div class="formulario__campo">
        <label for="visitaremos5" class="formulario__label">Lugar a visitar - 5</label>
        <input type="text" class="formulario__input" id="visitaremos5" name="visitaremos5" placeholder="Lugar a visitar - 5" value="<?php echo $viaje->visitaremos5 ?? ''; ?>">
    </div>

    <div class="formulario__campo">
        <label for="visitaremos6" class="formulario__label">Lugar a visitar - 6</label>
        <input type="text" class="formulario__input" id="visitaremos6" name="visitaremos6" placeholder="Lugar a visitar - 6" value="<?php echo $viaje->visitaremos6 ?? ''; ?>">
    </div>

    <div class="formulario__campo">
        <label for="visitaremos7" class="formulario__label">Lugar a visitar - 7</label>
        <input type="text" class="formulario__input" id="visitaremos7" name="visitaremos7" placeholder="Lugar a visitar - 7" value="<?php echo $viaje->visitaremos7 ?? ''; ?>">
    </div>

    <div class="formulario__campo">
        <label for="visitaremos8" class="formulario__label">Lugar a visitar - 8</label>
        <input type="text" class="formulario__input" id="visitaremos8" name="visitaremos8" placeholder="Lugar a visitar - 8" value="<?php echo $viaje->visitaremos8 ?? ''; ?>">
    </div>
</fieldset>

<fieldset class="formulario__fieldset">
    <legend class="formulario__legend">El Viaje Incluye</legend>
    <div class="formulario__campo">
        <label for="includes1" class="formulario__label">Incluye - 1</label>
        <input type="text" class="formulario__input" id="includes1" name="includes1" placeholder="Incluye - 1" value="<?php echo $viaje->includes1 ?? ''; ?>">
    </div>

    <div class="formulario__campo">
        <label for="includes2" class="formulario__label">Incluye - 2</label>
        <input type="text" class="formulario__input" id="includes2" name="includes2" placeholder="Incluye - 2" value="<?php echo $viaje->includes2 ?? ''; ?>">
    </div>

    <div class="formulario__campo">
        <label for="includes3" class="formulario__label">Incluye - 3</label>
        <input type="text" class="formulario__input" id="includes3" name="includes3" placeholder="Incluye - 3" value="<?php echo $viaje->includes3 ?? ''; ?>">
    </div>

    <div class="formulario__campo">
        <label for="includes4" class="formulario__label">Incluye - 4</label>
        <input type="text" class="formulario__input" id="includes4" name="includes4" placeholder="Incluye - 4" value="<?php echo $viaje->includes4 ?? ''; ?>">
    </div>

    <div class="formulario__campo">
        <label for="includes5" class="formulario__label">Incluye - 5</label>
        <input type="text" class="formulario__input" id="includes5" name="includes5" placeholder="Incluye - 5" value="<?php echo $viaje->includes5 ?? ''; ?>">
    </div>

    <div class="formulario__campo">
        <label for="includes6" class="formulario__label">Incluye - 6</label>
        <input type="text" class="formulario__input" id="includes6" name="includes6" placeholder="Incluye - 6" value="<?php echo $viaje->includes6 ?? ''; ?>">
    </div>

    <div class="formulario__campo">
        <label for="includes7" class="formulario__label">Incluye - 7</label>
        <input type="text" class="formulario__input" id="includes7" name="includes7" placeholder="Incluye - 7" value="<?php echo $viaje->includes7 ?? ''; ?>">
    </div>

    <div class="formulario__campo">
        <label for="includes8" class="formulario__label">Incluye - 8</label>
        <input type="text" class="formulario__input" id="includes8" name="includes8" placeholder="Incluye - 8" value="<?php echo $viaje->includes8 ?? ''; ?>">
    </div>
</fieldset>

<fieldset class="formulario__fieldset">
    <legend class="formulario__legend">Dificultad & Recomendacion</legend>
    <div class="formulario__campo">
        <label for="dificultad" class="formulario__label">Dificultad</label>
        <input type="text" class="formulario__input" id="dificultad" name="dificultad" placeholder="Dificultad" value="<?php echo $viaje->dificultad ?? ''; ?>">
    </div>

    <div class="formulario__campo">
        <label for="dificultadmsg" class="formulario__label">Dificultad Mensaje</label>
        <input type="text" class="formulario__input" id="dificultadmsg" name="dificultadmsg" placeholder="Dificultad Mensaje" value="<?php echo $viaje->dificultadmsg ?? ''; ?>">
    </div>

    <div class="formulario__campo">
        <label for="recomendacion" class="formulario__label">Recomendacion</label>
        <input type="text" class="formulario__input" id="recomendacion" name="recomendacion" placeholder="Recomendacion" value="<?php echo $viaje->recomendacion ?? ''; ?>">
    </div>
</fieldset>

<!-- <fieldset class="formulario__fieldset">
    <legend class="formulario__legend">Imagen el viaje incluye</legend>
    <div class="formulario__campo">
        <label for="imgincluye" class="formulario__label">Imagen</label>
        <input type="file" class="formulario__input formulario__input--file" id="imgincluye" name="imgincluye">
    </div>

    <?php if (isset($viaje->imagen_actual_incluye)) { ?>
        <p class="formulario__texto">Imagen Actual:</p>
        <div class="formulario__imagen">
            <picture>
                <source srcset="<?php echo $_ENV['HOST'] . '/img/viajes/incluye/' . $viaje->imgincluye; ?>.webp" type="image/webp">
                <source srcset="<?php echo $_ENV['HOST'] . '/img/viajes/incluye/' . $viaje->imgincluye; ?>.png" type="image/png">
                <img src="<?php echo $_ENV['HOST'] . '/img/viajes/incluye/' . $viaje->imgincluye; ?>.png" alt="Imagen Viaje">
            </picture>
        </div>
    <?php } ?>
</fieldset> -->