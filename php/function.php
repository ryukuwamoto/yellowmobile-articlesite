<?php
function my_theme_enqueue_styles() {
    // 1. 全ページ共通：テーマフォルダ直下の style.css を読み込む
    wp_enqueue_style( 'main-style', get_stylesheet_uri() );

    // 2. 記事詳細ページ：テーマフォルダ直下の single.css を読み込む
    if ( is_single() ) {
        wp_enqueue_style( 'single-style', get_template_directory_uri() . '/single.css' );
    }

    // 3. カテゴリー・アーカイブページ：テーマフォルダ直下の archive.css を読み込む
    if ( is_archive() || is_category() ) {
        wp_enqueue_style( 'archive-style', get_template_directory_uri() . '/archive.css' );
    }
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );