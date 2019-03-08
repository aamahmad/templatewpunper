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
    <div class="row" style="margin-bottom: 40px;">
      <div class="container">
        <div class="col-md-3">
          <div class="tw-service-box style-2 left-service">
            
            <div class="tw-service-icon">
              <i class="fa fa-desktop" style="border-style: solid;font-style:normal;text-align:center;font-size:32px;line-height:34px;padding:18px;color:#ffffff;background-color:#065139;border-color:#065139;border-width:2px;border-radius:4px;-webkit-border-radius:4px;-moz-border-radius:4px;"></i>
            </div>

            <div class="tw-service-content desc_unstyle" style="margin-left:92px;">
              <h3>SiAkad</h3><p>Aplikasi pengelolaan data akademik Universitas Perjuangan.</p>
              <a href="http://appunper.xyz" target="_blank">Kunjungi halaman</a>
            </div>

          </div>
        </div>

        <div class="col-md-3">
          <div class="tw-service-box style-2 left-service">
            
            <div class="tw-service-icon">
              <i class="fa fa-file-pdf-o" style="border-style: solid;font-style:normal;text-align:center;font-size:32px;line-height:34px;padding:18px;color:#ffffff;background-color:#065139;border-color:#065139;border-width:2px;border-radius:4px;-webkit-border-radius:4px;-moz-border-radius:4px;"></i>
            </div>

            <div class="tw-service-content desc_unstyle" style="margin-left:92px;">
              <h3>e - Journal</h3><p>Aplikasi publikasi hasil penelitian Mahasiswa dan Dosen.</p>
              <a href="http://appunper.xyz" target="_blank">Kunjungi halaman</a>
            </div>

          </div>
        </div>

        <div class="col-md-3">
          <div class="tw-service-box style-2 left-service">
            
            <div class="tw-service-icon">
              <i class="fa fa-users" style="border-style: solid;font-style:normal;text-align:center;font-size:32px;line-height:34px;padding:18px;color:#ffffff;background-color:#065139;border-color:#065139;border-width:2px;border-radius:4px;-webkit-border-radius:4px;-moz-border-radius:4px;"></i>
            </div>

            <div class="tw-service-content desc_unstyle" style="margin-left:92px;">
              <h3>Sisfo KKN</h3><p>Aplikasi Sistem Informasi KKn Universitas Perjuangan</p>
              <a href="http://appunper.xyz" target="_blank">Kunjungi halaman</a>
            </div>

          </div>
        </div>

        <div class="col-md-3">
          <div class="tw-service-box style-2 left-service">
            
            <div class="tw-service-icon">
              <i class="fa fa-graduation-cap" style="border-style: solid;font-style:normal;text-align:center;font-size:32px;line-height:34px;padding:18px;color:#ffffff;background-color:#065139;border-color:#065139;border-width:2px;border-radius:4px;-webkit-border-radius:4px;-moz-border-radius:4px;"></i>
            </div>

            <div class="tw-service-content desc_unstyle" style="margin-left:92px;">
              <h3>Alumni Tracer</h3><p>Aplikasi penelusuran alumni Universitas Perjuangan</p>
              <a href="http://appunper.xyz" target="_blank">Kunjungi halaman</a>
            </div>

          </div>
        </div>
      </div>
    </div>

  <hr class="style-two">

     <!--konten-->
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


<section class="home_section" id="section_client" style="margin-bottom: 10px;">
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
        
        <div class="client_cat_loop owl-carousel wow fadeInUp owl-loaded owl-drag" style="visibility: visible; animation-name: fadeInUp;">
            <div class="owl-stage-outer">
              <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 991px;">
                  <div class="owl-item active" style="width: 131.571px; margin-right: 10px;">
                    <div class="client_image">
                      <img src="https://demo.accesspressthemes.com/enlighten/wp-content/uploads/2016/05/1-100x100.jpg" alt="Client 7">
                    </div>
                  </div>

                  <div class="owl-item active" style="width: 131.571px; margin-right: 10px;">
                    <div class="client_image">
                      <img src="https://demo.accesspressthemes.com/enlighten/wp-content/uploads/2016/05/1-100x100.jpg" alt="Client 7">
                    </div>
                  </div>

                  <div class="owl-item active" style="width: 131.571px; margin-right: 10px;">
                    <div class="client_image">
                      <img src="https://demo.accesspressthemes.com/enlighten/wp-content/uploads/2016/05/1-100x100.jpg" alt="Client 7">
                    </div>
                  </div>

                  <div class="owl-item active" style="width: 131.571px; margin-right: 10px;"><div class="client_image">
                                            <img src="https://demo.accesspressthemes.com/enlighten/wp-content/uploads/2016/05/4.jpg" alt="Client 6">
                                        </div></div><div class="owl-item active" style="width: 131.571px; margin-right: 10px;"><div class="client_image">
                                            <img src="https://demo.accesspressthemes.com/enlighten/wp-content/uploads/2016/05/5.jpg" alt="Client 5">
                                        </div></div><div class="owl-item active" style="width: 131.571px; margin-right: 10px;"><div class="client_image">
                                            <img src="https://demo.accesspressthemes.com/enlighten/wp-content/uploads/2016/05/l3.jpg" alt="Client 4">
                                        </div></div><div class="owl-item active" style="width: 131.571px; margin-right: 10px;"><div class="client_image">
                                            <img src="https://demo.accesspressthemes.com/enlighten/wp-content/uploads/2016/05/2-100x100.jpg" alt="Client 3">
                                        </div></div><div class="owl-item active" style="width: 131.571px; margin-right: 10px;"><div class="client_image">
                                            <img src="https://demo.accesspressthemes.com/enlighten/wp-content/uploads/2016/05/7-100x94.jpg" alt="Client 2">
                                        </div></div><div class="owl-item active" style="width: 131.571px; margin-right: 10px;"><div class="client_image">
                                            <img src="https://demo.accesspressthemes.com/enlighten/wp-content/uploads/2016/05/6.jpg" alt="Client 1">
                                        </div></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev disabled"><i class="fa fa-angle-left" aria-hidden="true"></i></button><button type="button" role="presentation" class="owl-next disabled"><i class="fa fa-angle-right" aria-hidden="true"></i></button></div><div class="owl-dots disabled"><button role="button" class="owl-dot active"><span></span></button></div>
          </div>
      </div>
    </div>
  </div>
</section>



</div>

<?php get_footer(); ?>