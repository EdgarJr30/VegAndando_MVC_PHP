<aside class="dashboard__sidebar">
    <nav class="dashboard__menu">
        <a href="/admin/dashboard" class="dashboard__enlace <?php echo pagina_actual('/dashboard') ? 'dashboard__enlace--actual' : ''; ?>">
            <i class="fa-solid fa-house dashboard__icono"></i>
            <span class="dashboard__menu-texto">
                Inicio
            </span>
        </a>

        <a href="/admin/viajes" class="dashboard__enlace <?php echo pagina_actual('/viajes') ? 'dashboard__enlace--actual' : ''; ?>">
            <i class="fa-solid fa-location-dot dashboard__icono"></i>
            <span class="dashboard__menu-texto">
                Viajes
            </span>
        </a>

        <a href="/admin/actividad_opcional" class="dashboard__enlace <?php echo pagina_actual('/actividad_opcional') ? 'dashboard__enlace--actual' : ''; ?>">
            <i class="fa-solid fa-calendar dashboard__icono"></i>
            <span class="dashboard__menu-texto">
                Actividad Opcional
            </span>
        </a>
    </nav>
</aside>