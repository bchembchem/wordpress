<?php
add_theme_support( 'menus' ); 
if ( function_exists( 'register_sidebar' ) ) {
register_sidebar( array(
'name' => 'ウィジェットエリア01',
'id' => 'widget_area01',
'before_widget' => '<div class=”widget”>',
'after_widget' => '</div>',
'before_title' => '<h3>',
'after_title' => '</h3>'
) );
}
?>
