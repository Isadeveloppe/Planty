<?php
/**
 * The Header for our theme.
 *
 * @package OceanWP WordPress theme
 */

?>
<!DOCTYPE html>
<html class="<?php echo esc_attr( oceanwp_html_classes() ); ?>" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer">


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php oceanwp_schema_markup( 'html' ); ?>>

<header>
      <nav class="navbar navbar-expand-lg bg-body-tertiary navform">
        <div class="container-fluid nav-bar">
        <a href="<?php echo get_home_url();?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Logo.png" alt="logo planty" class="logo"></a>
            
            
                        
                <?php wp_nav_menu([
                    'theme_location' =>'header',
                    'menu_class' =>'menu-class-container',
                    
                ]);?>

                <!--
                <ul class="menu-navigation-container"
                    <li class="nav-item active">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item active" >
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                 -->        
           
        </div>
            
    </nav>
    </header>


    <?php wp_body_open(); ?>

<?php do_action( 'ocean_before_outer_wrap' ); ?>



	<div id="wrap" class="clr">


	

		<?php do_action( 'ocean_before_main' ); ?>

		<main id="main" class="site-main clr"<?php oceanwp_schema_markup( 'main' ); ?> role="main">

			<?php do_action( 'ocean_page_header' ); ?>


	

	

		
