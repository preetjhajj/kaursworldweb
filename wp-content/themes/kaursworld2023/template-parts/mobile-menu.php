<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="header__left">
        <p>Need help? Call Us</p>
        <p><strong><a href="tel:+13654762955">+1 365-476-2955</a></strong></p>
    </div>
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <?php
                wp_nav_menu(array(
                    'theme_location' => 'main-menu',
                    'container' => true,
                    'menu_class' => '',
                    'fallback_cb' => '__return_false',
                    'items_wrap' => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
                    'depth' => 2,
                    'walker' => new bootstrap_5_wp_nav_menu_walker()
                ));
                ?>
        </div>
    </div>
</nav>