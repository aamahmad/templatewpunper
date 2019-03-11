<?php
// WordPress Titles
add_theme_support( 'title-tag' );

// Support Featured Images
add_theme_support( 'post-thumbnails' );

// logo dinamis
add_theme_support( 'custom-logo' );

function themename_custom_logo_setup() {
    $defaults = array(
        'height'      => 55,
        'width'       => 222,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );


//CONTACT INFO
add_action('admin_menu', function() {
    add_options_page( 'Kontak Info', 'Kontak Info', 'manage_options', 'my-awesome-plugin', 'my_awesome_plugin_page' );
});


add_action( 'admin_init', function() {
    register_setting( 'my-awesome-plugin-settings', 'map_option_1' );
    register_setting( 'my-awesome-plugin-settings', 'map_option_2' );
    register_setting( 'my-awesome-plugin-settings', 'map_option_3' );
    register_setting( 'my-awesome-plugin-settings', 'map_option_4' );
    register_setting( 'my-awesome-plugin-settings', 'map_option_5' );
});


function my_awesome_plugin_page() {
  ?>
    <div class="wrap">
      <form action="options.php" method="post">

        <?php
          settings_fields( 'my-awesome-plugin-settings' );
          do_settings_sections( 'my-awesome-plugin-settings' );
        ?>
        <table>
            <tr>
                <th>Teks Pembuka</th>
                <td><textarea placeholder="Lokasi alamat" name="map_option_5" rows="5" cols="100"><?php echo esc_attr( get_option('map_option_5') ); ?></textarea></td>
            </tr>

            <tr>
                 <th>Link Gambar Logo</th>
                <td><input type="text" placeholder="link gambar logo bawah" name="map_option_1" value="<?php echo esc_attr( get_option('map_option_1') ); ?>"></td>
            </tr>
            <tr>
                <th>Lokasi/alamat</th>
                <td><textarea placeholder="Lokasi alamat" name="map_option_2" rows="5" cols="100"><?php echo esc_attr( get_option('map_option_2') ); ?></textarea></td>
            </tr>
            <tr>
                <th>Kontak</th>
                <td><textarea placeholder="Phone / Telepon" name="map_option_3" rows="5" cols="100"><?php echo esc_attr( get_option('map_option_3') ); ?></textarea></td>
            </tr>
            <tr>
                <th>Teks Footer</th>
                <td><textarea placeholder="Email" name="map_option_4" rows="5" cols="100"><?php echo esc_attr( get_option('map_option_4') ); ?></textarea></td>
            </tr>

            <tr>
                <td><?php submit_button(); ?></td>
            </tr>

        </table>

      </form>
    </div>
  <?php
}
//END INFO KONTAK


// MENU
function wpb_custom_new_menu() {
  register_nav_menus(
    array(
      'menu-link-halaman' => __( 'Menu Link/Halaman'),
      'menu-link-utama' => __( 'Menu Navigasi Utama'),
      'link-footer-sosmed' => __( 'Link Footer Sosmed'),
    )
  );
}
add_action( 'init', 'wpb_custom_new_menu' );

// Menu Link Halaman
function create_menu_link_halaman( $theme_location ) {
    if ( ($theme_location) && ($locations = get_nav_menu_locations()) && isset($locations[$theme_location]) ) {


        $menu = get_term( $locations[$theme_location], 'nav_menu' );
        $menu_items = wp_get_nav_menu_items($menu->term_id);


        foreach( $menu_items as $menu_item ) {
            if( $menu_item->menu_item_parent == 0 ) {

                $parent = $menu_item->ID;
                 $class = esc_attr( implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $menu_item->classes ), $menu_item) ) );
                $menu_array = array();
                foreach( $menu_items as $submenu ) {
                    if( $submenu->menu_item_parent == $parent ) {
                        $bool = true;
                        $menu_array[] = '<li><a href="' . $submenu->url . '" title="' . $submenu->title . '"><i class="fa fa-university"></i>' . $submenu->title . '</a></li>' ."\n";
                    }
                }
                if( $bool == true && count( $menu_array ) > 0 ) {

                   $menu_list .= '<li><a href="http://www.umy.ac.id" title="Web UMY"><i class="fa ' .  $class . '"></i> &nbsp;' ."\n";
                   $menu_list .= '<span>' . $menu_item->title . '</span' ."";
                   $menu_list .= implode( "", $menu_array );
                   $menu_list .= '</a></li>' ."\n";

                } else {

                    $menu_list .= '<li><a href="' . $menu_item->url . '" title="' . $menu_item->title . '"><i class="fa ' .  $class . '"></i> &nbsp;' ."";
                    $menu_list .= '' . $menu_item->title . '' ."";
                    $menu_list .= '</a></li>' ."\n";

                }

            }

            // end <li>
        }


    } else {
        $menu_list = '<!-- no menu defined in location "'.$theme_location.'" -->';
    }

    echo $menu_list;
}


