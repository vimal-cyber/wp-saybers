<?php
/*
customizer config (kirki)
*/
Kirki::add_config( 'saybers_options', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );
                                                        // About Us Section
Kirki::add_section( 'saybers_one_in', array(
    'title'          => esc_html__( 'About Us Section', 'saybers' ),
    'description'    => esc_html__( 'About Us Section', 'saybers' ),
    'panel'          => '',
    'priority'       => 160,
) );

Kirki::add_field( 'saybers_options', [
	'type'        => 'switch',
	'settings'    => 'toggle_about_us',
	'label'       => esc_html__( 'Enable About Us?', 'saybers' ),
	'section'     => 'saybers_one_in',
	'default'     => '1',
	'priority'    => 10,
	'choices'     => [
		'on'  => esc_html__( 'Enable', 'saybers' ),
		'off' => esc_html__( 'Disable', 'saybers' ),
	],
] );

Kirki::add_field( 'saybers_options', [
	'type'     => 'text',
	'settings' => 'text_about',
	'label'    => esc_html__( 'Heading for section', 'saybers' ),
	'section'  => 'saybers_one_in',
	'default'  => esc_html__( 'About Us', 'saybers' ),
	'priority' => 10,
] );

Kirki::add_field( 'saybers_options', [
	'type'     => 'textarea',
	'settings' => 'text_about_dec',
	'label'    => esc_html__( 'One line description', 'saybers' ),
	'section'  => 'saybers_one_in',
	'default'  => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing elit', 'saybers' ),
	'priority' => 10,
] );

Kirki::add_field( 'saybers_options', [
	'type'     => 'text',
	'settings' => 'text_about_sub_heading',
	'label'    => esc_html__( ' Sub-Heading for section', 'saybers' ),
	'section'  => 'saybers_one_in',
	'default'  => esc_html__( '25 Years of Experience', 'saybers' ),
	'priority' => 10,
] );

Kirki::add_field( 'saybers_options', [
	'type'     => 'textarea',
	'settings' => 'text_about_sub_dec',
	'label'    => esc_html__( 'Description', 'saybers' ),
	'section'  => 'saybers_one_in',
	'default'  => esc_html__( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'saybers' ),
	'priority' => 10,
] );

Kirki::add_field( 'saybers_options', [
	'type'        => 'image',
	'settings'    => 'image_about',
	'label'       => esc_html__( 'Select Image', 'saybers' ),
	'description' => esc_html__( 'Click "Select image" size 800x530.', 'saybers' ),
	'section'     => 'saybers_one_in',
	'default'     => 'images/about/about.jpg',
] );

Kirki::add_field( 'saybers_options', [
	'type'     => 'link',
	'settings' => 'link_about',
	'label'    => __( 'Video URL', 'saybers' ),
	'section'  => 'saybers_one_in',
	'default'  => 'https://www.youtube.com/watch?v=E7A5rXHp_AI',
	'priority' => 10,
] );

                                                        // Services Section
Kirki::add_section( 'saybers_our_services', array(
    'title'          => esc_html__( 'Our Servces section', 'saybers' ),
    'description'    => esc_html__( 'Our Servces section', 'saybers' ),
    'panel'          => '',
    'priority'       => 160,
) );

Kirki::add_field( 'saybers_options', [
	'type'        => 'switch',
	'settings'    => 'toggle_our_services',
	'label'       => esc_html__( 'Enable Our Services?', 'saybers' ),
	'section'     => 'saybers_our_services',
	'default'     => '1',
	'priority'    => 10,
	'choices'     => [
		'on'  => esc_html__( 'Enable', 'saybers' ),
		'off' => esc_html__( 'Disable', 'saybers' ),
	],
] );

Kirki::add_field( 'saybers_options', [
	'type'     => 'text',
	'settings' => 'text_services',
	'label'    => esc_html__( 'Heading for section', 'saybers' ),
	'section'  => 'saybers_our_services',
	'default'  => esc_html__( 'Our Services', 'saybers' ),
	'priority' => 10,
] );

Kirki::add_field( 'saybers_options', [
	'type'     => 'textarea',
	'settings' => 'text_services_dec',
	'label'    => esc_html__( 'One line description', 'saybers' ),
	'section'  => 'saybers_our_services',
	'default'  => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing elit', 'saybers' ),
	'priority' => 10,
] );

                                                        // Statistic Section
Kirki::add_section( 'saybers_our_statistic', array(
    'title'          => esc_html__( 'Our Statistic section', 'saybers' ),
    'description'    => esc_html__( 'Our Statistic section', 'saybers' ),
    'panel'          => '',
    'priority'       => 160,
) );

