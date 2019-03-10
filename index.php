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

    <!--program -->


<!--  <hr class="style-two"> -->

  <!--JOURNAL-->
  <!--s
<div class="row-container light bg-parallax dark" style="background-color: rgb(62, 66, 69); background-position: 30% 585px; margin-top: 20px; padding-bottom: 20px;">
  <div class="container">
    <div class="row">
      <div style="margin-top:-70px"></div>
      <div class="col-md-12 ">
        <div class="row">
          <div class="tw-element col-md-12" style=""><h3 style="text-align: center; font-weight: 300; color: #fff;">TOP FOUR HOTEST ARTICLE FROM JOURNAL</h3>
            </div>
          </div>

    <div class="row" style="padding-top: 40px;">
      <div class="tw-element  col-md-3" style="">
        <div class="tw-service-box style-4">
          <div class="tw-service-icon" style="margin-top:-30px;">
            <i class="fa fa-files-o" style="border-style: solid;font-style:normal;text-align:center;font-size:32px;line-height:34px;padding:18px;color:#ffffff;background-color:#065139;border-color:#065139;border-width:2px;border-radius:4px;-webkit-border-radius:4px;-moz-border-radius:4px;"></i>
          </div>
          <div class="tw-service-content2 ">
            <h3>RETNO ENDAH PUSPITASARI</h3>
            <div class="service-title-sep"></div>
            <p>PENGARUH KINERJA KEUANGAN TERHADAP NILAI PERUSAHAAN DENGAN PENGUNGKAPAN CORPORATE SOCIAL .........</p>
            <a href="#" target="_blank">Unduh Journal</a>
          </div>
        </div>
      </div>

      <div class="tw-element  col-md-3" style="">
        <div class="tw-service-box style-4">
          <div class="tw-service-icon" style="margin-top:-30px;">
            <i class="fa fa-files-o" style="border-style: solid;font-style:normal;text-align:center;font-size:32px;line-height:34px;padding:18px;color:#ffffff;background-color:#065139;border-color:#065139;border-width:2px;border-radius:4px;-webkit-border-radius:4px;-moz-border-radius:4px;"></i>
          </div>
          <div class="tw-service-content2 ">
            <h3>RETNO ENDAH PUSPITASARI</h3>
            <div class="service-title-sep"></div>
            <p>PENGARUH KINERJA KEUANGAN TERHADAP NILAI PERUSAHAAN DENGAN PENGUNGKAPAN CORPORATE SOCIAL .........</p>
            <a href="#" target="_blank">Unduh Journal</a>
          </div>
        </div>
      </div>

      <div class="tw-element  col-md-3" style="">
        <div class="tw-service-box style-4">
          <div class="tw-service-icon" style="margin-top:-30px;">
            <i class="fa fa-files-o" style="border-style: solid;font-style:normal;text-align:center;font-size:32px;line-height:34px;padding:18px;color:#ffffff;background-color:#065139;border-color:#065139;border-width:2px;border-radius:4px;-webkit-border-radius:4px;-moz-border-radius:4px;"></i>
          </div>
          <div class="tw-service-content2 ">
            <h3>RETNO ENDAH PUSPITASARI</h3>
            <div class="service-title-sep"></div>
            <p>PENGARUH KINERJA KEUANGAN TERHADAP NILAI PERUSAHAAN DENGAN PENGUNGKAPAN CORPORATE SOCIAL .........</p>
            <a href="#" target="_blank">Unduh Journal</a>
          </div>
        </div>
      </div>

      <div class="tw-element  col-md-3" style="">
        <div class="tw-service-box style-4">
          <div class="tw-service-icon" style="margin-top:-30px;">
            <i class="fa fa-files-o" style="border-style: solid;font-style:normal;text-align:center;font-size:32px;line-height:34px;padding:18px;color:#ffffff;background-color:#065139;border-color:#065139;border-width:2px;border-radius:4px;-webkit-border-radius:4px;-moz-border-radius:4px;"></i>
          </div>
          <div class="tw-service-content2 ">
            <h3>RETNO ENDAH PUSPITASARI</h3>
            <div class="service-title-sep"></div>
            <p>PENGARUH KINERJA KEUANGAN TERHADAP NILAI PERUSAHAAN DENGAN PENGUNGKAPAN CORPORATE SOCIAL .........</p>
            <a href="#" target="_blank">Unduh Journal</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>


  <div style="margin-bottom:-40px"></div>

  </div>
</div>
-->
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
