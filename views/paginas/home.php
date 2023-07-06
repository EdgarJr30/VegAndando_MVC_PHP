<!-- Meta Pixel Code -->
<?php include_once __DIR__ . '/metaPixelCode.php'; ?>

<link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />

<main>
    <?php include_once __DIR__ . './../templates/headerNavbar.php'; ?>
    <?php include_once __DIR__ . './../templates/cookies.php'; ?>

    <!-- ============ Home Section ============ -->
    <section class="home_section width-aviable flex_column top_margin">
        <img class="img_home" src="/img/logos/colorLogo.svg" alt="" />
        <img id="Stree-coco" src="/img/svg+/mata de coco - grey.svg" alt="" />
        <img id="Stree-coco1" src="/img/svg+/mata de coco- light.svg " alt="" />
        <img id="sol" src="/img/svg+/sol-grey.svg" alt="" />
        <img id="coco" src="/img/svg+/coco-light.svg" alt="" />
        <div class="home_minibox width-aviable">
            <img class="hero_image" src="/img/png/hero.png" alt="" />
            <div class="experience_frase flex_column">
                <h1>Viaja, Vive, Explora con <span>@vegandandord</span> Agencia de Viajes</h1>
                <a href="#viajes"><img class="scrolldown" src="/img/svg+/downarrow.svg" alt="" /></a>
            </div>
        </div>
    </section>

    <!-- ============ Travel contain slider ============ -->
    <section id="viajes" class="new_travel_contain width-aviable flex_column">
        <div class="new_travel_title width-aviable">
            <img class="img_flecha" src="/img/png/Icono Logo VegAndando.png" alt="" />
            <h2 class="">Viajes Disponibles</h2>
        </div>
        <!-- ========= Travel boxes ========= -->
        <div class="box_card_travel_section flex_column width-aviable top_margin">
             <div class="product-card">
            <div class="badge">Hot</div>
            <div class="product-tumb">
                <img src="https://i.imgur.com/xdbHo4E.png" alt="">
            </div>
            <div class="product-details">
                <span class="product-catagory">Women,bag</span>
                <h4><a href="">Women leather bag</a></h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, possimus nostrum!</p>
                <div class="product-bottom-details">
                    <div class="product-price"><small>$96.00</small>$230.99</div>
                    <div class="product-links">
                        <a href=""><i class="fa fa-heart"></i></a>
                        <a href=""><i class="fa fa-shopping-cart"></i></a>
                    </div>
                </div>
            </div>
        </div>
            <?php foreach ($viajes as $viaje) {
                if ($viaje->estatus_id == 1) {; ?>
                    <!-- ========= Travel box ========= -->
                    <div class="travel_contain_slider top30px">
                        <div class="img_viaje">
                            <picture>
                                <source srcset="<?php echo $_ENV['HOST'] . '/img/viajes/' . $viaje->imagen; ?>.webp" type="image/webp" style="object-fit:cover; object-position: center; width:350px; height:600px;">
                                <source srcset="<?php echo $_ENV['HOST'] . '/img/viajes/' . $viaje->imagen; ?>.png" type="image/png" style="object-fit:cover; object-position: center; width:350px; height:600px;">
                                <img class="img_viaje" loading="lazy" src="<?php echo $_ENV['HOST'] . '/img/viajes/' . $viaje->imagen; ?>.png" alt="Imagen Viaje" style="object-fit:cover; object-position: center; width:350px; height:600px;">
                            </picture>
                        </div>
                        <div class="travel_box">
                            <span><?php echo $viaje->fecha; ?></span>
                            <div class="title_travel_box width-aviable">
                                <h2><?php echo $viaje->titulo; ?></h2>
                                <p>RD$<?php echo $viaje->precio; ?></p>
                            </div>
                            <div class="paragraph_travel_box flex_column width-aviable">
                                <p><?php echo $viaje->frase; ?></p>
                            </div>
                            <div>
                                <a href="/viaje/index?id=<?php echo $viaje->id; ?>" class="link_politics">Visitar Viaje</a>
                            </div>
                        </div>
                    </div>
            <?php }
            }; ?>
        </div>

        <a href="./agendadeviajes" class="regular_button">Ver todos los Viajes</a>
    </section>

    <!-- ============ Frase Section ============ -->
    <section class="frase_section top_margin">
        <div class="text_frase_section width-aviable">
            <p>Te acompañamos a explorar los rincones mas bellos de la República Dominicana.</p>
        </div>
    </section>

    <!-- <img class="img_frase_2" src="/img/svg+/chancletas.svg" alt="" /> -->

    <!-- ============ Icon Section ============ -->
    <section class="icon_section_home width-aviable bottom50px">
        <div class="title_icon_section flex_column">
            <div class="info_section">
                <h2>Infórmate</h2>
                <i class="bx bx-info-circle"></i>
            </div>
        </div>
        <div class="icon_contain">
            <a href="https://www.google.com/calendar" target="_blank" class="flex_column">
                <div class="icon_select icon_1">
                    <img src="/img/svg+/calendario.svg" alt="" />
                </div>
                <p class="text_icon_home">Calendario</p>
            </a>
            <a href="./blog.html" target="_blank" class="flex_column">
                <div class="icon_select">
                    <img src="/img/svg+/blog.svg" alt="" />
                </div>
                <p class="text_icon_home">Blog</p>
            </a>
            <a href="https://api.whatsapp.com/send?phone=18294544509&text=Hola%20%F0%9F%99%8C%20quiero%20mas%20informaci%C3%B3n%20sobre%20sus%20excursiones" target="_blank" class="flex_column">
                <div class="icon_select icon_3">
                    <img src="/img/svg+/call.svg" alt="" />
                </div>
                <p class="text_icon_home">Contáctanos</p>
            </a>
        </div>
    </section>

    <!-- ============ Our Branding Section ============ -->
    <section class="our_branding_contain flex_column width-aviable">
        <div class="our_branding_box flex_column top_margin">
            <div class="new_travel_title width-aviable">
                <img class="img_flecha" src="/img/png/Icono Logo VegAndando.png" alt="" />
                <h2 class="">Nuestra Marca</h2>
            </div>

            <div class="text_our_branding flex_column bottom50px">
                <p>¿Cómo nace VegAndando?</p>
                <p>
                    VegAndando nace de las entrañas de Las Vega, dos hermanas viajeras
                    que desde niñas aprendieron a disfrutar de la naturaleza, a través
                    del camping, el senderismo y las actividades al aire libre.
                </p>

                <div class="link_our_funders width-aviable flex_column top15px">
                    <a href="/about">Saber Más</a>
                </div>
            </div>
            <div class="colors_desription flex_column">
                <img src="/img/logos/colorLogo.svg" alt="Logo VegAndando" />
                <img src="/img/svg+/logo-color-description.svg" alt="" />
            </div>
        </div>
    </section>

    <!-- ============ Our funders section ============ -->
    <section class="our_funders_contain flex_column width-aviable top_margin">
        <div class="new_travel_title width-aviable bottom50px">
            <img class="img_flecha" src="/img/png/Icono Logo VegAndando.png" alt="" />
            <h2 class="">Nuestras Fundadoras</h2>
        </div>

        <div class="our_funders_box top25px">

            <div class="our_funders_card flex_column">
                <div class="circle_card">
                    <img class="width-aviable" src="/img/png/yeniferprofile.jpeg" alt="" />
                </div>
                <div class="text_our_funders flex_column">
                    <h3>Yenifer vega</h3>
                    <p>
                        Mis amigos me dicen Yeni, soy Ing química, Tec agronoma, y
                        agente de viajes. Mi primer trabajo formal fue como agente de
                        desarrollo agrícola en una comunidad rural de San Jose de
                        Ocoa...
                    </p>
                </div>
            </div>

            <div class="our_funders_card flex_column">
                <div class="circle_card">
                    <img class="width-aviable" src="/img/png/lizFranco.jpeg" alt="" />
                </div>
                <div class="text_our_funders flex_column">
                    <h3>Liz F Vega</h3>
                    <p>
                        Soy Liz coanfitriona de Vegandando, actualmente estudio
                        Comunicación Social, mención Relaciones Públicas. Mi amor por la
                        naturaleza inició desde muy temprano, ya que a los 6 añitos
                        empecé a acampar a través del club de aventureros...
                    </p>
                </div>
            </div>
        </div>
        <div class="link_our_funders width-aviable flex_column">
            <a href="/about">Saber Más</a>
        </div>
    </section>

    <!-- ============ Politica de calidad section ============ -->
    <section class="politics_contain flex_column top_margin width-aviable">
        <div class="politics_box">
            <img src="/img/svg+/list@-para-irnos.svg" alt="" />
            <div class="text_politics flex_column">
                <p>Antes lee nuestra</p>
                <h3>Política de Calidad</h3>
                <p>y el proceso para</p>
                <h3>Cancelar viajes</h3>
                <a class="link_politics" href="/politicadepago">Saber Más</a>
            </div>
        </div>
    </section>

    <!-- ========== MENU ========== -->
    <?php include_once __DIR__ . './../templates/menu.php'; ?>

    <!-- ============ Footer ============ -->
    <?php include_once __DIR__ . './../templates/footer.php'; ?>
</main>