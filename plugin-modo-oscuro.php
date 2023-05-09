<?php

//Plugin name: Modo Oscuro
//Description: Activa el modo oscuro en el tema (theme)
//Version: 1.0
//Author: Andres Diaz
//Autthor URI: https://github.com/andreseds

function estilos_plugin(){

    $estilos_url = plugin_dir_url(__FILE__);

    wp_enqueue_style('modo_oscuro',$estilos_url.'/assets/css/estilo.css', '','1.0','all');
}

add_action('wp_enqueue_scripts','estilos_plugin');