// Menu Link Utama
function create_menu_link_utama( $theme_location ) {
    if ( ($theme_location) && ($locations = get_nav_menu_locations()) && isset($locations[$theme_location]) ) {


        $menu = get_term( $locations[$theme_location], 'nav_menu' );
        $menu_items = wp_get_nav_menu_items($menu->term_id);

        foreach( $menu_items as $menu_item ) {
            if( $menu_item->menu_item_parent == 0 ) {

                $parent = $menu_item->ID;

                $menu_array = array();
                foreach( $menu_items as $submenu ) {
                    if( $submenu->menu_item_parent == $parent ) {
                        $bool = true;
                        $menu_array[] = '<li><a href="' . $submenu->url . '">' . $submenu->title . '</a></li>' ."\n";
                    }
                }
                if( $bool == true && count( $menu_array ) > 0 ) {

                   $menu_list .= '<li><a title="Profil" href="#" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">' ."";
                   $menu_list .= '' . $menu_item->title . '<span class="caret"></span></a>' ."\n";
                   $menu_list .= '<ul role="menu" class="dropdown-menu">' ."\n";
                   $menu_list .= implode( "", $menu_array );
                   $menu_list .= '</ul></li>' ."\n";

                } else {

                    $menu_list .= '<li><a href="' . $menu_item->url . '" title="' . $menu_item->title . '">' ."";
                    $menu_list .= '' . $menu_item->title . '' ."";
                    $menu_list .= '</a></li>' ."\n";

                }

            }

            // end <li>
        }


    } else {
        $menu_list = '<!-- no menu defined in location "'.$theme_location.'" -->';
    }

    echo $menu_list;
}


// CUSTOME POST SLIDER
$args = array(
    'public' => true,
    'publicly_queryable' => true,
    'labels'       => array(
      'name'       => __( 'Sliders' ),
      'add_new'    => __( 'Tambah baru'),
      'add_new_item' => __( 'Tambah Slider Baru'),
    ),
    'show_ui' => true,
    'show_in_menu' => true,
    'capability_type' => 'post',
    'has_archive' => true,
    'menu_icon'  => 'dashicons-images-alt2',
    'supports' => array('title')
);
register_post_type('slider',$args);

// Tambahan isian di custome post type Slider
function slider_meta_box( $meta_boxes ) {
  $prefix = 'slider-';

  $meta_boxes[] = array(
    'id' => 'slider',
    'title' => esc_html__( 'Slider', 'metabox-online-generator' ),
    'post_types' => array( 'slider' ),
    'context' => 'advanced',
    'priority' => 'default',
    'autosave' => false,
    'fields' => array(
      array(
        'id' => $prefix . 'radio_5',
        'name' => esc_html__( 'Tampilkan', 'metabox-online-generator' ),
        'type' => 'radio',
        'desc' => esc_html__( 'Tampilkan slider', 'metabox-online-generator' ),
        'placeholder' => '',
        'options' => array(
          1 => 'Tampilkan',
          'Tidak ditampilkan',
        ),
        'inline' => true,
        'std' => '2',
      ),
      array(
        'id' => $prefix . 'image_advanced_bg',
        'type' => 'image_advanced',
        'name' => esc_html__( 'Gambar Slider', 'metabox-online-generator' ),
        'desc' => esc_html__( 'gambar Slider header', 'metabox-online-generator' ),
        'max_file_uploads' => '1',
      ),
      array(
        'id' => $prefix . 'linktujuan',
        'type' => 'text',
        'name' => esc_html__( 'Link Tujuan', 'metabox-online-generator' ),
        'desc' => esc_html__( 'Link Ke Tujuan Konten', 'metabox-online-generator' ),
        'placeholder' => esc_html__( 'http://', 'metabox-online-generator' ),
      ),
    ),
  );

  return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'slider_meta_box' );


