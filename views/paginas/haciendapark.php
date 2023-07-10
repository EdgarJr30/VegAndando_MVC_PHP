<main>
    <?php include_once __DIR__ . './../../templates/headerNavbar.php'; ?>
    <?php include_once __DIR__ . './../../templates/cookies.php'; ?>

    <!-- ============= Heading Section ============= -->
    <section class="heading_viaje top60px">
        <picture>
            <img class="img_viaje img_viaje--swiper" loading="lazy" src="https://i.imgur.com/gd8PmJr.png" alt="">
        </picture>

        <!-- ============= Rating y Lugares a visitar Section =================  -->
        <div class="rating_places width-aviable">
            <!-- ============= Rating y tag Section =================  -->
            <div class="rating_tag">
                <div class="title_viaje width-aviable top60px">
                    <h1>
                        <?php echo $titulo; ?>
                    </h1>

                    <span class="top15px">
                        Un parque de aventuras, con atracciones exclusivas en Republica Dominicana,
                        como la única telesilla del país, y el zipline más largo y rápido.
                        <br>
                        <br>
                        También podrás sentir la adrenalina del recorrido en buggy, darte un refrescante
                        chapuzon en el rio, montar a caballo, caída libre, paseo en safari, contacto con
                        animalitos criollos, degustación de productos locales y mucho mas.
                    </span>
                </div>
            </div>

            <div class="actividad__opcional">
                <h4>Actividades</h4>
                <p>Zipline</p>
            </div>

            <!-- ============= Price Section =================-->
            <?php include __DIR__ . '/priceButton.php'; ?>
        </div>
    </section>

    <!-- Slider main container -->
    <di
    v class="swiper">






























    
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">Slide 1</div>
            <div class="swiper-slide">Slide 2</div>
            <div class="swiper-slide">Slide 3</div>
            ...
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>

        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>

        <!-- If we need scrollbar -->
        <div class="swiper-scrollbar"></div>
    </div>

    <!-- ============= Frase Section =================-->
    <section class="frase_section--viaje top60px">
        <p>Un parque de aventuras, con atracciones exclusivas en Republica Dominicana, como la única telesilla del país,
            y el zipline más largo y rápido.</p>
    </section>

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