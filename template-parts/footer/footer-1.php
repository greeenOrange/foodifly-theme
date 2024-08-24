<footer class="footer home-5" style="background: #bb6df7;">
    <div class="container">
        <div class="footer-top">
            <div class="footer-area text-center">
                <div class="footer-logo">
                    <?php foodifly_footer_logo();
                    ?>
                </div>

                <div class="scocial-media">
                    <?php foodifly_footer_social();
                    ?>
                </div>
                <?php if (is_active_sidebar('footer-widget-01')) : ?>
                    <div class="footer-menu">
                        <?php dynamic_sidebar('footer-widget-01'); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="footer-bottom text-center">
        <?php foodifly_footer_copyright(); ?>
    </div>
</footer>