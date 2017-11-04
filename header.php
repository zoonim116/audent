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
                        <p><?= get_option('audent_settings')['audent_text_field_0']; ?></p>
                    </div>
                    <div class="logo">
                        <?php
                        $custom_logo_id = get_theme_mod( 'custom_logo' );
                        $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                        ?>
                        <a href="<?php echo home_url('/'); ?>"><img src="<?php echo $logo[0] ; ?>" alt="<?php echo bloginfo('name') ; ?>"></a>
                    </div>
                    <div class="phone">
                        <a href="tel:+38<?= get_option('audent_settings')['audent_text_field_1']; ?>" class="phone-kievstar"><?= get_option('audent_settings')['audent_text_field_1']; ?></a>
                        <a href="tel:+38<?= get_option('audent_settings')['audent_text_field_2']; ?>" class="phone-life"> <?= get_option('audent_settings')['audent_text_field_2']; ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav>
        <div class="container">
            <ul>
                <li><a href="#" class="active">Главная</a></li>
                <li><a href="#">Услуги</a>
                    <ul class="drop-menu">
                        <li><a href="">Терапия</a></li>
                        <li><a href="">Профилактика</a></li>
                        <li><a href="">Эстетическая стоматология</a></li>
                        <li><a href="">Хирургия</a></li>
                        <li><a href="">Имплантация</a></li>
                        <li><a href="">Пародонтология</a></li>
                    </ul>
                </li>
                <li><a href="#">О нас</a></li>
                <li><a href="#">Контакты</a></li>
            </ul>
        </div>
    </nav>
    <div class="title-wrap">
        <div class="container">
            <h1 class="title-wrap__h1">Позаботьтесь о здоровье своих зубов сегодня</h1>
            <h2 class="title-wrap__h2">Ваша улыбка - ваша уверенность в себе</h2>
        </div>
    </div>
    <div class="form-wrap">
        <div class="container">
            <form class="form-inline row">
                <div class="form-group col-sm-3">
                    <input type="text" class="form-control" id="name" placeholder="Ваше имя">
                </div>
                <div class="form-group col-sm-3">
                    <input name="phone" class="form-control" type="tel" id="phone" tabindex="0" required="" pattern="^[ 0-9]+$" aria-required="true" placeholder="Номер телефона">
                </div>
                <div class="form-group col-sm-3">
                    <input type='text' class="form-control" placeholder="Желаемая дата" id='datetimepicker4' />
                </div>
                <div class="form-group col-sm-3">
                    <button type="submit" class="btn btn-primary">Записаться на прием</button>
                </div>
            </form>
        </div>
    </div>
</header>