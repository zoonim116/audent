<? /* Template Name: Контакты */ ?>
<? get_header(); ?>
<section class="contact-page">
  <div class="container">
    <div class="contact-page-phon">
      <p class="title-block"><?= the_title(); ?></p>
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="row contact-page-phon-item">
            <div class="col-4">
              <img src="<?= get_template_directory_uri(); ?>/img/p1.png" alt="team">
            </div>
            <div class="col-8">
              <a href="tel:+38<?=  favpress_option('audent_option.phone_4');  ?>">+38 <?=  favpress_option('audent_option.phone_4');  ?></a>
              <p><?= __('Городской номер', 'audent'); ?></p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="row contact-page-phon-item">
            <div class="col-4">
              <img src="<?= get_template_directory_uri(); ?>/img/p2.png" alt="team">
            </div>
            <div class="col-8">
              <a href="tel:+38<?=  favpress_option('audent_option.phone1');  ?>">+38 <?=  favpress_option('audent_option.phone_1');  ?></a>
              <p><?= __('Киевстар', 'audent'); ?></p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="row contact-page-phon-item">
            <div class="col-4">
              <img src="<?= get_template_directory_uri(); ?>/img/p3.png" alt="team">
            </div>
            <div class="col-8">
              <a href="tel:+38<?=  favpress_option('audent_option.phone_3');  ?>">+38 <?=  favpress_option('audent_option.phone_3');  ?></a>
              <p><?= __('Vodafone', 'audent'); ?></p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="row contact-page-phon-item">
            <div class="col-4">
              <img src="<?= get_template_directory_uri(); ?>/img/p4.png" alt="team">
            </div>
            <div class="col-8">
              <a href="tel:+38<?=  favpress_option('audent_option.phone_2');  ?>">+38 <?=  favpress_option('audent_option.phone_2');  ?></a>
              <p><?= __('Lifecell', 'audent'); ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="contact-form">
      <p class="title-block"><?= __('Обратная связь', 'audent'); ?></p>
      <? if(have_posts()): while(have_posts()): the_post(); ?>
           <?  the_content() ;?>
       <? endwhile; endif; ?>
      <div class="contact-form-wrap">
          <?= do_shortcode('[contact-form-7 id="126" title="Обратная связь" html_class="row contact-us-form"]'); ?>
      </div>
    </div>
  </div>
</section>
<? get_sidebar( 'map' ); ?>
<? get_footer(); ?>
