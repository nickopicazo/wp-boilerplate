<?php

class App_Customize extends App_Kirki {

  private $prefix = 'app_';

  public function __construct() {

    $this->add_config( 'app', array(
        'capability'    => 'edit_theme_options',
        'option_type'   => 'option',
        'option_name'   => 'my_theme',
    ) );

    $this->add_customize_panel( 'header', 'Header' );
    $this->add_customize_section( 'header', 'header_section', 'Section Title', 'Section Description', 160, 'edit_theme_options' );

    $this->add_field( 'app', array(
    	'type'        => 'radio-image',
    	'settings'    => 'my_setting',
    	'label'       => esc_html__( 'Radio Control', 'app' ),
    	'section'     => 'app_header_section',
    	'default'     => 'red',
    	'priority'    => 10,
    	'choices'     => array(
    		'red'   => get_template_directory_uri() . '/assets/images/red.png',
    		'green' => get_template_directory_uri() . '/assets/images/green.png',
    		'blue'  => get_template_directory_uri() . '/assets/images/blue.png',
    	),
    ) );

  }

  public function add_customize_panel( $id, $name, $desc = "", $priority = 100 ) {

    $this->add_panel( $this->prefix . $id, array(
        'priority'    => $priority,
        'title'       => __( $name, 'app' ),
        'description' => __( $desc, 'app' ),
    ) );

  }

  public function add_customize_section( $panel, $id, $name, $desc = "", $priority, $capability, $theme_supports = '' ) {

    $this->add_section( $this->prefix . $id, array(
        'title'          => __( $name, 'app' ),
        'description'    => __( $desc, 'app' ),
        'panel'          => $this->prefix . $panel,
        'priority'       => $priority,
        'capability'     => $capability,
        'theme_supports' => $theme_supports,
    ) );

  }

}

?>
