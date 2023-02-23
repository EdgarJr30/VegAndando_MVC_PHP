<?php include_once __DIR__ . './../templates/headerNavbar.php'; ?>
<?php include_once __DIR__ . './../templates/cookies.php'; ?>

<!-- ============ Travel contain slider ============ -->
<section class="new_travel_contain top30px width-aviable">
    <div class="new_travel_title width-aviable">
        <img class="img_flecha" src="/img/png/Icono Logo VegAndando.png" alt="" />
        <h2>Viajes Disponibles</h2>
    </div>
    <!-- ============ Primer Grupo ============ -->
    <div class="box_card_travel_section--viajes width-aviable top30px">
        <?php foreach ($viajes as $viaje) {
            if ($viaje->estatus_id == 1) {; ?>
                <!-- ========= Travel box ========= -->
                <div class="new_travel_section">
                    <div class="travel_contain_slider top30px">
                        <picture>
                            <source srcset="<?php echo $_ENV['HOST'] . '/img/viajes/' . $viaje->imagen; ?>.webp" type="image/webp">
                            <source srcset="<?php echo $_ENV['HOST'] . '/img/viajes/' . $viaje->imagen; ?>.png" type="image/png">
                            <img class="img_viaje--viaje" loading="lazy" src="<?php echo $_ENV['HOST'] . '/img/viajes/' . $viaje->imagen; ?>.png" alt="Imagen Viaje">
                        </picture>
                        <div class="travel_box--agenda">
                            <span><?php echo $viaje->fecha; ?></span>
                            <div class="title_travel_box--agenda width-aviable">
                                <h2><?php echo $viaje->titulo; ?></h2>
                                <p>RD $<?php echo $viaje->precio; ?></p>
                            </div>
                            <div class="paragraph_travel_box--agenda flex_column width-aviable">
                                <p><?php echo $viaje->frase; ?></p>
                            </div>
                            <a class="link_politics" href="/viaje/index?id=<?php echo $viaje->id; ?>">Visitar Viaje</a>
                        </div>
                    </div>
                </div>
        <?php }
        }; ?>
    </div>

    <!-- ============ Viajes Expirados ============ -->
    <div class="new_travel_title width-aviable top60px">
        <img class="img_flecha" src="/img/png/Icono Logo VegAndando.png" alt="" />
        <h2>Viajes Anteriores</h2>
    </div>
    <div class="box_card_travel_section--viajes width-aviable top30px">
        <?php foreach ($viajes as $viaje) {
            if ($viaje->estatus_id == 2) {; ?>
                <!-- ========= Travel box ========= -->
                <div class="new_travel_section expired_filter">
                    <div class="travel_contain_slider">
                        <picture>
                            <source srcset="<?php echo $_ENV['HOST'] . '/img/viajes/' . $viaje->imagen; ?>.webp" type="image/webp">
                            <source srcset="<?php echo $_ENV['HOST'] . '/img/viajes/' . $viaje->imagen; ?>.png" type="image/png">
                            <img class="img_viaje--viaje" loading="lazy" src="<?php echo $_ENV['HOST'] . '/img/viajes/' . $viaje->imagen; ?>.png" alt="Imagen Viaje">
                        </picture>
                        <div class="travel_box--agenda">
                            <span><?php echo $viaje->fecha; ?></span>
                            <div class="title_travel_box--agenda width-aviable">
                                <h2><?php echo $viaje->titulo; ?></h2>
                                <p>RD $<?php echo $viaje->precio; ?></p>
                            </div>
                            <div class="paragraph_travel_box--agenda flex_column width-aviable">
                                <p><?php echo $viaje->frase; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
        <?php }
        }; ?>
    </div>
</section>

<!-- ========== MENU ========== -->
<?php include_once __DIR__ . './../templates/menu.php'; ?>

<!-- ============ Footer ============ -->
<?php include_once __DIR__ . './../templates/footer.php'; ?>