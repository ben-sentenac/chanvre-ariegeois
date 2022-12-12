<?php get_header();?>

<main class="page-container<?= CBD\CBDTheme::get_theme_page_template();?>">

<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
    
    	
    <?php get_template_part('template-parts/content/content', 'home'); ?>

	<?php endwhile; endif; ?>

</main>

<?php get_footer(); ?>