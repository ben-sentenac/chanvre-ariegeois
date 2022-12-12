<?php get_header(); ?>

<main class="page-container pt-100 <?= CBD\CBDTheme::get_theme_page_template(); ?>">
	<section class="cbd-default-section">
		<?php if (have_posts()):
	    while (have_posts()):
		    the_post(); ?>

		<h1>
			<?php the_title(); ?>
		</h1>

		<?php the_content(); ?>

		<?php endwhile; endif; ?>
	</section>


</main>

<?php get_footer(); ?>