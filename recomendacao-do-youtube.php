<?php

/**
 * @link https://github.com/almerindopaixao/recomendacao-do-youtube
 * @since 1.0.0
 * @package Recomendacao_Do_Youtube
 * 
 * @wordpress-plugin
 * Plugin Name: Recomendação do Youtube
 * Plugin URI: https://github.com/almerindopaixao/recomendacao-do-youtube
 * Description: Plugin para wordpress que adiciona display dos últimos vídeos de canais do youtube usando youtube feed 
 * Version: 1.0.0
 * Author: Almerindo Paixão
 * Author URI: https://github.com/almerindopaixao
 * License: https://opensource.org/licenses/MIT
 * Text Domain: recomendacao-do-youtube
 * Domain Path: /languages/
 */

 // Você só pode carregar o arquivo na loja do wordpress
 if ( ! defined( 'WPINC' ) ) {
    wp_die();
 }

 // Plugin Version
 if ( ! defined( 'RECOMENDACAO_DO_YOUTUBE_VERSION' ) ) {
    defined( 'RECOMENDACAO_DO_YOUTUBE_VERSION', '1.0.0' );     
 }

 // Plugin Name
 if ( ! defined( 'RECOMENDACAO_DO_YOUTUBE_NAME' ) ) {
    defined( 'RECOMENDACAO_DO_YOUTUBE_NAME', 'Recomendação do Youtube' );
 }

 // Plugin Slug
 if ( ! defined( 'RECOMENDACAO_DO_YOUTUBE_PLUGIN_SLUG' ) ) {
    defined( 'RECOMENDACAO_DO_YOUTUBE_PLUGIN_SLUG', 'recomendacao-do-youtube' );
 }

 // Plugin Basename
 if ( !defined( 'RECOMENDACAO_DO_YOUTUBE_BASENAME' ) ) {
    defined( 'RECOMENDACAO_DO_YOUTUBE_BASENAME', plugin_basename(__FILE__) );
 }

 // Plugin Folder
 if ( !defined( 'RECOMENDACAO_DO_YOUTUBE_PLUGIN_DIR' ) ) {
    defined( 'RECOMENDACAO_DO_YOUTUBE_PLUGIN_DIR', plugin_dir_path(__FILE__) );
 }

 // JSON File Name
 if ( !defined( 'RECOMENDACAO_DO_YOUTUBE_JSON_FILENAME' ) ) {
    defined( 'RECOMENDACAO_DO_YOUTUBE_JSON_FILENAME', 'meu-yt-rec.json' );
 }

 require_once RECOMENDACAO_DO_YOUTUBE_PLUGIN_DIR . 'includes/class-my-recomendacao-do-youtube.php';
 require_once RECOMENDACAO_DO_YOUTUBE_PLUGIN_DIR . 'includes/class-my-recomendacao-do-youtube-json.php';
 require_once RECOMENDACAO_DO_YOUTUBE_PLUGIN_DIR . 'includes/class-my-recomendacao-do-youtube-shortcode.php';
 require_once RECOMENDACAO_DO_YOUTUBE_PLUGIN_DIR . 'includes/class-my-recomendacao-do-youtube-widget.php';

 if ( is_admin() ) {
   require_once RECOMENDACAO_DO_YOUTUBE_PLUGIN_DIR . 'includes/class-my-recomendacao-do-youtube-admin.php';
 }

 $my_yt_rec_admin = new My_Youtube_recommendation_Admin(
    RECOMENDACAO_DO_YOUTUBE_BASENAME,
    RECOMENDACAO_DO_YOUTUBE_PLUGIN_SLUG,
    RECOMENDACAO_DO_YOUTUBE_JSON_FILENAME,
    RECOMENDACAO_DO_YOUTUBE_VERSION
 );