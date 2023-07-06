<div class="travel_description_price">
    <h3>Costo del viaje</h3>
    <p>RD $<?php echo $viaje->precio; ?> p/p</p>
    <span><?php echo $viaje->precio2 ? 'RD $' . $viaje->precio2 : ''; ?></span>
    <span><?php echo $viaje->precio3 ? 'RD $' . $viaje->precio3 : ''; ?></span>
    <!-- ============= Boton Realizar Pago =================-->
    <div class="top15px">
        <a href="/viaje/pago?id=<?php echo $viaje->id; ?>" class="link_politics">Pagar Viaje</a>
    </div>
    <span class="top15px">Reserva con sólo RD$1,000 ¡No reembolsables!</span>
</div>