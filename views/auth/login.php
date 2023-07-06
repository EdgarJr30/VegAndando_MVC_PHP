<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo; ?></h2>
    <p class="auth__texto">Inicia sesión en VegAndando</p>
    <img class="img_flecha" src="/img/logos/colorLogo.svg" alt="" />

    <?php
    require_once __DIR__ . '/../templates/alertas.php';
    ?>

    <form action="/login" method="POST" class="formulario">
        <div class="formulario__campo">
            <label for="email" class="formulario__label--login">Email</label>
            <input type="email" class="formulario__input" placeholder="Tu Email" id="email" name="email">
        </div>

        <div class="formulario__campo">
            <label for="password" class="formulario__label--login">Password</label>
            <input type="password" class="formulario__input" placeholder="Tu Password" id="password" name="password">
        </div>

        <input type="submit" class="formulario__submit" value="Iniciar Sesión">
    </form>

    <div class="acciones">
        <!-- <a href="/registro" class="acciones__enlace">¿Aun no tienes cuenta? Obtener una</a> -->
        <a href="/olvide" class="acciones__enlace">¿Olvidaste tu password?</a>
    </div>
</main>