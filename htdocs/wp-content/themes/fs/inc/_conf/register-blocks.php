<?php
/**
 * Register: Blocks
 *
 * @package axio
 */

/**
 * Set explicitly allowed blocks (all others are disallowed)
 *
 * Notice that you need to manually add any custom block or plugins'
 * blocks here to appear on Gutenberg. This is to keep the control on what
 * is or is not allowed.
 *
 * Module specific blocks should be registered from the module.
 *
 * @param bool|array $allowed_block_types_all list of block names or true for all
 * @param WP_Post $post the current post object
 *
 * @return array $allowed_block_types_all list of block names
 */
add_filter('allowed_block_types_all', function ($allowed_block_types_all, $post) {

  // remove all existing blocks
  $blocks = [];

  // base blocks without styling
  $blocks[] = 'core/block';
  $blocks[] = 'core/buttons';
  $blocks[] = 'core/button';
  $blocks[] = 'core/columns';
  $blocks[] = 'core/column';
  $blocks[] = 'core/group';
  $blocks[] = 'core/heading';
  $blocks[] = 'core/cover';
  $blocks[] = 'core/embed';
  $blocks[] = 'core/file';
  $blocks[] = 'core/gallery';
  $blocks[] = 'core/paragraph';
  $blocks[] = 'core/media-text';
  $blocks[] = 'core/editor';
  $blocks[] = 'core/spacer';
  $blocks[] = 'core/image';
  $blocks[] = 'core/row';
  $blocks[] = 'core/list';
  $blocks[] = 'core/list-item';
  $blocks[] = 'core/table';
  $blocks[] = 'core/table-of-contents';
  $blocks[] = 'are-you-paying-attention';
  $blocks[] = 'ourplugin/are-you-paying-attention';

  // other blocks added from modules
  return $blocks;

}, 10, 2);
