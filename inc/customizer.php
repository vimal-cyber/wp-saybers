<?php
/*

*/

//radio box sanitization function
        function saybers_sanitize_radio( $input, $setting ){
          
            //input must be a slug: lowercase alphanumeric characters, dashes and underscores are allowed only
            $input = sanitize_key($input);
  
            //get the list of possible radio box options 
            $choices = $setting->manager->get_control( $setting->id )->choices;
                              
            //return input if valid or return default option
            return ( array_key_exists( $input, $choices ) ? $input : $setting->default );                
              
        }


function saybers_customize_register( $wp_customize ) {
  // Do stuff with $wp_customize, the WP_Customize_Manager object.
  $wp_customize->add_panel( 'saybers settings', array(
    'title'     => 'Saybers settings',
    'description' => '',
    'priority'    => '10',

  ) );
// About us section
  $wp_customize->add_section( 'saybers_one_in', array(
    'title'          => esc_html__( 'About Us Section', 'saybers' ),
    'description'    => esc_html__( 'About Us Section', 'saybers' ),
    'panel'          => 'saybers settings',
    'priority'       => 160,
  ) );

  $wp_customize->add_setting( 'toggle_about_us', array(
    'type' => 'theme_mod', // or 'option'
    'capability' => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
    'default' => 'on',
    'transport' => 'refresh', // or postMessage
    'sanitize_callback' => 'saybers_sanitize_radio', // Basically to_json.
  ) );

  $wp_customize->add_control( 'toggle_about_us', array(
    'type'     => 'radio',
    'priority' => 10, // Within the section.
    'section' => 'saybers_one_in', // Required, core or custom.
    'label' => esc_html__( 'Enable About Us?', 'saybers' ),
    'choices'     => [
		'on'  => esc_html__( 'Enable', 'saybers' ),
		'off' => esc_html__( 'Disable', 'saybers' ),
	],
  ) );
  
  $wp_customize->add_setting( 'text_about', array(
    'type' => 'theme_mod', // or 'option'
    'capability' => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
    'default' => esc_html__( 'About Us', 'saybers' ),
    'transport' => 'refresh', // or postMessage
    'sanitize_callback' => 'wp_filter_nohtml_kses', // Basically to_json.
  ) );

  $wp_customize->add_control( 'text_about', array(
    'type'     => 'text',
    'priority' => 10, // Within the section.
    'section' => 'saybers_one_in', // Required, core or custom.
    'label' => esc_html__( 'Heading for section', 'saybers' ),
    'active_callback' => 'is_front_page',
  ) );

  $wp_customize->add_setting( 'text_about_dec', array(
    'type' => 'theme_mod', // or 'option'
    'capability' => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
    'default' => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing elit', 'saybers' ),
    'transport' => 'refresh', // or postMessage
    'sanitize_callback' => 'wp_filter_nohtml_kses', // Basically to_json.
  ) );

  $wp_customize->add_control( 'text_about_dec', array(
    'type'     => 'textarea',
    'priority' => 10, // Within the section.
    'section' => 'saybers_one_in', // Required, core or custom.
    'label' => esc_html__( 'One line description', 'saybers' ),
    'active_callback' => 'is_front_page',
  ) );

  $wp_customize->add_setting( 'text_about_sub_heading', array(
    'type' => 'theme_mod', // or 'option'
    'capability' => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
    'default' => esc_html__( '25 Years of Experience', 'saybers' ),
    'transport' => 'refresh', // or postMessage
    'sanitize_callback' => 'wp_filter_nohtml_kses', // Basically to_json.
  ) );

  $wp_customize->add_control( 'text_about_sub_heading', array(
    'type'     => 'text',
    'priority' => 10, // Within the section.
    'section' => 'saybers_one_in', // Required, core or custom.
    'label' => esc_html__( ' Sub-Heading for section', 'saybers' ),
    'active_callback' => 'is_front_page',
  ) );

  $wp_customize->add_setting( 'text_about_sub_dec', array(
    'type' => 'theme_mod', // or 'option'
    'capability' => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
    'default' => esc_html__( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'saybers' ),
    'transport' => 'refresh', // or postMessage
    'sanitize_callback' => 'wp_filter_nohtml_kses', // Basically to_json.
  ) );

  $wp_customize->add_control( 'text_about_sub_dec', array(
    'type'     => 'textarea',
    'priority' => 10, // Within the section.
    'section' => 'saybers_one_in', // Required, core or custom.
    'label' => esc_html__( 'Description', 'saybers' ),
    'active_callback' => 'is_front_page',
  ) );

  $wp_customize->add_setting( 'image_about', array(
    'type' => 'theme_mod', // or 'option'
    'capability' => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
    'default' => 'images/about/about.jpg',
    'transport' => 'refresh', // or postMessage
    'sanitize_callback' => 'wp_filter_nohtml_kses', // Basically to_json.
  ) );

  $wp_customize->add_control( new WP_Customize_Cropped_Image_Control( $wp_customize, 'image_about', array(
    'label' => esc_html__( 'Select Image', 'saybers' ),
    'description' => esc_html__( 'Click "Select image" size 800x530.', 'saybers' ),
    'section' => 'saybers_one_in',
    'mime_type' => 'image',
    //'flex_width'  => 800, // Allow any width, making the specified value recommended. False by default.
    //'flex_height' => false, // Require the resulting image to be exactly as tall as the height attribute (default).
    'width'       => 800,
    'height'      => 530,
  ) ) );

  $wp_customize->add_setting( 'link_about', array(
    'type' => 'theme_mod', // or 'option'
    'capability' => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
    'default' => 'https://www.youtube.com/watch?v=E7A5rXHp_AI',
    'transport' => 'refresh', // or postMessage
    'sanitize_callback' => 'esc_url_raw', // Basically to_json.
  ) );

  $wp_customize->add_control( 'link_about', array(
    'type'     => 'url',
    'priority' => 10, // Within the section.
    'section' => 'saybers_one_in', // Required, core or custom.
    'label' => __( 'Video URL', 'saybers' ),
    'active_callback' => 'is_front_page',
  ) );

// Services Section
  $wp_customize->add_section( 'saybers_our_services', array(
    'title'          => esc_html__( 'Our Servces section', 'saybers' ),
    'description'    => esc_html__( 'Our Servces section', 'saybers' ),
    'panel'          => 'saybers settings',
    'priority'       => 160,
  ) );

  $wp_customize->add_setting( 'toggle_our_services', array(
    'type' => 'theme_mod', // or 'option'
    'capability' => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
    'default' => 'on',
    'transport' => 'refresh', // or postMessage
    'sanitize_callback' => 'saybers_sanitize_radio', // Basically to_json.
  ) );

  $wp_customize->add_control( 'toggle_our_services', array(
    'type'     => 'radio',
    'priority' => 10, // Within the section.
    'section' => 'saybers_our_services', // Required, core or custom.
    'label' => esc_html__( 'Enable Our Services?', 'saybers' ),
    'choices'     => [
		'on'  => esc_html__( 'Enable', 'saybers' ),
		'off' => esc_html__( 'Disable', 'saybers' ),
	],
  ) );

  $wp_customize->add_setting( 'text_services', array(
    'type' => 'theme_mod', // or 'option'
    'capability' => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
    'default' => esc_html__( 'Our Services', 'saybers' ),
    'transport' => 'refresh', // or postMessage
    'sanitize_callback' => 'wp_filter_nohtml_kses', 
  ) );

  $wp_customize->add_control( 'text_services', array(
    'type'     => 'text',
    'priority' => 10, // Within the section.
    'section' => 'saybers_our_services', // Required, core or custom.
    'label' => esc_html__( 'Heading for section', 'saybers' ),
    'active_callback' => 'is_front_page',
  ) );

  $wp_customize->add_setting( 'text_services_dec', array(
    'type' => 'theme_mod', // or 'option'
    'capability' => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
    'default' => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing elit', 'saybers' ),
    'transport' => 'refresh', // or postMessage
    'sanitize_callback' => 'wp_filter_nohtml_kses', // Basically to_json.
  ) );

  $wp_customize->add_control( 'text_services_dec', array(
    'type'     => 'textarea',
    'priority' => 10, // Within the section.
    'section' => 'saybers_our_services', // Required, core or custom.
    'label' => esc_html__( 'One line description', 'saybers' ),
    'active_callback' => 'is_front_page',
  ) );

// Statistic Section
  $wp_customize->add_section( 'saybers_our_statistic', array(
    'title'          => esc_html__( 'Our Statistic section', 'saybers' ),
    'description'    => esc_html__( 'Our Statistic section', 'saybers' ),
    'panel'          => 'saybers settings',
    'priority'       => 160,
  ) );

  $wp_customize->add_setting( 'toggle_our_statistic', array(
    'type' => 'theme_mod', // or 'option'
    'capability' => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
    'default' => 'on',
    'transport' => 'refresh', // or postMessage
    'sanitize_callback' => 'saybers_sanitize_radio', // Basically to_json.
  ) );

  $wp_customize->add_control( 'toggle_our_statistic', array(
    'type'     => 'radio',
    'priority' => 10, // Within the section.
    'section' => 'saybers_our_statistic', // Required, core or custom.
    'label' => esc_html__( 'Enable Our Statistic?', 'saybers' ),
    'choices'     => [
		'on'  => esc_html__( 'Enable', 'saybers' ),
		'off' => esc_html__( 'Disable', 'saybers' ),
	],
  ) );

  $wp_customize->add_setting( 'one_stat_icon', array(
    'type' => 'theme_mod', // or 'option'
    'capability' => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
    'default' => esc_html__( 'icon icon-clock', 'saybers' ),
    'transport' => 'refresh', // or postMessage
    'sanitize_callback' => 'wp_filter_nohtml_kses', // Basically to_json.
  ) );

  $wp_customize->add_control( 'one_stat_icon', array(
    'type'     => 'text',
    'priority' => 10, // Within the section.
    'section' => 'saybers_our_statistic', // Required, core or custom.
    'description' => esc_html__( 'font-awsome or any other iclon class i.e far fa-clock, icon-clock', 'saybers' ),
    'active_callback' => 'is_front_page',
  ) );

  $wp_customize->add_setting( 'one_stat_num', array(
    'type' => 'theme_mod', // or 'option'
    'capability' => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
    'default' => esc_html__( '25', 'saybers' ),
    'transport' => 'refresh', // or postMessage
    'sanitize_callback' => 'absint', // Basically to_json.
  ) );

  $wp_customize->add_control( 'one_stat_num', array(
    'type'     => 'number',
    'priority' => 10, // Within the section.
    'section' => 'saybers_our_statistic', // Required, core or custom.
    'description' => esc_html__( 'Stat number', 'saybers' ),
    'active_callback' => 'is_front_page',
  ) );

  
  $wp_customize->add_setting( 'one_stat_dec', array(
    'type' => 'theme_mod', // or 'option'
    'capability' => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
    'default' => esc_html__( 'Years of Experience', 'saybers' ),
    'transport' => 'refresh', // or postMessage
    'sanitize_callback' => 'wp_filter_nohtml_kses', // Basically to_json.
  ) );

  $wp_customize->add_control( 'one_stat_dec', array(
    'type'     => 'text',
    'priority' => 10, // Within the section.
    'section' => 'saybers_our_statistic', // Required, core or custom.
    'description' => esc_html__( 'Stat heading', 'saybers' ),
    'active_callback' => 'is_front_page',
  ) );

  $wp_customize->add_setting( 'two_stat_icon', array(
    'type' => 'theme_mod', // or 'option'
    'capability' => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
    'default' => esc_html__( 'icon icon-genius', 'saybers' ),
    'transport' => 'refresh', // or postMessage
    'sanitize_callback' => 'wp_filter_nohtml_kses', // Basically to_json.
  ) );

  $wp_customize->add_control( 'two_stat_icon', array(
    'type'     => 'text',
    'priority' => 10, // Within the section.
    'section' => 'saybers_our_statistic', // Required, core or custom.
    'description' => esc_html__( 'font-awsome or any other iclon class i.e far fa-clock, icon-clock', 'saybers' ),
    'active_callback' => 'is_front_page',
  ) );

  $wp_customize->add_setting( 'two_stat_num', array(
    'type' => 'theme_mod', // or 'option'
    'capability' => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
    'default' => esc_html__( '75', 'saybers' ),
    'transport' => 'refresh', // or postMessage
    'sanitize_callback' => 'absint', // Basically to_json.
  ) );

  $wp_customize->add_control( 'two_stat_num', array(
    'type'     => 'number',
    'priority' => 10, // Within the section.
    'section' => 'saybers_our_statistic', // Required, core or custom.
    'description' => esc_html__( 'Stat number', 'saybers' ),
    'active_callback' => 'is_front_page',
  ) );

  $wp_customize->add_setting( 'two_stat_dec', array(
    'type' => 'theme_mod', // or 'option'
    'capability' => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
    'default' => esc_html__( 'Efficient Barbers', 'saybers' ),
    'transport' => 'refresh', // or postMessage
    'sanitize_callback' => 'wp_filter_nohtml_kses', // Basically to_json.
  ) );

  $wp_customize->add_control( 'two_stat_dec', array(
    'type'     => 'text',
    'priority' => 10, // Within the section.
    'section' => 'saybers_our_statistic', // Required, core or custom.
    'label' => esc_html__( 'Stat hrading', 'saybers' ),
    'active_callback' => 'is_front_page',
  ) );

  $wp_customize->add_setting( 'three_stat_icon', array(
    'type' => 'theme_mod', // or 'option'
    'capability' => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
    'default' => esc_html__( 'icon icon-happy', 'saybers' ),
    'transport' => 'refresh', // or postMessage
    'sanitize_callback' => 'wp_filter_nohtml_kses', // Basically to_json.
  ) );

  $wp_customize->add_control( 'three_stat_icon', array(
    'type'     => 'text',
    'priority' => 10, // Within the section.
    'section' => 'saybers_our_statistic', // Required, core or custom.
    'description' => esc_html__( 'font-awsome or any other iclon class i.e far fa-clock, icon-clock', 'saybers' ),
    'active_callback' => 'is_front_page',
  ) );

  $wp_customize->add_setting( 'three_stat_num', array(
    'type' => 'theme_mod', // or 'option'
    'capability' => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
    'default' => esc_html__( '950', 'saybers' ),
    'transport' => 'refresh', // or postMessage
    'sanitize_callback' => 'absint', // Basically to_json.
  ) );

  $wp_customize->add_control( 'three_stat_num', array(
    'type'     => 'number',
    'priority' => 10, // Within the section.
    'section' => 'saybers_our_statistic', // Required, core or custom.
    'description' => esc_html__( 'Stat number', 'saybers' ),
    'active_callback' => 'is_front_page',
  ) );
  
  $wp_customize->add_setting( 'three_stat_dec', array(
    'type' => 'theme_mod', // or 'option'
    'capability' => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
    'default' => esc_html__( 'Happy Customers', 'saybers' ),
    'transport' => 'refresh', // or postMessage
    'sanitize_callback' => 'wp_filter_nohtml_kses', // Basically to_json.
  ) );

  $wp_customize->add_control( 'three_stat_dec', array(
    'type'     => 'text',
    'priority' => 10, // Within the section.
    'section' => 'saybers_our_statistic', // Required, core or custom.
    'description' => esc_html__( 'Stat heading', 'saybers' ),
    'active_callback' => 'is_front_page',
  ) );

  $wp_customize->add_setting( 'four_stat_icon', array(
    'type' => 'theme_mod', // or 'option'
    'capability' => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
    'default' => esc_html__( 'icon icon-trophy', 'saybers' ),
    'transport' => 'refresh', // or postMessage
    'sanitize_callback' => 'wp_filter_nohtml_kses', // Basically to_json.
  ) );

  $wp_customize->add_control( 'four_stat_icon', array(
    'type'     => 'text',
    'priority' => 10, // Within the section.
    'section' => 'saybers_our_statistic', // Required, core or custom.
    'description' => esc_html__( 'font-awsome or any other iclon class i.e far fa-clock, icon-clock', 'saybers' ),
    'active_callback' => 'is_front_page',
  ) );

  $wp_customize->add_setting( 'four_stat_num', array(
    'type' => 'theme_mod', // or 'option'
    'capability' => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
    'default' => esc_html__( '150', 'saybers' ),
    'transport' => 'refresh', // or postMessage
    'sanitize_callback' => 'absint', // Basically to_json.
  ) );

  $wp_customize->add_control( 'four_stat_num', array(
    'type'     => 'number',
    'priority' => 10, // Within the section.
    'section' => 'saybers_our_statistic', // Required, core or custom.
    'description' => esc_html__( 'Stat number', 'saybers' ),
    'active_callback' => 'is_front_page',
  ) );
  
  $wp_customize->add_setting( 'four_stat_dec', array(
    'type' => 'theme_mod', // or 'option'
    'capability' => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
    'default' => esc_html__( 'Business Awards Won', 'saybers' ),
    'transport' => 'refresh', // or postMessage
    'sanitize_callback' => 'wp_filter_nohtml_kses', // Basically to_json.
  ) );

  $wp_customize->add_control( 'four_stat_dec', array(
    'type'     => 'text',
    'priority' => 10, // Within the section.
    'section' => 'saybers_our_statistic', // Required, core or custom.
    'description' => esc_html__( 'Stat heading', 'saybers' ),
    'active_callback' => 'is_front_page',
  ) );

// Team Section
$wp_customize->add_section( 'saybers_our_team', array(
    'title'          => esc_html__( 'Our Team section', 'saybers' ),
    'description'    => esc_html__( 'Our Team section', 'saybers' ),
    'panel'          => 'saybers settings',
    'priority'       => 160,
  ) );

  $wp_customize->add_setting( 'toggle_our_team', array(
    'type' => 'theme_mod', // or 'option'
    'capability' => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
    'default' => 'on',
    'transport' => 'refresh', // or postMessage
    'sanitize_callback' => 'saybers_sanitize_radio', // Basically to_json.
  ) );

  $wp_customize->add_control( 'toggle_our_team', array(
    'type'     => 'radio',
    'priority' => 10, // Within the section.
    'section' => 'saybers_our_team', // Required, core or custom.
    'label' => esc_html__( 'Enable Our Team?', 'saybers' ),
    'choices'     => [
		'on'  => esc_html__( 'Enable', 'saybers' ),
		'off' => esc_html__( 'Disable', 'saybers' ),
	],
  ) );

  $wp_customize->add_setting( 'text_team', array(
    'type' => 'theme_mod', // or 'option'
    'capability' => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
    'default' => esc_html__( 'Our Team', 'saybers' ),
    'transport' => 'refresh', // or postMessage
    'sanitize_callback' => 'wp_filter_nohtml_kses', // Basically to_json.
  ) );

  $wp_customize->add_control( 'text_team', array(
    'type'     => 'text',
    'priority' => 10, // Within the section.
    'section' => 'saybers_our_team', // Required, core or custom.
    'label' => esc_html__( 'Heading for section', 'saybers' ),
    'active_callback' => 'is_front_page',
  ) );

  $wp_customize->add_setting( 'text_team_dec', array(
    'type' => 'theme_mod', // or 'option'
    'capability' => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
    'default' => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing elit', 'saybers' ),
    'transport' => 'refresh', // or postMessage
    'sanitize_callback' => 'wp_filter_nohtml_kses', // Basically to_json.
  ) );

  $wp_customize->add_control( 'text_team_dec', array(
    'type'     => 'textarea',
    'priority' => 10, // Within the section.
    'section' => 'saybers_our_team', // Required, core or custom.
    'label' => esc_html__( 'One line description', 'saybers' ),
    'active_callback' => 'is_front_page',
  ) );

// Work(portfolio) Section
$wp_customize->add_section( 'saybers_our_work', array(
    'title'          => esc_html__( 'Our Work section', 'saybers' ),
    'description'    => esc_html__( 'Our Work section', 'saybers' ),
    'panel'          => 'saybers settings',
    'priority'       => 160,
  ) );

  $wp_customize->add_setting( 'toggle_our_work', array(
    'type' => 'theme_mod', // or 'option'
    'capability' => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
    'default' => 'on',
    'transport' => 'refresh', // or postMessage
    'sanitize_callback' => 'saybers_sanitize_radio', // Basically to_json.
  ) );

  $wp_customize->add_control( 'toggle_our_work', array(
    'type'     => 'radio',
    'priority' => 10, // Within the section.
    'section' => 'saybers_our_work', // Required, core or custom.
    'label' => esc_html__( 'Enable Our Work?', 'saybers' ),
    'choices'     => [
		'on'  => esc_html__( 'Enable', 'saybers' ),
		'off' => esc_html__( 'Disable', 'saybers' ),
	],
  ) );

  $wp_customize->add_setting( 'text_work', array(
    'type' => 'theme_mod', // or 'option'
    'capability' => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
    'default' => esc_html__( 'Our Work', 'saybers' ),
    'transport' => 'refresh', // or postMessage
    'sanitize_callback' => 'wp_filter_nohtml_kses', // Basically to_json.
  ) );

  $wp_customize->add_control( 'text_work', array(
    'type'     => 'text',
    'priority' => 10, // Within the section.
    'section' => 'saybers_our_work', // Required, core or custom.
    'label' => esc_html__( 'Heading for section', 'saybers' ),
    'active_callback' => 'is_front_page',
  ) );

  $wp_customize->add_setting( 'text_work_dec', array(
    'type' => 'theme_mod', // or 'option'
    'capability' => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
    'default' => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing elit', 'saybers' ),
    'transport' => 'refresh', // or postMessage
    'sanitize_callback' => 'wp_filter_nohtml_kses', // Basically to_json.
  ) );

  $wp_customize->add_control( 'text_work_dec', array(
    'type'     => 'textarea',
    'priority' => 10, // Within the section.
    'section' => 'saybers_our_work', // Required, core or custom.
    'label' => esc_html__( 'One line description', 'saybers' ),
    'active_callback' => 'is_front_page',
  ) );

// Price Section
$wp_customize->add_section( 'saybers_our_pricing', array(
    'title'          => esc_html__( 'Our Pricing section', 'saybers' ),
    'description'    => esc_html__( 'Our Pricing section', 'saybers' ),
    'panel'          => 'saybers settings',
    'priority'       => 160,
  ) );

  $wp_customize->add_setting( 'toggle_our_pricing', array(
    'type' => 'theme_mod', // or 'option'
    'capability' => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
    'default' => 'on',
    'transport' => 'refresh', // or postMessage
    'sanitize_callback' => 'saybers_sanitize_radio', // Basically to_json.
  ) );

  $wp_customize->add_control( 'toggle_our_pricing', array(
    'type'     => 'radio',
    'priority' => 10, // Within the section.
    'section' => 'saybers_our_pricing', // Required, core or custom.
    'label' => esc_html__( 'Enable Our Pricing?', 'saybers' ),
    'choices'     => [
		'on'  => esc_html__( 'Enable', 'saybers' ),
		'off' => esc_html__( 'Disable', 'saybers' ),
	],
  ) );

  $wp_customize->add_setting( 'text_pricing', array(
    'type' => 'theme_mod', // or 'option'
    'capability' => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
    'default' => esc_html__( 'Our Pricing', 'saybers' ),
    'transport' => 'refresh', // or postMessage
    'sanitize_callback' => 'wp_filter_nohtml_kses', // Basically to_json.
  ) );

  $wp_customize->add_control( 'text_pricing', array(
    'type'     => 'text',
    'priority' => 10, // Within the section.
    'section' => 'saybers_our_pricing', // Required, core or custom.
    'label' => esc_html__( 'Heading for section', 'saybers' ),
    'active_callback' => 'is_front_page',
  ) );

  $wp_customize->add_setting( 'text_pricing_dec', array(
    'type' => 'theme_mod', // or 'option'
    'capability' => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
    'default' => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing elit', 'saybers' ),
    'transport' => 'refresh', // or postMessage
    'sanitize_callback' => 'wp_filter_nohtml_kses', // Basically to_json.
  ) );

  $wp_customize->add_control( 'text_pricing_dec', array(
    'type'     => 'textarea',
    'priority' => 10, // Within the section.
    'section' => 'saybers_our_pricing', // Required, core or custom.
    'label' => esc_html__( 'One line description', 'saybers' ),
    'active_callback' => 'is_front_page',
  ) );

// Blog Section
$wp_customize->add_section( 'saybers_our_blog', array(
    'title'          => esc_html__( 'Our Blog section', 'saybers' ),
    'description'    => esc_html__( 'Our Blog section', 'saybers' ),
    'panel'          => 'saybers settings',
    'priority'       => 160,
  ) );

  $wp_customize->add_setting( 'toggle_our_blog', array(
    'type' => 'theme_mod', // or 'option'
    'capability' => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
    'default' => 'on',
    'transport' => 'refresh', // or postMessage
    'sanitize_callback' => 'saybers_sanitize_radio', // Basically to_json.
  ) );

  $wp_customize->add_control( 'toggle_our_blog', array(
    'type'     => 'radio',
    'priority' => 10, // Within the section.
    'section' => 'saybers_our_blog', // Required, core or custom.
    'label' => esc_html__( 'Enable Our Blog?', 'saybers' ),
    'choices'     => [
		'on'  => esc_html__( 'Enable', 'saybers' ),
		'off' => esc_html__( 'Disable', 'saybers' ),
	],
  ) );

  $wp_customize->add_setting( 'text_blog', array(
    'type' => 'theme_mod', // or 'option'
    'capability' => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
    'default' => esc_html__( 'Our Blog', 'saybers' ),
    'transport' => 'refresh', // or postMessage
    'sanitize_callback' => 'wp_filter_nohtml_kses', // Basically to_json.
  ) );

  $wp_customize->add_control( 'text_blog', array(
    'type'     => 'text',
    'priority' => 10, // Within the section.
    'section' => 'saybers_our_blog', // Required, core or custom.
    'label' => esc_html__( 'Heading for section', 'saybers' ),
    'active_callback' => 'is_front_page',
  ) );

  $wp_customize->add_setting( 'text_blog_dec', array(
    'type' => 'theme_mod', // or 'option'
    'capability' => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
    'default' => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing elit', 'saybers' ),
    'transport' => 'refresh', // or postMessage
    'sanitize_callback' => 'wp_filter_nohtml_kses', // Basically to_json.
  ) );

  $wp_customize->add_control( 'text_blog_dec', array(
    'type'     => 'textarea',
    'priority' => 10, // Within the section.
    'section' => 'saybers_our_blog', // Required, core or custom.
    'label' => esc_html__( 'One line description', 'saybers' ),
    'active_callback' => 'is_front_page',
  ) );

// Testimonial Section
$wp_customize->add_section( 'saybers_testimonial', array(
    'title'          => esc_html__( 'Testimonial section', 'saybers' ),
    'description'    => esc_html__( 'Testimonial section', 'saybers' ),
    'panel'          => 'saybers settings',
    'priority'       => 160,
  ) );

  $wp_customize->add_setting( 'toggle_testimonial', array(
    'type' => 'theme_mod', // or 'option'
    'capability' => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
    'default' => 'on',
    'transport' => 'refresh', // or postMessage
    'sanitize_callback' => 'saybers_sanitize_radio', // Basically to_json.
  ) );

  $wp_customize->add_control( 'toggle_testimonial', array(
    'type'     => 'radio',
    'priority' => 10, // Within the section.
    'section' => 'saybers_testimonial', // Required, core or custom.
    'label' => esc_html__( 'Enable Testimonial?', 'saybers' ),
    'choices'     => [
		'on'  => esc_html__( 'Enable', 'saybers' ),
		'off' => esc_html__( 'Disable', 'saybers' ),
	],
  ) );

  $wp_customize->add_setting( 'text_testimonial', array(
    'type' => 'theme_mod', // or 'option'
    'capability' => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
    'default' => esc_html__( 'Our Testimonials', 'saybers' ),
    'transport' => 'refresh', // or postMessage
    'sanitize_callback' => 'wp_filter_nohtml_kses', // Basically to_json.
  ) );

  $wp_customize->add_control( 'text_testimonial', array(
    'type'     => 'text',
    'priority' => 10, // Within the section.
    'section' => 'saybers_testimonial', // Required, core or custom.
    'label' => esc_html__( 'Heading for section', 'saybers' ),
    'active_callback' => 'is_front_page',
  ) );

  $wp_customize->add_setting( 'text_testimonial_dec', array(
    'type' => 'theme_mod', // or 'option'
    'capability' => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
    'default' => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing elit', 'saybers' ),
    'transport' => 'refresh', // or postMessage
    'sanitize_callback' => 'wp_filter_nohtml_kses', // Basically to_json.
  ) );

  $wp_customize->add_control( 'text_testimonial_dec', array(
    'type'     => 'textarea',
    'priority' => 10, // Within the section.
    'section' => 'saybers_testimonial', // Required, core or custom.
    'label' => esc_html__( 'One line description', 'saybers' ),
    'active_callback' => 'is_front_page',
  ) );

// Contact Section
$wp_customize->add_section( 'saybers_contact_us', array(
    'title'          => esc_html__( 'Contact Us section', 'saybers' ),
    'description'    => esc_html__( 'Contact Us section', 'saybers' ),
    'panel'          => 'saybers settings',
    'priority'       => 160,
  ) );

  $wp_customize->add_setting( 'toggle_contact_us', array(
    'type' => 'theme_mod', // or 'option'
    'capability' => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
    'default' => 'on',
    'transport' => 'refresh', // or postMessage
    'sanitize_callback' => 'saybers_sanitize_radio', // Basically to_json.
  ) );

  $wp_customize->add_control( 'toggle_contact_us', array(
    'type'     => 'radio',
    'priority' => 10, // Within the section.
    'section' => 'saybers_contact_us', // Required, core or custom.
    'label' => esc_html__( 'Enable Contact Us?', 'saybers' ),
    'choices'     => [
		'on'  => esc_html__( 'Enable', 'saybers' ),
		'off' => esc_html__( 'Disable', 'saybers' ),
	],
  ) );

  $wp_customize->add_setting( 'text_contact', array(
    'type' => 'theme_mod', // or 'option'
    'capability' => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
    'default' => esc_html__( 'Contact Us', 'saybers' ),
    'transport' => 'refresh', // or postMessage
    'sanitize_callback' => 'wp_filter_nohtml_kses', // Basically to_json.
  ) );

  $wp_customize->add_control( 'text_contact', array(
    'type'     => 'text',
    'priority' => 10, // Within the section.
    'section' => 'saybers_contact_us', // Required, core or custom.
    'label' => esc_html__( 'Heading for section', 'saybers' ),
    'active_callback' => 'is_front_page',
  ) );

  $wp_customize->add_setting( 'text_contact_dec', array(
    'type' => 'theme_mod', // or 'option'
    'capability' => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
    'default' => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing elit', 'saybers' ),
    'transport' => 'refresh', // or postMessage
    'sanitize_callback' => 'wp_filter_nohtml_kses', // Basically to_json.
  ) );

  $wp_customize->add_control( 'text_contact_dec', array(
    'type'     => 'textarea',
    'priority' => 10, // Within the section.
    'section' => 'saybers_contact_us', // Required, core or custom.
    'label' => esc_html__( 'One line description', 'saybers' ),
    'active_callback' => 'is_front_page',
  ) );

// Footer Section b 
$wp_customize->add_section( 'saybers_footer', array(
  'title'          => esc_html__( 'Customize Footer', 'saybers' ),
  'description'    => esc_html__( 'Customize Footer', 'saybers' ),
  'panel'          => 'saybers settings',
) );

$wp_customize->add_setting( 'foot_text', array(
  'type' => 'theme_mod', // or 'option'
  'capability' => 'edit_theme_options',
  'theme_supports' => '', // Rarely needed.
  'default' => esc_html__( '&copy; 2019 All Rights Reserved', 'saybers' ),
  'transport' => 'refresh', // or postMessage
  'sanitize_callback' => 'wp_filter_nohtml_kses', 
) );

$wp_customize->add_control( 'foot_text', array(
  'type'     => 'text',
  'priority' => 10, // Within the section.
  'section' => 'saybers_footer', // Required, core or custom.
  'label' => esc_html__( 'Copy Right or any other....', 'saybers' ),
  'active_callback' => 'is_front_page',
) );

$wp_customize->add_setting( 'foot_hd_color', array(
  'type' => 'theme_mod', // or 'option'
  'capability' => 'edit_theme_options',
  'default' => '#e64747',
  'transport' => 'refresh', // or postMessage
  'sanitize_callback' => 'sanitize_hex_color',
) );

$wp_customize->add_control( 'foot_hd_color', array(
  'type'     => 'color',
  'priority' => 10, // Within the section.
  'section' => 'saybers_footer', // Required, core or custom.
  'description' => __( 'Clolor for headings.' , 'saybers' ),
) );

$wp_customize->add_setting( 'foot_link_color', array(
  'type' => 'theme_mod', // or 'option'
  'capability' => 'edit_theme_options',
  'default' => '#ea9c2c',
  'transport' => 'refresh', // or postMessage
  'sanitize_callback' => 'sanitize_hex_color',
) );

$wp_customize->add_control( 'foot_link_color', array(
  'type'     => 'color',
  'priority' => 10, // Within the section.
  'section' => 'saybers_footer', // Required, core or custom.
  'description' => __( 'Color for links,text etc.', 'saybers' ),
) );

  /*************************************************COLOR CUSTOMIZE****************************************************/
 
  $wp_customize->add_section( 'saybers_custom_colors', array(
    'title'          => esc_html__( 'Customize Theme Colors', 'saybers' ),
    'description'    => esc_html__( 'Customize Theme Colors', 'saybers' ),
    'panel'          => 'saybers settings',
  ) );

  $wp_customize->add_setting( 'nav_bg_color', array(
    'type' => 'theme_mod', // or 'option'
    'capability' => 'edit_theme_options',
    'default' => '#ffffff',
    'transport' => 'refresh', // or postMessage
    'sanitize_callback' => 'sanitize_hex_color',
  ) );

  $wp_customize->add_control( 'nav_bg_color', array(
    'type'     => 'color',
    'priority' => 10, // Within the section.
    'section' => 'saybers_custom_colors', // Required, core or custom.
    'label' => esc_html__( 'Clolor For Header', 'saybers' ),
    'description' => __( 'changes on scrool.' , 'saybers' ),
  ) );

  $wp_customize->add_setting( 'nav_text_color', array(
    'type' => 'theme_mod', // or 'option'
    'capability' => 'edit_theme_options',
    'default' => '#000000',
    'transport' => 'refresh', // or postMessage
    'sanitize_callback' => 'sanitize_hex_color',
  ) );

  $wp_customize->add_control( 'nav_text_color', array(
    'type'     => 'color',
    'priority' => 10, // Within the section.
    'section' => 'saybers_custom_colors', // Required, core or custom.
    'label' => esc_html__( 'Color For Header Text ', 'saybers' ),
    'description' => __( 'changes on scroll', 'saybers' ),
  ) );

  $wp_customize->add_setting( 'nav_text_active_color', array(
    'type' => 'theme_mod', // or 'option'
    'capability' => 'edit_theme_options',
    'default' => '#bb8c4b',
    'transport' => 'refresh', // or postMessage
    'sanitize_callback' => 'sanitize_hex_color',
  ) );

  $wp_customize->add_control( 'nav_text_active_color', array(
    'type'     => 'color',
    'priority' => 10, // Within the section.
    'section' => 'saybers_custom_colors', // Required, core or custom.
    'label' => esc_html__( 'Color For Active text ', 'saybers' ),
    'description' => __( 'active nav element visible on scroll.', 'saybers' ),
  ) );

  $wp_customize->add_setting( 'brown_bg_color', array(
    'type' => 'theme_mod', // or 'option'
    'capability' => 'edit_theme_options',
    'default' => '#bb8c4b',
    'transport' => 'refresh', // or postMessage
    'sanitize_callback' => 'sanitize_hex_color',
  ) );

  $wp_customize->add_control( 'brown_bg_color', array(
    'type'     => 'color',
    'priority' => 10, // Within the section.
    'section' => 'saybers_custom_colors', // Required, core or custom.
    'label' => esc_html__( 'Color for backgrounds ', 'saybers' ),
    'description' => __( 'color of buttons', 'saybers' ),
  ) );

  $wp_customize->add_setting( 'heading_color', array(
    'type' => 'theme_mod', // or 'option'
    'capability' => 'edit_theme_options',
    'default' => '#333333',
    'transport' => 'refresh', // or postMessage
    'sanitize_callback' => 'sanitize_hex_color',
  ) );

  $wp_customize->add_control( 'heading_color', array(
    'type'     => 'color',
    'priority' => 10, // Within the section.
    'section' => 'saybers_custom_colors', // Required, core or custom.
    'label' => esc_html__( 'Color For Headings ', 'saybers' ),
    'description' => __( 'color for each section heading.', 'saybers' ),
  ) );

  $wp_customize->add_setting( 'line_color', array(
    'type' => 'theme_mod', // or 'option'
    'capability' => 'edit_theme_options',
    'default' => '#333333',
    'transport' => 'refresh', // or postMessage
    'sanitize_callback' => 'sanitize_hex_color',
  ) );

  $wp_customize->add_control( 'line_color', array(
    'type'     => 'color',
    'priority' => 10, // Within the section.
    'section' => 'saybers_custom_colors', // Required, core or custom.
    'label' => esc_html__( 'Color For Underline ', 'saybers' ),
    'description' => __( 'color of the underline in each section.', 'saybers' ),
  ) );

  $wp_customize->add_setting( 'one_line_color', array(
    'type' => 'theme_mod', // or 'option'
    'capability' => 'edit_theme_options',
    'default' => '#333333',
    'transport' => 'refresh', // or postMessage
    'sanitize_callback' => 'sanitize_hex_color',
  ) );

  $wp_customize->add_control( 'one_line_color', array(
    'type'     => 'color',
    'priority' => 10, // Within the section.
    'section' => 'saybers_custom_colors', // Required, core or custom.
    'label' => esc_html__( 'Color For one line description ', 'saybers' ),
    'description' => __( 'color of one line description in each section.', 'saybers' ),
  ) );

  $wp_customize->add_setting( 'white_text_color', array(
    'type' => 'theme_mod', // or 'option'
    'capability' => 'edit_theme_options',
    'default' => '#ffffff',
    'transport' => 'refresh', // or postMessage
    'sanitize_callback' => 'sanitize_hex_color',
  ) );

  $wp_customize->add_control( 'white_text_color', array(
    'type'     => 'color',
    'priority' => 10, // Within the section.
    'section' => 'saybers_custom_colors', // Required, core or custom.
    'label' => esc_html__( 'Color for white text. ', 'saybers' ),
    'description' => __( 'color of button,price texts, etc.', 'saybers' ),
  ) );

  $wp_customize->add_setting( 'black_text_color', array(
    'type' => 'theme_mod', // or 'option'
    'capability' => 'edit_theme_options',
    'default' => '#333333',
    'transport' => 'refresh', // or postMessage
    'sanitize_callback' => 'sanitize_hex_color',
  ) );

  $wp_customize->add_control( 'black_text_color', array(
    'type'     => 'color',
    'priority' => 10, // Within the section.
    'section' => 'saybers_custom_colors', // Required, core or custom.
    'label' => esc_html__( 'Color for black text.', 'saybers' ),
    'description' => __( 'color of sub headings,blogs,peragraphs etc.', 'saybers' ),
  ) );
    
    $wp_customize->add_setting( 'brown_text_color', array(
      'type' => 'theme_mod', // or 'option'
      'capability' => 'edit_theme_options',
      'default' => '#bb8c4b',
      'transport' => 'refresh', // or postMessage
      'sanitize_callback' => 'sanitize_hex_color',
    ) );
  
    $wp_customize->add_control( 'brown_text_color', array(
      'type'     => 'color',
      'priority' => 10, // Within the section.
      'section' => 'saybers_custom_colors', // Required, core or custom.
      'label' => esc_html__( 'all brown text', 'saybers' ),
      'description' => __( 'color for sub headings price,works,stats etc.', 'saybers' ),
    ) );


}
add_action( 'customize_register', 'saybers_customize_register' );