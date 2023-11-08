<!DOCTYPE html>
<html xmlns:fb="http://ogp.me/ns/fb#" class="no-ie" <?php language_attributes(); ?>>
<head>
<title><?php wp_title( '|', true, 'right' ); bloginfo('name'); ?></title>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="description" content="<?php bloginfo('description'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
<link rel="stylesheet/less" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.less" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header>
	<button id="mobile-menu" class="" onclick="menuMobile()" name="Menu de navegação">Abrir</button>

	<a class="logo-nomad" title="NomadRoots" href="<?php echo get_home_url(); ?>" rel="Home">NomadRoots</a>

	<div class="main-menu">
		<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
		<a class="logo" title="NomadRoot" href="<?php echo get_home_url(); ?>" rel="Home">NomadRoot</a>
	</div>
</header>