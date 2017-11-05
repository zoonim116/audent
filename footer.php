<footer class="footer">
    <nav>
        <div class="container">
            <?
            wp_nav_menu( array(
                    'menu'              => 'footer-menu',
                    'theme_location'    => 'footer-menu')
            );
            ?>
        </div>
    </nav>
    <div class="container">
        <div class="brand-wrap">
            <div class="row">
                <div class="adress">
                    <p><?= favpress_option('audent_option.address'); ?></p>
                </div>
                <div class="logo">
                    <?
                    $custom_logo_id = get_theme_mod( 'custom_logo' );
                    $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                    ?>
                    <a href="#"><img src="<?= $logo[0] ; ?>" alt="<?= bloginfo('name') ; ?>"></a>
                </div>
                <div class="phone">
                    <a href="tel:+38<?= favpress_option('audent_option.phone_1'); ?>" class="phone-kievstar"><?= favpress_option('audent_option.phone_1'); ?></a>
                    <a href="tel:+38<?= favpress_option('audent_option.phone_2'); ?>" class="phone-life"> <?= favpress_option('audent_option.phone_2'); ?></a>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>