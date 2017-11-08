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
<? if(is_front_page()): ?>
<header class="header parallax-wrap">
    <div class="header-top">
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
                        <a href="<?= home_url('/'); ?>"><img src="<?= $logo[0] ; ?>" alt="<?= bloginfo('name') ; ?>"></a>
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
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
					  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					    <span class="navbar-toggler-icon"></span>
					  </button>

            <?
            wp_nav_menu( array(
                    'menu'              => 'header-menu',
                    'theme_location'    => 'header-menu',
                    'items_wrap' => '<ul class="menu clearfix">%3$s</ul>',
            ));
            ?>
				</nav>

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
<? else: ?>
<header class="header">
		<div class="header-top">
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
              <a href="<?= home_url('/'); ?>"><img src="<?= $logo[0] ; ?>" alt="<?= bloginfo('name') ; ?>"></a>
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
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <?
            wp_nav_menu( array(
                    'menu'              => 'header-menu',
                    'theme_location'    => 'header-menu',
                    'items_wrap' => '<ul class="menu clearfix">%3$s</ul>',
            ));
            ?>
        </nav>
        </div>
    </nav>
	</header>
<? endif; ?>
