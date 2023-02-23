<main>
    <?php include_once __DIR__ . './../../templates/headerNavbar.php'; ?>
    <?php include_once __DIR__ . './../../templates/cookies.php'; ?>


    <!-- ===== Title ===== -->
    <section class="new_travel_title width-aviable bottom50px top25px">
        <img class="img_flecha" src="/img/png/Icono Logo VegAndando.png" alt="" />
        <h2>Realiza tu pago y vamonos para <?php echo $viaje->ciudad ?></h2>
    </section>

    <section class="box_pay_descripton width-aviable">
        <!-- ========= Viaje info ========= -->
        <div class="box_card_travel_section_pago width-aviable">
            <div class="travel_contain--pay width-aviable bottom50px">
                <div class="travel_contain_box">
                    <div class="travel_img_box">
                        <img class="img_viaje1" src="../img/viajes/<?php echo $viaje->imagen; ?>.png" alt="" />
                    </div>
                    <div class="travel_description_price--pay">
                        <h3>Costo del viaje</h3>
                        <p>RD $<?php echo $viaje->precio; ?></p>
                    </div>
                </div>
                <p class='important-note'>Nota: Es de vital importancia completar el formulario del viaje que está al final de esta página.</p>
                <a href='#form'><img class='scrolldown' src='/img/svg+/downarrow.svg' /></a>
            </div>

            <div class="formas_de_pago">
                <div class="title_formas_de_pago width-aviable">
                    <h3>Formas de Pago</h3>
                </div>
                <div class="formas_de_pago_box">
                    <!-- ============ Bottom paypal ========== -->

                    <!-- ============ Pay Tranferencia ========== -->
                    <div class="box_pay_method width-aviable bottom15px top60px">
                        <h3>Pagos por Transferencia</h3>
                        <div class="information_paymethod">
                            <div class="personal_contact text_center">
                                <p>A nombre de: <br /><span class="name_banck_account">Yenifer Vega</span></p>
                                <p class="banck_name">- BHD León</p>
                                <p class="banck_num">22800430014</p>
                                <div class="comprobante_pago top15px" id="invoice_button">
                                    <?php include __DIR__ . '/comprobantebtn.php'; ?>
                                </div>
                            </div>
                            <span class="line_section"></span>
                            <div class="personal_contact text_center">
                                <p>A nombre de: <br /><span class="name_banck_account">Liz F Vega</span></p>
                                <p class="banck_name">- Popular</p>
                                <p class="banck_num">822970471</p>
                                <p class="banck_name">- Banreservas</p>
                                <p class="banck_num">9601606858</p>
                                <div class="comprobante_pago top15px" id="invoice_button">
                                    <?php include __DIR__ . '/comprobantebtn.php'; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="important top45px">
            <div class="box_important_content">
                <h4>Importante</h4>
                <p>
                    En la nota de la transferencia debe colocar su nombre, apellido y
                    cual es la excursión que esta reservando, luego enviar el
                    comprobante de pago a uno de los siguientes números para validar
                    el proceso.
                </p>
            </div>
        </div>
        <img class="img_frase_2" src="/img/svg+/chancletas.svg" alt="" />
    </section>

    <!-- ========== CONTACT FORM ========== -->
    <form class="form" action="https://formspree.io/f/myyveqzb" method="POST" id="form">
        <?php include_once __DIR__ . '/form.php'; ?>
    </form>

    <!-- ========== Volver Atras Button =============== -->
    <section class="schedule_button regular_button">
        <a href="/viaje/index?id=<?php echo $viaje->id; ?>">Volver atrás</a>
    </section>

    <!-- ========== MENU ========== -->
    <?php include_once __DIR__ . './../../templates/menu.php'; ?>

    <!-- ========== Footer ========== -->
    <?php include_once __DIR__ . './../../templates/footer.php'; ?>
</main>