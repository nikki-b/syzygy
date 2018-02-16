<?php

function wpb_customize_register($wp_customize){

	//Social Network Links for Navbar ------------
	//--------------------------------------------
	$wp_customize->add_section('social', array(
		'title' => __('Social Links', 'syzygy'),
		'description' => sprintf(__('Add social network links using profile URLs and Font Awesome icons', 'syzygy')),
		'priority' => 130
	));
	// 1
	$wp_customize->add_setting('link1_icon', array(
		'default' => 'fa-instagram',
		'type' => 'theme_mod'
	));

	$wp_customize->add_control('link1_icon', array(
		'label' => __('Link1 Icon', 'syzygy'),
		'section' => 'social',
		'priority' => 1
	));

	$wp_customize->add_setting('link1_url', array(
		'default' => 'fa-instagram',
		'type' => 'theme_mod'
	));

	$wp_customize->add_control('link1_url', array(
		'label' => __('Link1 URL', 'syzygy'),
		'section' => 'social',
		'priority' => 1
	));
	// 2
	$wp_customize->add_setting('link2_icon', array(
		'default' => 'fa-instagram',
		'type' => 'theme_mod'
	));

	$wp_customize->add_control('link2_icon', array(
		'label' => __('Link2 Icon', 'syzygy'),
		'section' => 'social',
		'priority' => 2
	));

	$wp_customize->add_setting('link2_url', array(
		'default' => 'fa-instagram',
		'type' => 'theme_mod'
	));

	$wp_customize->add_control('link2_url', array(
		'label' => __('Link2 URL', 'syzygy'),
		'section' => 'social',
		'priority' => 2
	));
	// 3
	$wp_customize->add_setting('link3_icon', array(
		'default' => 'fa-instagram',
		'type' => 'theme_mod'
	));

	$wp_customize->add_control('link3_icon', array(
		'label' => __('Link3 Icon', 'syzygy'),
		'section' => 'social',
		'priority' => 3
	));

	$wp_customize->add_setting('link3_url', array(
		'default' => 'fa-instagram',
		'type' => 'theme_mod'
	));

	$wp_customize->add_control('link3_url', array(
		'label' => __('Link3 URL', 'syzygy'),
		'section' => 'social',
		'priority' => 3
	));
	// 4
	$wp_customize->add_setting('link4_icon', array(
		'default' => 'fa-instagram',
		'type' => 'theme_mod'
	));

	$wp_customize->add_control('link4_icon', array(
		'label' => __('Link4 Icon', 'syzygy'),
		'section' => 'social',
		'priority' => 4
	));

	$wp_customize->add_setting('link4_url', array(
		'default' => 'fa-instagram',
		'type' => 'theme_mod'
	));

	$wp_customize->add_control('link4_url', array(
		'label' => __('Link4 URL', 'syzygy'),
		'section' => 'social',
		'priority' => 4
	));
	// 5
	$wp_customize->add_setting('link5_icon', array(
		'default' => 'fa-instagram',
		'type' => 'theme_mod'
	));

	$wp_customize->add_control('link5_icon', array(
		'label' => __('Link5 Icon', 'syzygy'),
		'section' => 'social',
		'priority' => 5
	));

	$wp_customize->add_setting('link5_url', array(
		'default' => 'fa-instagram',
		'type' => 'theme_mod'
	));

	$wp_customize->add_control('link5_url', array(
		'label' => __('Link5 URL', 'syzygy'),
		'section' => 'social',
		'priority' => 5
	));
	// end Social Links --------------------------
	//--------------------------------------------

}

add_action('customize_register', 'wpb_customize_register');