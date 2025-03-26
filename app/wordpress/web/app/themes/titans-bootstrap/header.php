<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="site-header sticky-top py-1" style="">
	<nav class="container d-flex flex-column flex-md-row justify-content-between">
		<a class="py-2" href="<?php echo esc_url(home_url('/')); ?>" aria-label="Product">
			<?php bloginfo('name'); ?>
		</a>
		<a class="py-2 d-none d-md-inline-block" href="#">Tour</a>
		<a class="py-2 d-none d-md-inline-block" href="#">Product</a>
		<a class="py-2 d-none d-md-inline-block" href="#">Features</a>
		<a class="py-2 d-none d-md-inline-block" href="#">Enterprise</a>
		<a class="py-2 d-none d-md-inline-block" href="#">Support</a>
		<a class="py-2 d-none d-md-inline-block" href="#">Pricing</a>
		<a class="py-2 d-none d-md-inline-block" href="#">Cart</a>
	</nav>
</header>

<main>