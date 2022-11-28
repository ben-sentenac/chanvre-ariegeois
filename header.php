<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <?php CBD\CBDTheme::getGoogleFonts(); ?>
    <?php CBD\CBDTheme::getFontawesome(); ?><!-- fontawesome -->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    
    <?php wp_body_open(); ?>
<div class="page-wrapper">
<?php get_template_part('template-parts/header/header'); ?>
<?php get_template_part('template-parts/header/site-branding'); ?>