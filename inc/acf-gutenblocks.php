<?php

function acf_hero_slider_block() {

	// check function exists
	if( function_exists('acf_register_block') ) {

		// register a portfolio item block
		acf_register_block(array(
			'name'				=> 'hero-slider',
			'title'				=> __('Hero Slider'),
			'description'		=> __('A custom hero slider'),
			'render_template'	=> 'template-parts/gutenblocks/hero-slider.php',
			'category'			=> 'layout',
			'icon'				=> 'excerpt-view',
			'keywords'			=> array( 'hero, hero slider, slider' ),
		));
		}
	}

add_action('acf/init', 'acf_hero_slider_block');

function acf_featured_project_block() {

	// check function exists
	if( function_exists('acf_register_block') ) {

		// register a portfolio item block
		acf_register_block(array(
			'name'				=> 'featured_project',
			'title'				=> __('Featured Project'),
			'description'		=> __('A custom featured project block'),
			'render_template'	=> 'template-parts/gutenblocks/featured.php',
			'category'			=> 'layout',
			'icon'				=> 'excerpt-view',
			'keywords'			=> array( 'featured project, featured, project' ),
		));
		}
	}

add_action('acf/init', 'acf_featured_project_block');

function acf_custom_button() {

	// check function exists
	if( function_exists('acf_register_block') ) {

		// register a portfolio item block
		acf_register_block(array(
			'name'				=> 'custom_button',
			'title'				=> __('Custom Button'),
			'description'		=> __('A simple custom button'),
			'render_template'	=> 'template-parts/gutenblocks/custom-button.php',
			'category'			=> 'layout',
			'icon'				=> 'excerpt-view',
			'keywords'			=> array( 'button, custom, custom button' ),
		));
		}
	}

add_action('acf/init', 'acf_custom_button');

function acf_partner_slider() {

	// check function exists
	if( function_exists('acf_register_block') ) {

		// register a portfolio item block
		acf_register_block(array(
			'name'				=> 'partner_slider',
			'title'				=> __('Partner Slider'),
			'description'		=> __('A custom partner logo slider'),
			'render_template'	=> 'template-parts/gutenblocks/partners.php',
			'category'			=> 'layout',
			'icon'				=> 'excerpt-view',
			'keywords'			=> array( 'slider, partner slider, custom slider' ),
		));
		}
	}

add_action('acf/init', 'acf_partner_slider');

function acf_affiliations_block() {

	// check function exists
	if( function_exists('acf_register_block') ) {

		// register a portfolio item block
		acf_register_block(array(
			'name'				=> 'affiliation_block',
			'title'				=> __('Affiliations'),
			'description'		=> __('A simple affiliations block'),
			'render_template'	=> 'template-parts/gutenblocks/affiliations.php',
			'category'			=> 'layout',
			'icon'				=> 'excerpt-view',
			'keywords'			=> array( 'affiliations block' ),
		));
		}
	}

add_action('acf/init', 'acf_affiliations_block');

function acf_colored_heading() {

	// check function exists
	if( function_exists('acf_register_block') ) {

		// register a portfolio item block
		acf_register_block(array(
			'name'				=> 'colored_heading',
			'title'				=> __('Colored Heading'),
			'description'		=> __('A simple heading with custom color background'),
			'render_template'	=> 'template-parts/gutenblocks/colored-heading.php',
			'category'			=> 'layout',
			'icon'				=> 'excerpt-view',
			'keywords'			=> array( 'colored heading, colored, heading' ),
		));
		}
	}

add_action('acf/init', 'acf_colored_heading');

function acf_small_featured_project_block() {

	// check function exists
	if( function_exists('acf_register_block') ) {

		// register a portfolio item block
		acf_register_block(array(
			'name'				=> 'featured_project_block',
			'title'				=> __('Small Featured Projects Block'),
			'description'		=> __('A custom featured project block'),
			'render_template'	=> 'template-parts/gutenblocks/featured-project.php',
			'category'			=> 'layout',
			'icon'				=> 'excerpt-view',
			'keywords'			=> array( 'featured, project, block, featured project block' ),
		));
		}
	}

add_action('acf/init', 'acf_small_featured_project_block');

function acf_contact_block() {

	// check function exists
	if( function_exists('acf_register_block') ) {

		// register a portfolio item block
		acf_register_block(array(
			'name'				=> 'contact_block',
			'title'				=> __('Contact Block'),
			'description'		=> __('A Simple Contact block'),
			'render_template'	=> 'template-parts/gutenblocks/contact-block.php',
			'category'			=> 'layout',
			'icon'				=> 'excerpt-view',
			'keywords'			=> array( 'contact, block, contact block' ),
		));
		}
	}

add_action('acf/init', 'acf_contact_block');

function acf_leader_block() {

	// check function exists
	if( function_exists('acf_register_block') ) {

		// register a portfolio item block
		acf_register_block(array(
			'name'				=> 'leader_block',
			'title'				=> __('Leader Block'),
			'description'		=> __('A Simple Leader block'),
			'render_template'	=> 'template-parts/gutenblocks/leader-block.php',
			'category'			=> 'layout',
			'icon'				=> 'excerpt-view',
			'keywords'			=> array( 'leader, block, leader block' ),
		));
		}
	}

add_action('acf/init', 'acf_leader_block');

function acf_testimonial_block() {

	// check function exists
	if( function_exists('acf_register_block') ) {

		// register a portfolio item block
		acf_register_block(array(
			'name'				=> 'testimonial_block',
			'title'				=> __('Testimonial Block'),
			'description'		=> __('A Testimonial Slider block'),
			'render_template'	=> 'template-parts/gutenblocks/testimonial-block.php',
			'category'			=> 'layout',
			'icon'				=> 'excerpt-view',
			'keywords'			=> array( 'testimonial block, testimonial slider' ),
		));
		}
	}

add_action('acf/init', 'acf_testimonial_block');

?>
