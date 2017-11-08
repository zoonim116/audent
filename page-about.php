<? /* Template Name: О нас */ ?>
<? get_header(); ?>
<section class="about-page">
		<div class="container">
			<div class="about-page-content">
				<p class="title-block"><? the_title(); ?></p>
				<div>
          <? if(have_posts()): while(have_posts()): the_post(); ?>
               <?  the_content() ;?>
           <? endwhile; endif; ?>
				</div>
			</div>
			<div class="about-page-team">
				<p class="title-block"><?= __('Наши специалисты', 'audent'); ?></p>
            <? do_action('show-team'); ?>
			</div>
			<div class="about-page-cert">
				<p class="title-block"><?= __('Наши cертификаты', 'audent'); ?></p>
				<div class="zoom-gallery row">
					<? do_action('show-certificates'); ?>
				</div>
			</div>
			<div class="about-page-gallery">
				<p class="title-block"><?= __('Фотогалерея', 'audent'); ?></p>
				<div class="about-page-zoom-gallery row">
          <? do_action('show-gallery'); ?>
				</div>
			</div>
		</div>
	</section>
<? get_footer(); ?>
