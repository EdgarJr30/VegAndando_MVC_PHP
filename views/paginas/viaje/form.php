<h2 class="form_title bottom10px">Completa la información</h2>
<div class="form_container width-aviable">
    <div class="primary_info v-line width-aviable">
        <label for="Nombre y apellido">Nombre y apellido</label>
        <input minlength="4" maxlength="22" type="text" class="form_input" placeholder="Nombre y apellido:" name="firstName lastName" required pattern="[a-z[\\t\\p{Zs}]A-Z]+" />

        <label for="Cédula o pasaporte">Cédula o pasaporte <br />
            <span>Información requerida para el seguro de viaje</span></label>
        <input minlength="4" maxlength="15" type="text" class="form_input" placeholder="Cédula o pasaporte:" name="id" required pattern="[a-zA-Z0-9]+" />

        <label for="birthday">Fecha de nacimiento <br />
            <span>Información requerida para el seguro de viaje</span></label>
        <input type="date" class="form_input" name="birthday" required />
    </div>

    <div class="contact_go_info v-line width-aviable">
        <label for="phone_number">Número de télefono</label>
        <input minlength="4" maxlength="15" type="tel" class="form_input" placeholder="Numero de telefono:" name="phone_number" required pattern="[0-9]+" />
        <label for="email">Email</label>
        <input type="email" class="form_input" placeholder="Email:" name="email" required />

        <div class="selections">
            <h3>Seleccione su punto de partida</h3>
            <input id="SantoDomingo" type="radio" class="form_input" name="starting_point" value="SantoDomingo" />
            <label for="SantoDomingo">Bravo La Esperilla, Santo Domingo</label>
            <br />
            <input id="SanCristóbal" type="radio" class="form_input" name="starting_point" value="SanCristóbal" />
            <label for="SanCristóbal">Parque Central, San Cristóbal</label>
            <br />
            <input id="Otro" type="radio" class="form_input" name="starting_point" value="Otro" />
            <label for="Otro">Otro</label>
        </div>
    </div>

    <div class="emergency_info v-line width-aviable">
        <h3>Contacto de emergencia</h3>
        <input minlength="4" maxlength="22" type="text" class="form_input" name="emergency_contact" placeholder="Nombre y apellido:" pattern="[a-z[\\t\\p{Zs}]A-Z]+" />
        <input minlength="4" maxlength="15" type="tel" class="form_input" name="emergency_phone_number" placeholder="Número de télefono:" pattern="[0-9]+" />

        <div class="selections_health">
            <h3 class="bottom10px">Condicion medica o alergia?</h3>
            <input id="Si" type="radio" class="form_input" name="health_condition" value="Si" />
            <label for="Si">Si</label>
            <input id="No" type="radio" class="form_input" name="health_condition" value="No" />
            <label for="No">No</label>
        </div>

        <p>Si? Especifique</p>
        <textarea maxlength="150" class="form_input form_input--message" name="message" id="" cols="30" rows="2" placeholder="Condicion medica:"></textarea>
    </div>

    <div class="covid_selections v-line width-aviable">
        <p>
            Ha sentido fiebre, resfriado o algun sintoma relacionado al
            Covid19 en los ultimos 15 dias
        </p>
        <input maxlength="22" type="text" class="form_input" name="covid19_condition" placeholder="Especifique" pattern="[a-zA-Z]+" />

        <div class="selections">
            <h3>Como se entero?</h3>
            <input id="Instagram" type="radio" class="form_input" name="how_you_know" value="Instagram" />
            <label for="Instagram">Instagram</label>
            <br />
            <input id="Facebook" type="radio" class="form_input" name="how_you_know" value="Facebook" />
            <label for="Facebook">Facebook</label>
            <br />
            <input id="TikTok" type="radio" class="form_input" name="how_you_know" value="TikTok" />
            <label for="TikTok">Tik Tok</label>
            <br />
            <input id="WhatsApp" type="radio" class="form_input" name="how_you_know" value="WhatsApp" />
            <label for="WhatsApp">WhatsApp</label>
            <br />
            <input id="Referencia" type="radio" class="form_input" name="how_you_know" value="Referencia" />
            <label for="Referencia">Referencia de un amigo</label>
            <br />
            <input id="Otro2" type="radio" class="form_input" name="how_you_know" value="Otro" />
            <label for="Otro2">Otro</label>
        </div>
    </div>
</div>
<input type="submit" value="Enviar" class="form_cta width-aviable top15px" />