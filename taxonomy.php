/* Taxonomy
---------------------------------------------------------------------------------
*/
add_action( 'init', 'buat_jenis_products' );
function buat_jenis_products() {
 $labels = array(
    'name'              => _x( 'Jenis Produk', 'nama umum taxonomy' ),
    'singular_name'     => _x( 'Jenis Produk', 'nama tunggal taxonomy' ),
    'search_items'      =>  __( 'Cari Jenis Produk' ),
    'all_items'         => __( 'Semua Jenis Produk' ),
    'parent_item'       => __( 'Induk Jenis Produk' ),
    'parent_item_colon' => __( 'Induk Jenis Produk:' ),
    'edit_item'         => __( 'Ubah Jenis Produk' ),
    'update_item'       => __( 'Perbaharui Jenis Produk' ),
    'add_new_item'      => __( 'Tambah Jenis Produk Baru' ),
    'new_item_name'     => __( 'Tambah Nama Jenis Produk' ),
  );    

  register_taxonomy('jenis','produk',array(
    'hierarchical' => true,
    'labels' => $labels,
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true
  ));
}
