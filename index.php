<?php get_header(); ?>

    <!--slider-->
    <div class="row slider">
      <div class="container">
        <div class="col-md-12">

            <!-- Place somewhere in the <body> of your page -->
            <div class="flexslider">
              <ul class="slides">
                    <?php
                    // loop tampil produk
                        $the_query = new WP_Query(array(
                          'post_status' => 'publish',
                          'posts_per_page' => 10,
                          'post_type' => 'slider',
                      ));
                      ?>

                      <?php if ($the_query->have_posts()) : ?>
                          <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                            <?php
                          /* Include the Post-Format-specific template for the content.
                           * If you want to overload this in a child theme then include a file
                           * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                           */
                          get_template_part( 'content-slider', get_post_format() );
                          ?>
                      <?php endwhile; ?>
                      <?php wp_reset_postdata(); ?>
                    <?php endif; ?>
              </ul>
            </div>

        </div>
      </div>
    </div>


    <!--welcome-->
    <div class="row">
      <div class="container">
        <div class="col-md-12">
          <div class="welcome clearfix" style="background: #ddd; margin-left: 0; margin-right: 0;">
              <div class="callout-text" style="align-content: center;">
              <p style="text-align: center; font-size: 18px">PMB Online Tahun 2018 sudah berakhir.
                <a href="https://pendaftaran.sbmptn.ac.id/awal.php" style="color: #fff; background-color:#065139;border-color:#065139" target="_blank" class="btn btn-flat shadow rounded">PMB Online</a>
              </p>
              </div>
          </div>
        </div>
      </div>
    </div>

<?php include(dirname(__FILE__) . "/content-listartikel.php"); ?>

<section class="home_section" id="section_client">
  <div class="bg_client clearfix">
    <div class="ak-container">
      <div class="client_wrap">

        <div class="effect_title">
          <div class="after-effet1"></div>
            <div class="section_title">
              <span class="title_one wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">We collaborate with</span>
              <span class="title_two wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">Our Partners</span>
            </div>
        </div>

        <div class="client_cat_loop owl-carousel wow fadeInUp owl-loaded owl-drag" style="margin-bottom: 15px; visibility: visible; animation-name: fadeInUp;">
            <div class="owl-stage-outer">
              <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 991px;">

                <?php
                // loop tampil produk
                    $the_query = new WP_Query(array(
                      'post_status' => 'publish',
                      'posts_per_page' => 50,
                      'post_type' => 'kolaborasi',
                  ));
                  ?>

                  <?php if ($the_query->have_posts()) : ?>
                      <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <?php
                      /* Include the Post-Format-specific template for the content.
                       * If you want to overload this in a child theme then include a file
                       * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                       */
                      get_template_part( 'content-kolaborasi', get_post_format() );
                      ?>
                  <?php endwhile; ?>
                  <?php wp_reset_postdata(); ?>
                <?php endif; ?>

              <div>
            </div>
          </div>
      </div>
    </div>
  </div>
</section>





</div>

<?php get_footer(); ?>
