<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <TITLE>Dent</TITLE>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body>
<header class="header parallax-wrap">
    <div class="header-top">
        <div class="container">
            <div class="brand-wrap">
                <div class="row">
                    <div class="adress">
                        <p><?= favpress_option('audent_option.address'); ?></p>
                    </div>
                    <div class="logo">
                        <?php
                        $custom_logo_id = get_theme_mod( 'custom_logo' );
                        $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                        ?>
                        <a href="<?php echo home_url('/'); ?>"><img src="<?php echo $logo[0] ; ?>" alt="<?php echo bloginfo('name') ; ?>"></a>
                    </div>
                    <div class="phone">
                        <a href="tel:+38<?= favpress_option('audent_option.phone_1'); ?>" class="phone-kievstar"><?= favpress_option('audent_option.phone_1'); ?></a>
                        <a href="tel:+38<?= favpress_option('audent_option.phone_2'); ?>" class="phone-life"> <?= favpress_option('audent_option.phone_2'); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav>
        <div class="container">
            <?php
            wp_nav_menu( array(
                    'menu'              => 'header-menu',
                    'theme_location'    => 'header-menu')
            );
            ?>

        </div>
    </nav>
    <div class="title-wrap">
        <div class="container">
            <h1 class="title-wrap__h1"><?= favpress_option('audent_option.homepage_title'); ?></h1>
            <h2 class="title-wrap__h2"><?= favpress_option('audent_option.homepage_subtitle'); ?></h2>
        </div>
    </div>
    <div class="form-wrap">
        <div class="container">
           <?= do_shortcode('[contact-form-7 id="47" title="Контактная форма 1" html_class="form-inline row"]'); ?>
        </div>
    </div>
</header>