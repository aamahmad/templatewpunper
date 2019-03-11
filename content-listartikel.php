<div class="row">
  <div class="container">
    <!--produk per kategori-->
    <div class="section notopmargin nobottommargin" style="padding-bottom:40px;">
        <div class="container clearfix">


          <!--produk per kategori-->
          <?php
          $categories = get_categories( array(
              'hide_empty' => false,
              'order'   => 'DESC',
              'orderby' => 'post_date',
              'parent' => 0,
          ));
          foreach( $categories as $category ) {
              $category_link = sprintf(
                  '%3$s',
                  esc_url( get_category_link( $category->term_id ) ),
                  esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ),
                  esc_html( $category->name )
              );
              $category_link2 = sprintf(
                  '<a href="%1$s" alt="%2$s" class="btn btn-default btn-xs" style="margin-top:10px;" >%3$s</a>',
                  esc_url( get_category_link( $category->term_id ) ),
                  esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ),
                  esc_html( 'Konten Lainnya...' )
              );?>

            <!-- our-products-area start -->

            <!--welcome-->





          <div class="col-md-4 nobottommargin">

            <div class="heading-block">
              <h3><?php echo sprintf( esc_html__( '%s', 'textdomain' ), $category_link );?> </h3>
            </div>

            <!-- loop post -->
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
            <!-- loop end -->

          </div>

          <?php
        }?>

      </div>

</div>
</div>