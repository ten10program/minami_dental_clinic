<?php

function my_script_init() {
  wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.8.2/css/all.css', [], '5.8.2', 'all');
  wp_enqueue_style('my', get_template_directory_uri() . '/css/style.css', [], '1.0.0', 'all');

  wp_enqueue_script('my', get_template_directory_uri() . '/js/script.js', ['jquery'], '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'my_script_init');