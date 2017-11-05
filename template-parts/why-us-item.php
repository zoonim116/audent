<? extract($template_args); ?>
<div class="col-md-4 why-wrap-item">
    <div class="why-icon wow pulse" data-wow-delay="0.<?= $sec; ?>s">
        <? the_post_thumbnail(); ?>
    </div>
    <p class="why-title"><? the_title(); ?></p>
    <p class="why-content"><? the_content(); ?></p>
</div>