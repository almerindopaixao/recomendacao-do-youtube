<?php

/**
 * Plugin Name: Recomendação do Youtube
 */

 add_filter('the_content', 'thanks');

 function thanks( $content ) {
     return $content . '<p><strong>Obrigado!</strong></p>';
 }