/**/
// breadcrumb
function the_breadcrumb() {
    echo '<ol class="cd-breadcrumb custom-separator">';
  if (!is_home()) {
    echo '<li><a href="';
    echo get_option('Home');
    echo '">';
    echo 'Home';
    echo "</a></li>";
    if (is_category() || is_single()) {
      echo '<li>';
      the_category(' </li><li> ');
      if (is_single()) {
        echo "</li><li class='current'><em>";
        the_title();
        echo '</em></li>';
      }
    } elseif (is_page()) {
      echo '<li class="current"><em>';
      echo the_title();
      echo '</em></li>';
    }
  }
  elseif (is_tag()) {single_tag_title();}
  elseif (is_day()) {echo"<li>Archive for "; the_time('F jS, Y'); echo'</li>';}
  elseif (is_month()) {echo"<li>Archive for "; the_time('F, Y'); echo'</li>';}
  elseif (is_year()) {echo"<li>Archive for "; the_time('Y'); echo'</li>';}
  elseif (is_author()) {echo"<li>Author Archive"; echo'</li>';}
  elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {echo "<li>Blog Archives"; echo'</li>';}
  elseif (is_search()) {echo"<li>Search Results"; echo'</li>';}
  echo '</ol>';
}

// breadcrumb
function the_breadcrumb2() {
    echo '<ol class="cd-breadcrumb custom-separator">';
  if (!is_home()) {
    echo '<li><a href="';
    echo get_option('Home');
    echo '">';
    echo 'Home';
    echo "</a></li>";
    if (is_category() || is_single()) {
      echo '<li>';
      the_category(' </li><li> ');
      if (is_single()) {
        echo "".get_post_type()."</li><li class='current'><em>";
        the_title();
        echo '</em></li>';
      }
    } elseif (is_page()) {
      echo '<li class="current"><em>';
      echo the_title();
      echo '</em></li>';
    }
  }
  elseif (is_tag()) {single_tag_title();}
  elseif (is_day()) {echo"<li>Archive for "; the_time('F jS, Y'); echo'</li>';}
  elseif (is_month()) {echo"<li>Archive for "; the_time('F, Y'); echo'</li>';}
  elseif (is_year()) {echo"<li>Archive for "; the_time('Y'); echo'</li>';}
  elseif (is_author()) {echo"<li>Author Archive"; echo'</li>';}
  elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {echo "<li>Blog Archives"; echo'</li>';}
  elseif (is_search()) {echo"<li>Search Results"; echo'</li>';}
  echo '</ol>';
}


// GALLERY
$args = array(
    'public' => true,
    'publicly_queryable' => true,
    'labels'       => array(
      'name'       => __( 'Gallery' ),
      'add_new'    => __( 'Tambah baru'),
      'add_new_item' => __( 'Tambah Gallery Baru'),
    ),
    'show_ui' => true,
    'show_in_menu' => true,
    'capability_type' => 'post',
    'has_archive' => true,
    'menu_icon'  => 'dashicons-images-alt2',
    'supports' => array('title')
);
register_post_type('gallery',$args);

