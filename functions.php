<!-- 
  -add_action() allows us to give WP directions, in this case we are using it to look up stylesheet
  the first argument is a WP hook, our way of telling WP what we need to happen
  the second argument we pass in is a function we created
  -in that function we call the function we need to load the type of asset we are trying to load
  here were are loading styles so we call wp_enqueue_style, in the first argument we give the asset a name
  in the second argument we can pass a function that points to a folder
 -->

<?php 
  function get_uni_files() {
    wp_enqueue_style('uni_main_styles', get_stylesheet_uri());
  }
  add_action('wp_enqueue_scripts', 'get_uni_files');
?>