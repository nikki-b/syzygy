<?php

function wpb_customize_register($wp_customize){

	//Showcase Section
	$wp_customize->add_section('showcase', array(
		'title' => __('Showcase', 'syzygy'),
		'description' => sprintf(__('Options for showcase', 'syzygy')),
		'priority' => 130
	));

	$wp_customize->add_setting('showcase_image', array(
		'default' => get_bloginfo('template_directory').'/img/showcase.jpg',
		'type' => 'theme_mod'
	));

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_image', array(
		'label' => __('Showcase Image', 'syzygy'),
		'section' => 'showcase',
		'settings' => 'showcase_image',
		'priority' => 1
	)));


	$wp_customize->add_setting('showcase_heading', array(
		'default' => _x('Custom Bootstrap Wordpress Theme', 'syzygy'),
		'type' => 'theme_mod'
	));

	$wp_customize->add_control('showcase_heading', array(
		'label' => __('Heading', 'syzygy'),
		'section' => 'showcase',
		'priority' => 2
	));

	$wp_customize->add_setting('showcase_text', array(
		'default' => _x('Radio telescope take root and flourish Sea of Tranquility.', 'syzygy'),
		'type' => 'theme_mod'
	));

	$wp_customize->add_control('showcase_text', array(
		'label' => __('Text', 'syzygy'),
		'section' => 'showcase',
		'priority' => 3
	));

	$wp_customize->add_setting('button_url', array(
		'default' => _x('http://google.com', 'syzygy'),
		'type' => 'theme_mod'
	));

	$wp_customize->add_control('button_url', array(
		'label' => __('Button URL', 'syzygy'),
		'section' => 'showcase',
		'priority' => 4
	));

	$wp_customize->add_setting('button_text', array(
		'default' => _x('http://google.com', 'syzygy'),
		'type' => 'theme_mod'
	));

	$wp_customize->add_control('button_text', array(
		'label' => __('Button Text', 'syzygy'),
		'section' => 'showcase',
		'priority' => 5
	));
}

add_action('customize_register', 'wpb_customize_register');