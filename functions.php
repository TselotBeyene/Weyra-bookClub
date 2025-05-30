<?php
function weyra_theme_setup() {
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'weyra_theme_setup');

function register_book_post_type() {
    register_post_type('book', [
        'labels' => [
            'name' => 'Books',
            'singular_name' => 'Book'
        ],
        'public' => true,
        'has_archive' => true,
        'rewrite' => ['slug' => 'books'],
        'supports' => ['title', 'editor', 'thumbnail'],
    ]);
}
add_action('init', 'register_book_post_type');

function register_book_taxonomies() {
    register_taxonomy('genre', 'book', [
        'labels' => [
            'name' => 'Genres',
            'singular_name' => 'Genre',
        ],
        'public' => true,
        'hierarchical' => true,
        'show_admin_column' => true,
        'rewrite' => ['slug' => 'genre'],
    ]);
}
add_action('init', 'register_book_taxonomies');
?>
