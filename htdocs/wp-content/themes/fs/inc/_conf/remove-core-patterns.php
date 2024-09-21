<?php 

add_filter( 'should_load_remote_block_patterns', '__return_false' );

/**
 * Remove patterns that ship with WordPress Core.
 */
function axio_remove_core_block_patterns() {
	remove_theme_support( 'core-block-patterns' );
}
add_action( 'after_setup_theme', 'axio_remove_core_block_patterns' );