function gallery( $meta_boxes ) {
  $prefix = 'gallery-';

  $meta_boxes[] = array(
    'id' => 'gallery',
    'title' => esc_html__( 'Gallery', 'gallery-unper' ),
    'post_types' => array('gallery'),
    'context' => 'advanced',
    'priority' => 'default',
    'autosave' => 'false',
    'fields' => array(
      array(
        'id' => $prefix . 'radio_5',
        'name' => esc_html__( 'Tampilkan', 'metabox-online-generator' ),
        'type' => 'radio',
        'desc' => esc_html__( 'Tampilkan slider', 'metabox-online-generator' ),
        'placeholder' => '',
        'options' => array(
          1 => 'Tampilkan',
          'Tidak ditampilkan',
        ),
        'inline' => true,
        'std' => '2',
      ),
      array(
        'id' => $prefix . 'radio_1',
        'name' => esc_html__( 'Jenis Konten', 'metabox-online-generator' ),
        'type' => 'radio',
        'desc' => esc_html__( 'Jenis Konten', 'metabox-online-generator' ),
        'placeholder' => '',
        'options' => array(
          1 => 'Gambar',
          'Video',
          'Tampilkan Video dan Gambar',
        ),
        'inline' => true,
        'std' => '1',
      ),
      array(
        'id' => $prefix . 'gallery-cover',
        'type' => 'image_advanced',
        'name' => esc_html__( 'Gambar Cover Depan', 'gallery-unper' ),
        'force_delete' => 'false',
        'max_status' => 'false',
        'max_file_uploads' => '1',
      ),
      array(
        'id' => $prefix . 'embedvideo',
        'type' => 'textarea',
        'name' => esc_html__( 'Konten Video ( embed kode youtube)', 'gallery-unper' ),
        'rows' => 3,
      ),
      array(
        'id' => $prefix . 'gallery',
        'type' => 'image_advanced',
        'name' => esc_html__( 'Gambar Gallery Thumbnail', 'gallery-unper' ),
        'force_delete' => 'false',
        'max_status' => 'false',
        'max_file_uploads' => '10',
      ),
      array(
        'id' => $prefix . 'deskripsi',
        'type' => 'textarea',
        'name' => esc_html__( 'Deskripsi singkat', 'gallery-unper' ),
        'rows' => 6,
      ),
    ),
  );

  return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'gallery' );


// CUSTOME POST Kolaborasi
$args = array(
    'public' => true,
    'publicly_queryable' => true,
    'labels'       => array(
      'name'       => __( 'Kolaborasi' ),
      'add_new'    => __( 'Tambah baru'),
      'add_new_item' => __( 'Tambah Gambar Kolaborasi'),
    ),
    'show_ui' => true,
    'show_in_menu' => true,
    'capability_type' => 'post',
    'has_archive' => true,
    'menu_icon'  => 'dashicons-images-alt2',
    'supports' => array('title')
);
register_post_type('kolaborasi',$args);

// Tambahan isian di custome post type Slider
function kolaborasi_meta_box( $meta_boxes ) {
  $prefix = 'kolaborasi-';

  $meta_boxes[] = array(
    'id' => 'kolaborasi',
    'title' => esc_html__( 'Kolaborasi', 'metabox-online-generator' ),
    'post_types' => array( 'kolaborasi' ),
    'context' => 'advanced',
    'priority' => 'default',
    'autosave' => false,
    'fields' => array(
      array(
        'id' => $prefix . 'radio_5',
        'name' => esc_html__( 'Tampilkan', 'metabox-online-generator' ),
        'type' => 'radio',
        'desc' => esc_html__( 'Tampilkan kolaborasi', 'metabox-online-generator' ),
        'placeholder' => '',
        'options' => array(
          1 => 'Tampilkan',
          'Tidak ditampilkan',
        ),
        'inline' => true,
        'std' => '2',
      ),
      array(
        'id' => $prefix . 'image_advanced_bg',
        'type' => 'image_advanced',
        'name' => esc_html__( 'Gambar Slider', 'metabox-online-generator' ),
        'desc' => esc_html__( 'gambar Slider header', 'metabox-online-generator' ),
        'max_file_uploads' => '1',
      ),
      array(
        'id' => $prefix . 'linktujuan',
        'type' => 'text',
        'name' => esc_html__( 'Link Tujuan', 'metabox-online-generator' ),
        'desc' => esc_html__( 'Link Ke Tujuan Konten', 'metabox-online-generator' ),
        'placeholder' => esc_html__( 'http://', 'metabox-online-generator' ),
      ),
    ),
  );

  return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'kolaborasi_meta_box' );
