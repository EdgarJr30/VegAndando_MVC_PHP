<!-- Meta Pixel Code -->
<?php include_once __DIR__ . '/metaPixelCode.php'; ?>

<main>
    <?php include_once __DIR__ . './../templates/headerNavbar.php'; ?>

    <?php include_once __DIR__ . './../templates/cookies.php'; ?>

    <img class="palma" src="/img/svg+/mata de coco- light.svg" alt="" />
    <img class="coco" src="/img/svg+/coco-light.svg" alt="" />


    <section class="landing_container">
        <a class="logo_link" href="/home">
            <img src="/img/logos/colorLogo.svg" alt="Logo VegAndando" />
        </a>
        <h2 class="ocupation_landing">Agencia de Viajes</h2>

        <a href="/home" class="text_effect">
            <div class="text_landing">
                <p class="p1_text_landing">¿Estás list@</p>
                <p class="p2_text_landing">para disfrutar</p>
                <p><span class="typed"></span></p>
            </div>
        </a>
    </section>

    <div class="container_video">
        <video id="video" playsinline muted loop autoplay src="/videos/original-video1.mp4"></video>
    </div>

    <div class="buttom_conocemas_box width-aviable">
        <a class="landing_bottom" href="/home">Conoce más</a>
    </div>

    <footer class="width-aviable">
        <div class="socialmedia_footer--landing">
            <div class="social_icon">
                <a href="https://www.instagram.com/vegandandord/" target="_blank">
                    <i class="bx bxl-instagram"></i>
                </a>
                <a href="https://api.whatsapp.com/send?phone=18294544509&text=Hola%20%F0%9F%99%8C%20quiero%20mas%20informaci%C3%B3n%20sobre%20sus%20excursiones" target="_blank">
                    <i class="bx bxl-whatsapp"></i>
                </a>
                <a href="mailto:info@vegandando.com" target="_blank">
                    <i class="bx bx-envelope"></i>
                </a>
            </div>
        </div>
        <div class="copy_right--landing text_center">
            <a href="https://wa.link/1bfn1o">
                <p>+1 809-648-8627</p>
            </a>
            <p>
                Copyright <?php echo date('Y'); ?> &copy; VegAndando.
                <span><a href="https://www.instagram.com/moonco.rd/" target="_blank">By Mooncode</a></span>
                <br class="active" />
                Todos los derechos reservados
            </p>
        </div>
    </footer>
</main>