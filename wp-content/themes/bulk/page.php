<?php get_header(); ?>

<div class="top-header text-center">
	<?php if ( has_post_thumbnail() ) : ?>
		<div class="single-image">
            <span class="button-page">Buy now</span>
			<?php the_post_thumbnail( 'full' ); ?>
		</div>
	<?php endif; ?>
	<header class="header-title container">
		<h1 class="page-header">
		</h1>
		<?php do_action( 'bulk_after_page_title' ); ?>
	</header>
</div>

<?php get_template_part( 'template-parts/template-part', 'services' ); ?>

<?php

$image = get_field('main_home', 'getha');

if( !empty($image) ): ?>

    <div class="banner"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></div>

<?php endif; ?>

<?php get_template_part( 'template-parts/template', 'homepage' ); ?>


<?php get_footer(); ?>
