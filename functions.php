<?php
include __DIR__ . '/include/cleanup.php';
include __DIR__ . '/include/enqueue.php';
include __DIR__ . '/include/partials.php';
include __DIR__ . '/include/helpers.php';

if (function_exists('acf_add_options_page')) {
  acf_add_options_page([
    'page_title' => 'General',
    'position'   => '2.1',
  ]);
}

add_filter('use_block_editor_for_post_type', function ($use_block_editor, $post_type) {
  if ('page' === $post_type) {
    return false;
  }
  return $use_block_editor;
}, 10, 2);