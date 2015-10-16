<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package HitsujiChan
 */

?>
    <!DOCTYPE html>
    <html <?php language_attributes(); ?>>

    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <link href='https://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Architects+Daughter' rel='stylesheet' type='text/css'>
        
        <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'>

        <?php wp_head(); ?>
    </head>

  <!--   <body <?php body_class(); ?>>
<?php myHitsuji(); ?>
        <div class="hitsuchan">
           <?php
                bloginfo('name');
?>
        </div> -->

<?php princessJellyfish(); ?>
        <div class="JuJu">

            <a href="<?php echo get_option('home'); ?>"><img src="https://wpmmp.bmcc.cuny.edu/~abolden/wp-content/uploads/2015/09/FIGHTLIKEAGIRL.png"></a>

        </div>
        
<?php customHeader(); ?>
        <div class="JuJu">
She's Secretly A Magical Girl
        </div>
        
        
        
        <div id="page" class="hfeed site">
            <a class="skip-link screen-reader-text" href="#content">
                <?php esc_html_e( 'Skip to content', 'hitsujichan' ); ?>
            </a>

            <header id="masthead" class="site-header" role="banner">
                <div class="site-branding">
                    <?php if ( is_front_page() && is_home() ) : ?>
                        <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                        <?php else : ?>
                            <p class="site-title">
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                                    <?php bloginfo( 'name' ); ?>
                                </a>
                            </p>
                            <?php endif; ?>
                                <p class="site-description">
                                    <?php bloginfo( 'description' ); ?>
                                </p>
                </div>
                <!-- .site-branding -->

                <nav id="site-navigation" class="main-navigation" role="navigation">
                    <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                        <?php esc_html_e( 'Click For Menu', 'hitsujichan' ); ?>
                    </button>
                    <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
                </nav>
                <!-- #site-navigation -->
            </header>
            <!-- #masthead -->

            <div id="content" class="site-content">