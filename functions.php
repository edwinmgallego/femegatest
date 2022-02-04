<?php 
//inportacion del  navwalker para  menu
require_once('wp-bootstrap-navwalker.php');
//sopoerte  para  este  tema

function wpb_theme_setup(){

    add_theme_support('post-thumbnails');//soporte  para  imagenes del tema
    //menus  de  navegacion
    register_nav_menu( array(
        'primary'=>__('Primary Menu');
    ));


}




?>