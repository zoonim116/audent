<?php get_header(); ?>

<section class="job-wrap">
    <div class="container">
        <p class="title-block"><?= __('Что мы делаем', 'audent'); ?></p>
        <div class="panel-group" id="accordion">
            <? do_action('get-list-of-services'); ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>
