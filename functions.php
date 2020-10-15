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
    wp_enqueue_script('main-uni-js', get_theme_file_uri('/js/scripts-bundled.js'), NULL, '1.0', true);
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font_awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('uni_main_styles', get_stylesheet_uri());
  }
  add_action('wp_enqueue_scripts', 'get_uni_files');

  function get_tab_titles() {
    add_theme_support('title-tag');
  }

  add_action('after_setup_theme', 'get_tab_titles');
?>