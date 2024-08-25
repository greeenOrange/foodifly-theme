<header class="header-section d-xl-block">
        <div class="container-fluid">
            <div class="header-area">
            <div class="logo">
                        <?php foodifly_header_logo(); ?>
                    </div>

                    <nav class="main-menu">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'primary_menu',
                            'container' => '',
                            'menu_class' => '',
                            'fallback_cb' => 'foodifly_Walker_Nav_Menu',
                            'walker' => new foodifly_Walker_Nav_Menu(),
                        ));
                        ?>
                    </nav>
            </div>
        </div>

</header>