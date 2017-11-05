<?php get_header(); ?>

<section class="job-wrap">
    <div class="container">
        <p class="title-block"><?= __('Что мы делаем', 'audent'); ?></p>
        <div class="panel-group" id="accordion">
            <? do_action('get-list-of-services'); ?>
        </div>
    </div>
</section>
<section class="carousel">
    <?= do_shortcode('[metaslider id=7]'); ?>
</section>
<section class="about-us">
    <div class="container">
        <div class="about-us-text">
            <p class="title-block"><?= __('О нашей клинике', 'audent'); ?></p>
            <div class="about-us-text-content">
               <?=  favpress_option('audent_option.homepage_about_ud');  ?>
            </div>
        </div>
        <div class="about-us-team">
            <p class="title-block"><?=  __('Наши специалисты', 'audent'); ?></p>
            <div class="row">
                    <? echo do_action('show-team-on-homepage'); ?>
            </div>
            <a href="<? the_permalink(favpress_option('audent_option.about_us_page')) ?>" class="btn btn-primary">Подробнее о клинике</a>
        </div>
    </div>
</section>
<section class="why-wrap">
    <div class="container">
        <p class="title-block"><?= __('Почему стоит выбрать “АЮДЕНТ”', 'audent'); ?></p>
        <div class="row">
            <?= do_action('show-why-us'); ?>

        </div>
    </div>
</section>
<section class="form-wrap">
    <div class="container">
        <div class="form-content">
            <p>Не откладывайте визит к стоматологу на потом</p>
            <p>Сделайте свою улыбку сдоровее вместе с нами</p>
        </div>
        <?= do_shortcode('[contact-form-7 id="47" title="Контактная форма 1" html_class="form-inline row"]'); ?>
    </div>
</section>

<?php get_footer(); ?>