Kirki::add_field( 'saybers_options', [
	'type'        => 'switch',
	'settings'    => 'toggle_our_statistic',
	'label'       => esc_html__( 'Enable Our Statistic?', 'saybers' ),
	'section'     => 'saybers_our_statistic',
	'default'     => '1',
	'priority'    => 10,
	'choices'     => [
		'on'  => esc_html__( 'Enable', 'saybers' ),
		'off' => esc_html__( 'Disable', 'saybers' ),
	],
] );

                                                        // Team Section
Kirki::add_section( 'saybers_our_team', array(
    'title'          => esc_html__( 'Our Team section', 'saybers' ),
    'description'    => esc_html__( 'Our Team section', 'saybers' ),
    'panel'          => '',
    'priority'       => 160,
) );

Kirki::add_field( 'saybers_options', [
	'type'        => 'switch',
	'settings'    => 'toggle_our_team',
	'label'       => esc_html__( 'Enable Our Team?', 'saybers' ),
	'section'     => 'saybers_our_team',
	'default'     => '1',
	'priority'    => 10,
	'choices'     => [
		'on'  => esc_html__( 'Enable', 'saybers' ),
		'off' => esc_html__( 'Disable', 'saybers' ),
	],
] );

Kirki::add_field( 'saybers_options', [
	'type'     => 'text',
	'settings' => 'text_team',
	'label'    => esc_html__( 'Heading for section', 'saybers' ),
	'section'  => 'saybers_our_team',
	'default'  => esc_html__( 'Our Team', 'saybers' ),
	'priority' => 10,
] );

Kirki::add_field( 'saybers_options', [
	'type'     => 'textarea',
	'settings' => 'text_team_dec',
	'label'    => esc_html__( 'One line description', 'saybers' ),
	'section'  => 'saybers_our_team',
	'default'  => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing elit', 'saybers' ),
	'priority' => 10,
] );

                                                        // Work(portfolio) Section
Kirki::add_section( 'saybers_our_work', array(
    'title'          => esc_html__( 'Our Work section', 'saybers' ),
    'description'    => esc_html__( 'Our Work section', 'saybers' ),
    'panel'          => '',
    'priority'       => 160,
) );

Kirki::add_field( 'saybers_options', [
	'type'        => 'switch',
	'settings'    => 'toggle_our_work',
	'label'       => esc_html__( 'Enable Our Work?', 'saybers' ),
	'section'     => 'saybers_our_work',
	'default'     => '1',
	'priority'    => 10,
	'choices'     => [
		'on'  => esc_html__( 'Enable', 'saybers' ),
		'off' => esc_html__( 'Disable', 'saybers' ),
	],
] );

Kirki::add_field( 'saybers_options', [
	'type'     => 'text',
	'settings' => 'text_work',
	'label'    => esc_html__( 'Heading for section', 'saybers' ),
	'section'  => 'saybers_our_work',
	'default'  => esc_html__( 'Our Works', 'saybers' ),
	'priority' => 10,
] );

Kirki::add_field( 'saybers_options', [
	'type'     => 'textarea',
	'settings' => 'text_work_dec',
	'label'    => esc_html__( 'One line description', 'saybers' ),
	'section'  => 'saybers_our_work',
	'default'  => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing elit', 'saybers' ),
	'priority' => 10,
] );

                                                        // Price Section
Kirki::add_section( 'saybers_our_pricing', array(
    'title'          => esc_html__( 'Our Pricing section', 'saybers' ),
    'description'    => esc_html__( 'Our Pricing section', 'saybers' ),
    'panel'          => '',
    'priority'       => 160,
) );

Kirki::add_field( 'saybers_options', [
	'type'        => 'switch',
	'settings'    => 'toggle_our_pricing',
	'label'       => esc_html__( 'Enable Our Pricing?', 'saybers' ),
	'section'     => 'saybers_our_pricing',
	'default'     => '1',
	'priority'    => 10,
	'choices'     => [
		'on'  => esc_html__( 'Enable', 'saybers' ),
		'off' => esc_html__( 'Disable', 'saybers' ),
	],
] );

Kirki::add_field( 'saybers_options', [
	'type'     => 'text',
	'settings' => 'text_pricing',
	'label'    => esc_html__( 'Heading for section', 'saybers' ),
	'section'  => 'saybers_our_pricing',
	'default'  => esc_html__( 'Our Pricing', 'saybers' ),
	'priority' => 10,
] );

