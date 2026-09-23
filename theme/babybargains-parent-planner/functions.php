<?php
/**
 * Baby Bargains Parent Planner functions.
 *
 * @package BabyBargains_Parent_Planner
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Loads the theme stylesheet in the block editor so patterns preview like the front end.
 */
function bbpp_setup() {
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'bbpp_setup' );

/**
 * Enqueues the front-end stylesheet.
 */
function bbpp_enqueue_styles() {
	wp_enqueue_style(
		'babybargains-parent-planner',
		get_stylesheet_uri(),
		array(),
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', 'bbpp_enqueue_styles' );

/**
 * Registers the pattern category used by everything in /patterns.
 */
function bbpp_register_pattern_category() {
	register_block_pattern_category(
		'babybargains',
		array(
			'label'       => __( 'Baby Bargains', 'babybargains-parent-planner' ),
			'description' => __( 'Parent Planner homepage sections: hero, chips, deals, compare, guides.', 'babybargains-parent-planner' ),
		)
	);
}
add_action( 'init', 'bbpp_register_pattern_category' );

/**
 * Registers block style variations. Their CSS lives in style.css.
 */
function bbpp_register_block_styles() {
	register_block_style(
		'core/button',
		array(
			'name'  => 'pp-ghost',
			'label' => __( 'Ghost', 'babybargains-parent-planner' ),
		)
	);
	register_block_style(
		'core/button',
		array(
			'name'  => 'pp-chip',
			'label' => __( 'Chip', 'babybargains-parent-planner' ),
		)
	);
	register_block_style(
		'core/group',
		array(
			'name'  => 'pp-card',
			'label' => __( 'Card', 'babybargains-parent-planner' ),
		)
	);
	register_block_style(
		'core/table',
		array(
			'name'  => 'pp-compare',
			'label' => __( 'Deal compare', 'babybargains-parent-planner' ),
		)
	);
}
add_action( 'init', 'bbpp_register_block_styles' );
