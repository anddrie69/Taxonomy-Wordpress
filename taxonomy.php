<?php
/* Taxonomy
---------------------------------------------------------------------------------
*/
function product_taxo() {
 $labels = array(
    'name' => _x( 'Produk', 'nama general taxonomy' ),
    'singular_name' => _x( 'Produk', 'nama tunggal taxonomy' ),
    'search_items' => __( 'Cari Produk' ),
    'all_items' => __( 'Semua Produk' ),
    'parent_item' => __( 'Induk Produk' ),
    'parent_item_colon' => __( 'Induk Produk:' ),
    'edit_item' => __( 'Ubah Produk' ),
    'update_item' => __( 'Perbaharui Produk' ),
    'add_new_item' => __( 'Tambah Produk Baru' ),
    'new_item_name' => __( 'Tambah Nama Produk' ),
  );

  $args = array(
    'label'             => __( 'product', 'anddrie'),
    'description'       => __( 'Insert product', 'anddrie'),
    'labels'            => $labels,
    'supports'          => array('title', 'editor', 'thumbnail'),
    'hierarchical'      => true,
    'show_ui'           => true,
    'show_in_menu'      => true,
    'show_in_nav_menu'  => true,
    'show_in_admin_bar' => true,
    'menu_position'     => 5,
    'can_export'        => true,
    'has_archive'       => true,
    'exclude_from_search' => true,
    'publicly_queryable' => true,
    'query_var'         => 'product',
    'capability_type'   => 'post'
  );

  register_post_type('product', $args);
}
add_action( 'init', 'product_taxo' );
