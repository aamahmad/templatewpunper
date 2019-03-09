<div class="row">
  <div class="container">
    <!--produk per kategori-->
    <?php
    $categories = get_categories( array(
        'hide_empty' => false,
        'order'   => 'DESC',
        'parent' => 0
    ));

    foreach( $categories as $category ) {
        $category_link = sprintf(
            '<a href="%1$s" alt="%2$s">%3$s</a>',
            esc_url( get_category_link( $category->term_id ) ),
            esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ),
            esc_html( $category->name )
        );

        $category_link2 = sprintf(
            '<a href="%1$s" alt="%2$s" class="btn btn-primary btn-xs pull-right" >%3$s</a>',
            esc_url( get_category_link( $category->term_id ) ),
            esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ),
            esc_html( 'Lainnya...' )
        );?>

      <!-- our-products-area start -->

      <!--welcome-->


      <div class="col-md-12">
          <div class="widget-item">

              <h3><?php echo sprintf( esc_html__( '%s', 'textdomain' ), $category_link );?>
              <?php echo sprintf( esc_html__( '%s', 'textdomain' ), $category_link2 );?></h3>



              <div class="row">
              <!-- loop produkbusana -->
              <?php
              $paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' )) : 1;
              $kategori = esc_attr( sprintf( __( '%s', 'textdomain' ), $category->slug ));
              $nama_kategori = esc_attr( sprintf( __( '%s', 'textdomain' ), $category->name ));

              $args = array(
                'posts_per_page' => 10,
                'paged' => $paged,
                'category_name' => $kategori,
              );

              $the_query = new WP_Query( $args );?>

              <?php
              if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                <?php get_template_part('content', get_post_format() );?>

              <?php endwhile; endif; wp_reset_postdata();?>
              <!-- loop produkbusana end -->
            </div>
          </div>
      </div>
      <!-- our-products-area end -->
      <?php
    }?>

    <div class="col-md-12">
      <div class="widget-item">
        <h3>Gallery
        <a href="http://appunper.xyz/gallery/" class="btn btn-primary btn-xs pull-right">View more gallery</a>
        </h3>
        <section class="gallery no-gutter">
          <div class="row">
            <?php
            // loop tampil produk
            $the_query = new WP_Query(array(
              'post_status' => 'publish',
              'posts_per_page' => 10,
              'post_type' => 'gallery',
            ));
            ?>

            <?php if ($the_query->have_posts()) : ?>
              <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <?php
                 /* Include the Post-Format-specific template for the content.
                  * If you want to overload this in a child theme then include a file
                  * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                  */
                  get_template_part( 'content-gallery', get_post_format() );
                ?>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>

          </div>
          <div class="col-xs-12">

          </div>
        </section>
      </div>
    </div>
    <!--end-->
</div>
</div>