Kirki::add_field( 'saybers_options', [
	'type'     => 'textarea',
	'settings' => 'text_pricing_dec',
	'label'    => esc_html__( 'One line description', 'saybers' ),
	'section'  => 'saybers_our_pricing',
	'default'  => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing elit', 'saybers' ),
	'priority' => 10,
] );

                                                        // Blog Section
Kirki::add_section( 'saybers_our_blog', array(
    'title'          => esc_html__( 'Our Blog section', 'saybers' ),
    'description'    => esc_html__( 'Our Blog section', 'saybers' ),
    'panel'          => '',
    'priority'       => 160,
) );

Kirki::add_field( 'saybers_options', [
	'type'        => 'switch',
	'settings'    => 'toggle_our_blog',
	'label'       => esc_html__( 'Enable Our Blog?', 'saybers' ),
	'section'     => 'saybers_our_blog',
	'default'     => '1',
	'priority'    => 10,
	'choices'     => [
		'on'  => esc_html__( 'Enable', 'saybers' ),
		'off' => esc_html__( 'Disable', 'saybers' ),
	],
] );

Kirki::add_field( 'saybers_options', [
	'type'     => 'text',
	'settings' => 'text_blog',
	'label'    => esc_html__( 'Heading for section', 'saybers' ),
	'section'  => 'saybers_our_blog',
	'default'  => esc_html__( 'Our Blog', 'saybers' ),
	'priority' => 10,
] );

Kirki::add_field( 'saybers_options', [
	'type'     => 'textarea',
	'settings' => 'text_blog_dec',
	'label'    => esc_html__( 'One line description', 'saybers' ),
	'section'  => 'saybers_our_blog',
	'default'  => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing elit', 'saybers' ),
	'priority' => 10,
] );

                                                        // Testimonial Section
Kirki::add_section( 'saybers_testimonial', array(
    'title'          => esc_html__( 'Testimonial section', 'saybers' ),
    'description'    => esc_html__( 'Testimonial section', 'saybers' ),
    'panel'          => '',
    'priority'       => 160,
) );

Kirki::add_field( 'saybers_options', [
	'type'        => 'switch',
	'settings'    => 'toggle_testimonial',
	'label'       => esc_html__( 'Enable Testimonial?', 'saybers' ),
	'section'     => 'saybers_testimonial',
	'default'     => '1',
	'priority'    => 10,
	'choices'     => [
		'on'  => esc_html__( 'Enable', 'saybers' ),
		'off' => esc_html__( 'Disable', 'saybers' ),
	],
] );

Kirki::add_field( 'saybers_options', [
	'type'     => 'text',
	'settings' => 'text_testimonial',
	'label'    => esc_html__( 'Heading for section', 'saybers' ),
	'section'  => 'saybers_testimonial',
	'default'  => esc_html__( 'Our Testimonials', 'saybers' ),
	'priority' => 10,
] );

Kirki::add_field( 'saybers_options', [
	'type'     => 'textarea',
	'settings' => 'text_testimonial_dec',
	'label'    => esc_html__( 'One line description', 'saybers' ),
	'section'  => 'saybers_testimonial',
	'default'  => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing elit', 'saybers' ),
	'priority' => 10,
] );

                                                        // Contact Section
Kirki::add_section( 'saybers_contact_us', array(
    'title'          => esc_html__( 'Contact Us section', 'saybers' ),
    'description'    => esc_html__( 'Contact_Us section', 'saybers' ),
    'panel'          => '',
    'priority'       => 160,
) );

Kirki::add_field( 'saybers_options', [
	'type'        => 'switch',
	'settings'    => 'toggle_contact_us',
	'label'       => esc_html__( 'Enable Contact Us?', 'saybers' ),
	'section'     => 'saybers_contact_us',
	'default'     => '1',
	'priority'    => 10,
	'choices'     => [
		'on'  => esc_html__( 'Enable', 'saybers' ),
		'off' => esc_html__( 'Disable', 'saybers' ),
	],
] );

Kirki::add_field( 'saybers_options', [
	'type'     => 'text',
	'settings' => 'text_contact',
	'label'    => esc_html__( 'Heading for section', 'saybers' ),
	'section'  => 'saybers_contact_us',
	'default'  => esc_html__( 'Our Contact', 'saybers' ),
	'priority' => 10,
] );

Kirki::add_field( 'saybers_options', [
	'type'     => 'textarea',
	'settings' => 'text_contact_dec',
	'label'    => esc_html__( 'One line description', 'saybers' ),
	'section'  => 'saybers_contact_us',
	'default'  => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing elit', 'saybers' ),
	'priority' => 10,
] );
