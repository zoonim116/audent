<? get_header(); ?>
<section class="service-page">
		<div class="service-page-title">
			<div class="container">
				<div>
          <? do_action('show-service-category'); ?>
				</div>
				<div>
					<h2 class="service-page-title-bottom"><? the_title(); ?></h2>
				</div>
			</div>
		</div>
		<div class="form-wrap">
				<div class="container">
          <div class="form-content">
              <p><?=  favpress_option('audent_option.homepage_form_title');  ?></p>
              <p><?=  favpress_option('audent_option.homepage_form_subtitle');  ?></p>
          </div>
          <?= do_shortcode('[contact-form-7 id="47" title="Контактная форма 1" html_class="form-inline row"]'); ?>
				</div>
		</div>
		<div class="service-page-content">
			<div class="container">
        <? if(have_posts()): while(have_posts()): the_post(); ?>
             <?  the_content() ;?>
         <? endwhile; endif; ?>
			</div>
		</div>
	</section>
<? get_footer(); ?>
