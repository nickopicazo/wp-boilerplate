<?php

error_reporting( E_ALL );

require_once( get_template_directory() . '/inc/class-app.php' );
require_once( get_template_directory() . '/lib/aristath/kirki/kirki.php' );

$app = new App;

$input = get_template_directory() . '/less/main.less';
$output = get_template_directory() . '/css/main.css';

//$app->app_less_compile( $input, $output );

$app->app_register_nav_menu( array( 'primary' => 'Primary Navigation', 'secondary' => 'Secondary Navigation' ) );

Kirki::add_config( 'my_theme', array(
    'capability'    => 'edit_theme_options',
    'option_type'   => 'option',
    'option_name'   => 'my_theme',
) );

/**
 * Add panels
 */
Kirki::add_panel( 'app_panel', array(
    'priority'    => 100,
    'title'       => __( 'Panel Title', 'app' ),
    'description' => __( 'Panel Description', 'app' ),
) );

/**
 * Add sections
 */
Kirki::add_section( 'app_section', array(
    'title'          => __( 'Section Title', 'app' ),
    'description'    => __( 'Section Description', 'app' ),
    'panel'          => 'app_panel', // Not typically needed.
    'priority'       => 160,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

Kirki::add_field( 'my_config', array(
	'type'        => 'radio-image',
	'settings'    => 'my_setting',
	'label'       => esc_html__( 'Radio Control', 'app' ),
	'section'     => 'app_section',
	'default'     => 'red',
	'priority'    => 10,
	'choices'     => array(
		'red'   => get_template_directory_uri() . '/assets/images/red.png',
		'green' => get_template_directory_uri() . '/assets/images/green.png',
		'blue'  => get_template_directory_uri() . '/assets/images/blue.png',
	),
) );

?>
