<main>
    <?php include_once __DIR__ . './../../templates/headerNavbar.php'; ?>
    <?php include_once __DIR__ . './../../templates/cookies.php'; ?>

    <!-- ============= Heading Section ============= -->
    <section class="heading_viaje top60px">
        <picture>
            <source srcset="../img/viajes/<?php echo $viaje->imagen; ?>.webp" type="image/webp">
            <source srcset="../img/viajes/<?php echo $viaje->imagen; ?>.png" type="image/png">
            <img class="img_viaje img_viaje--swiper" loading="lazy" src="../img/viajes/<?php echo $viaje->imagen; ?>.png" alt="Imagen Viaje">
        </picture>

        <!-- ============= Rating y Lugares a visitar Section =================  -->
        <div class="rating_places width-aviable">
            <!-- ============= Rating y tag Section =================  -->
            <div class="rating_tag">
                <div class="title_viaje width-aviable top60px">
                    <h1><?php echo $viaje->titulo; ?></h1>
                    <h2 class="bottom15px"><?php echo $viaje->fecha; ?></h2>
                    <span class="top15px"><?php echo $viaje->descripcion; ?></span>
                </div>
            </div>

            <?php if (!empty($viaje->actvopcional)) {; ?>
                <div class="actividad__opcional">
                    <h4>Actividad Opcional</h4>
                    <p><?php echo $viaje->actvopcional; ?></p>
                </div>
            <?php } ?>

            <!-- ============= Price Section =================-->
            <?php include __DIR__ . '/priceButton.php'; ?>
        </div>
    </section>

    <section class="travel_adds_contain top60px">
        <!-- ============= Lugares a visitar Section =================  -->
        <div class="places">
            <h3>¿Cuáles Lugares Visitaremos?</h3>
            <div class="places_list top15px">
                <ul>
                    <li><?php echo $viaje->visitaremos1; ?></li>
                    <li><?php echo $viaje->visitaremos2; ?></li>
                    <li><?php echo $viaje->visitaremos3; ?></li>
                    <li><?php echo $viaje->visitaremos4; ?></li>
                </ul>
                <ul>
                    <li><?php echo $viaje->visitaremos5; ?></li>
                    <li><?php echo $viaje->visitaremos6; ?></li>
                    <li><?php echo $viaje->visitaremos7; ?></li>
                    <li><?php echo $viaje->visitaremos8; ?></li>
                </ul>
            </div>
        </div>

        <!-- ========== Section Tips ============  -->
        <div class="places">
            <h3>El Viaje Incluye</h3>
            <div class="places_list top15px">
                <ul>
                    <li><?php echo $viaje->includes1; ?></li>
                    <li><?php echo $viaje->includes2; ?></li>
                    <li><?php echo $viaje->includes3; ?></li>
                    <li><?php echo $viaje->includes4; ?></li>
                </ul>
                <ul>
                    <li><?php echo $viaje->includes5; ?></li>
                    <li><?php echo $viaje->includes6; ?></li>
                    <li><?php echo $viaje->includes7; ?></li>
                    <li><?php echo $viaje->includes8; ?></li>
                </ul>
            </div>
        </div>
    </section>

    <!-- ============= Price y Ver mas Section =================-->
    <section class="price_rutes top60px width-aviable">
        <!-- ============= Rutas de Salida =================-->
        <div class="go_routes_content">
            <h4>Horas de salida</h4>
            <hr class="linea" />
            <div class="horarios">
                <div class="hora">
                    <span>Hora</span>
                    <p><?php echo $viaje->hora1 ? $viaje->hora1 . ' - AM' : ''; ?></p>
                    <p><?php echo $viaje->hora2 ? $viaje->hora2 . ' - AM' : ''; ?></p>
                    <p><?php echo $viaje->hora3 ? $viaje->hora3 . ' - AM' : ''; ?></p>
                </div>
                <div class="v-line--viaje"></div>
                <div class="provincia">
                    <span>Provincia</span>
                    <p><?php echo $viaje->provinciasalida1; ?></p>
                    <p><?php echo $viaje->provinciasalida2; ?></p>
                    <p><?php echo $viaje->provinciasalida3; ?></p>
                </div>
                <div class="v-line--viaje"></div>
                <div class="lugar">
                    <span>Lugar</span>
                    <p><?php echo $viaje->salida1; ?></p>
                    <p><?php echo $viaje->salida2; ?></p>
                    <p><?php echo $viaje->salida3; ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- ============= Frase Section =================-->
    <section class="frase_section--viaje top60px">
        <p><?php echo $viaje->descripcion; ?></p>
    </section>

    <!-- ============= Prohibido =================-->
    <section class="prohibido__container top60px">
        <div class="prohibido">
            <h4>Prohibido</h4>
            <img src="../img/svg+/prohibido.svg" alt="x" />
        </div>
        <div class="prohibiciones top15px">
            <img src="../img/svg+/prohibidos/perro.svg" alt="perro" />
            <img src="../img/svg+/prohibidos/armas.svg" alt="armas" />
        </div>
    </section>

    <!-- ============= Dificultad y Recomendación =================-->
    <section class="difficulty_recomendation top60px width-aviable">
        <div class="recomendation_first width-aviable">
            <div class="difficulty">
                <h4>Dificultad <?php echo $viaje->dificultad; ?></h4>
                <img src="../img/svg+/recomendation/velocimetro.svg" alt="" />
            </div>
            <p><?php echo $viaje->dificultadmsg; ?></p>
        </div>
        <div class="recomendation_second width-aviable">
            <div class="difficulty">
                <h4>Recomendaciones</h4>
                <img src="../img/svg+/recomendation/consejo.svg" alt="" />
            </div>
            <p><?php echo $viaje->recomendacion; ?></p>
        </div>
    </section>

    <!-- ============= Circulos Section =================-->
    <section class="circle_contain top60px width-aviable">
        <div class="center_circles width-aviable">
            <img class="circle_img width-aviable" src="../img/svg+/circulo.svg" alt="" />
        </div>
        <div class="date_info width-aviable">
            <!-- ======== Date Section =============-->
            <div class="travel_date_section">
                <h3 class="travel_date_title">
                    <span><img src="../img/svg+/calendario.svg" alt="" /></span>
                    Fecha del viaje
                </h3>
                <div class="linea_date top25px"></div>
                <p class="travel_date"><?php echo $viaje->fecha; ?></p>
                <div class="linea_date bottom25px"></div>
            </div>
        </div>
    </section>

    <!-- ============= Price Section =================-->
    <?php include __DIR__ . '/priceButton.php'; ?>

    <!-- ========== Politica pago Section ========== -->
    <section class="politicas top60px">
        <div class="politicas_title">
            <img src="../img/svg+/linkpolitic.svg" alt="" />
            <h3>Política de Pago</h3>
        </div>
        <a href="/politicadepago" class="link_politics">Saber más</a>
    </section>

    <!-- ========== MENU ========== -->
    <?php include_once __DIR__ . './../../templates/menu.php'; ?>

    <!-- ========== Footer ========== -->
    <?php include_once __DIR__ . './../../templates/footer.php'; ?>
</main>