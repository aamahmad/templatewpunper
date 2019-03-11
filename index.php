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

     <!--konten-->
    <div class="row">
      <div class="container">
        <!--produk per kategori-->
        <div class="section notopmargin nobottommargin" style="padding-bottom:40px;">
        		<div class="container clearfix">
        			<div class="col-md-4 nobottommargin">

        				<div class="heading-block">
        					<h3>Info TIF</h3>
        				</div>

        								 	<div class="spost clearfix">
                    <div class="entry-image">
                      <a href=""><img src="https://if.unpas.ac.id/wp-content/uploads/2017/11/Fikri.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" srcset="https://if.unpas.ac.id/wp-content/uploads/2017/11/Fikri.jpg 602w, https://if.unpas.ac.id/wp-content/uploads/2017/11/Fikri-300x200.jpg 300w" sizes="(max-width: 602px) 100vw, 602px"> </a>
                    </div>
        				 		<div class="entry-c">
                      <h5 class="nobottommargin"><a href="https://if.unpas.ac.id/inspiring-story-laporan-ke-format-bukan-alasan-untuk-tidak-lulus-cepat-fikry-andias-praja/">INSPIRING STORY : “Laporan Ke Format Bukan Alasan untuk Tidak Lulus Cepat” – Fikry Andias Praja</a></h5>
          						<span class="small">23 November 2017</span>
        				 		</div>
        				 	</div>
        			 				 	<div class="spost clearfix">
                    <div class="entry-image">
                      <a href=""><img src="https://if.unpas.ac.id/wp-content/uploads/2017/11/Saesar-1.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" srcset="https://if.unpas.ac.id/wp-content/uploads/2017/11/Saesar-1.jpg 602w, https://if.unpas.ac.id/wp-content/uploads/2017/11/Saesar-1-300x200.jpg 300w" sizes="(max-width: 602px) 100vw, 602px"> </a>
                    </div>
        				 		<div class="entry-c">
                      <h5 class="nobottommargin"><a href="https://if.unpas.ac.id/inspiring-story-raih-ipk-sempurna-saesar-yustiawan-kuncinya-jangan-menunda-nunda-pekerjaan/">INSPIRING STORY : Raih IPK Sempurna, Saesar Yustiawan : “Kuncinya jangan menunda-nunda pekerjaan”</a></h5>
          						<span class="small">10 November 2017</span>
        				 		</div>
        				 	</div>
        			 				 	<div class="spost clearfix">
                    <div class="entry-image">
                      <a href=""><img src="https://if.unpas.ac.id/wp-content/uploads/2017/08/Lowongan-Pekerjaan.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" srcset="https://if.unpas.ac.id/wp-content/uploads/2017/08/Lowongan-Pekerjaan.jpg 2539w, https://if.unpas.ac.id/wp-content/uploads/2017/08/Lowongan-Pekerjaan-214x300.jpg 214w, https://if.unpas.ac.id/wp-content/uploads/2017/08/Lowongan-Pekerjaan-768x1079.jpg 768w, https://if.unpas.ac.id/wp-content/uploads/2017/08/Lowongan-Pekerjaan-729x1024.jpg 729w" sizes="(max-width: 2539px) 100vw, 2539px"> </a>
                    </div>
        				 		<div class="entry-c">
                      <h5 class="nobottommargin"><a href="https://if.unpas.ac.id/info-lowongan-pekerjaan/">Info Lowongan Pekerjaan</a></h5>
          						<span class="small">24 August 2017</span>
        				 		</div>
        				 	</div>
        			 				 	<div class="spost clearfix">
                    <div class="entry-image">
                      <a href=""><img src="https://if.unpas.ac.id/wp-content/uploads/2017/07/RPS-1.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" srcset="https://if.unpas.ac.id/wp-content/uploads/2017/07/RPS-1.jpg 602w, https://if.unpas.ac.id/wp-content/uploads/2017/07/RPS-1-300x200.jpg 300w" sizes="(max-width: 602px) 100vw, 602px"> </a>
                    </div>
        				 		<div class="entry-c">
                      <h5 class="nobottommargin"><a href="https://if.unpas.ac.id/1779-2/">Workshop RPS (Rencana Pembelajaran Semester) Prodi Teknik Informatika</a></h5>
          						<span class="small">19 July 2017</span>
        				 		</div>
        				 	</div>
        			 				 	<div class="spost clearfix">
                    <div class="entry-image">
                      <a href=""><img src="https://if.unpas.ac.id/wp-content/uploads/2017/06/Yudisium-5.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" srcset="https://if.unpas.ac.id/wp-content/uploads/2017/06/Yudisium-5.jpg 602w, https://if.unpas.ac.id/wp-content/uploads/2017/06/Yudisium-5-300x200.jpg 300w" sizes="(max-width: 602px) 100vw, 602px"> </a>
                    </div>
        				 		<div class="entry-c">
                      <h5 class="nobottommargin"><a href="https://if.unpas.ac.id/75-lulusan-prodi-teknik-informatika-mengikuti-sidang-terbuka-yudisium-periode-20162017/">75 Lulusan Prodi Teknik Informatika mengikuti Sidang terbuka Yudisium Periode 2016/2017</a></h5>
          						<span class="small">17 June 2017</span>
        				 		</div>
        				 	</div>

        			</div>


        			<div class="col-md-4 nobottommargin">

        				<div class="heading-block">
        					<h3>Agenda</h3>
        				</div>

        								 	<div class="spost clearfix">
                    <div class="entry-image">
                      <a href=""><img src="https://if.unpas.ac.id/wp-content/uploads/2018/04/WhatsApp-Image-2018-03-22-at-3.07.25-PM.jpeg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" srcset="https://if.unpas.ac.id/wp-content/uploads/2018/04/WhatsApp-Image-2018-03-22-at-3.07.25-PM.jpeg 1280w, https://if.unpas.ac.id/wp-content/uploads/2018/04/WhatsApp-Image-2018-03-22-at-3.07.25-PM-150x150.jpeg 150w, https://if.unpas.ac.id/wp-content/uploads/2018/04/WhatsApp-Image-2018-03-22-at-3.07.25-PM-300x300.jpeg 300w, https://if.unpas.ac.id/wp-content/uploads/2018/04/WhatsApp-Image-2018-03-22-at-3.07.25-PM-768x768.jpeg 768w, https://if.unpas.ac.id/wp-content/uploads/2018/04/WhatsApp-Image-2018-03-22-at-3.07.25-PM-1024x1024.jpeg 1024w, https://if.unpas.ac.id/wp-content/uploads/2018/04/WhatsApp-Image-2018-03-22-at-3.07.25-PM-250x250.jpeg 250w, https://if.unpas.ac.id/wp-content/uploads/2018/04/WhatsApp-Image-2018-03-22-at-3.07.25-PM-45x45.jpeg 45w" sizes="(max-width: 1280px) 100vw, 1280px"> </a>
                    </div>
        				 		<div class="entry-c">
                      <h5 class="nobottommargin"><a href="https://if.unpas.ac.id/agenda/it-phoria-start-up-challenge-start-your-future-in-the-era-of-industry-4-0/">IT Phoria Start Up Challenge – Start Your Future In The Era Of Industry 4.0</a></h5>
          						<span class="small">15 March 2018</span>
        				 		</div>
        				 	</div>
        			 				 	<div class="spost clearfix">
                    <div class="entry-image">
                      <a href=""><img src="https://if.unpas.ac.id/wp-content/uploads/2017/08/WhatsApp-Image-2017-08-29-at-19.15.57.jpeg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" srcset="https://if.unpas.ac.id/wp-content/uploads/2017/08/WhatsApp-Image-2017-08-29-at-19.15.57.jpeg 1240w, https://if.unpas.ac.id/wp-content/uploads/2017/08/WhatsApp-Image-2017-08-29-at-19.15.57-150x150.jpeg 150w, https://if.unpas.ac.id/wp-content/uploads/2017/08/WhatsApp-Image-2017-08-29-at-19.15.57-300x300.jpeg 300w, https://if.unpas.ac.id/wp-content/uploads/2017/08/WhatsApp-Image-2017-08-29-at-19.15.57-768x768.jpeg 768w, https://if.unpas.ac.id/wp-content/uploads/2017/08/WhatsApp-Image-2017-08-29-at-19.15.57-1024x1024.jpeg 1024w, https://if.unpas.ac.id/wp-content/uploads/2017/08/WhatsApp-Image-2017-08-29-at-19.15.57-250x250.jpeg 250w, https://if.unpas.ac.id/wp-content/uploads/2017/08/WhatsApp-Image-2017-08-29-at-19.15.57-45x45.jpeg 45w" sizes="(max-width: 1240px) 100vw, 1240px"> </a>
                    </div>
        				 		<div class="entry-c">
                      <h5 class="nobottommargin"><a href="https://if.unpas.ac.id/agenda/born-to-protect-chapter-2-teknik-informatika-unpas-di-tunjuk-jadi-penyelenggara/">Born to Protect Chapter 2, Teknik Informatika UNPAS di Tunjuk Jadi Penyelenggara</a></h5>
          						<span class="small">30 August 2017</span>
        				 		</div>
        				 	</div>
        			 				 	<div class="spost clearfix">
                    <div class="entry-image">
                      <a href=""><img src="https://if.unpas.ac.id/wp-content/uploads/2017/04/WhatsApp-Image-2017-04-05-at-13.36.47.jpeg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" srcset="https://if.unpas.ac.id/wp-content/uploads/2017/04/WhatsApp-Image-2017-04-05-at-13.36.47.jpeg 600w, https://if.unpas.ac.id/wp-content/uploads/2017/04/WhatsApp-Image-2017-04-05-at-13.36.47-225x300.jpeg 225w" sizes="(max-width: 600px) 100vw, 600px"> </a>
                    </div>
        				 		<div class="entry-c">
                      <h5 class="nobottommargin"><a href="https://if.unpas.ac.id/agenda/photography-competition-it-fun-to-be-advanced/">Photography Competition – It fun, to be advanced</a></h5>
          						<span class="small">5 April 2017</span>
        				 		</div>
        				 	</div>
        			 				 	<div class="spost clearfix">
                    <div class="entry-image">
                      <a href=""><img src="https://if.unpas.ac.id/wp-content/uploads/2016/10/calendar-1.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" srcset="https://if.unpas.ac.id/wp-content/uploads/2016/10/calendar-1.jpg 380w, https://if.unpas.ac.id/wp-content/uploads/2016/10/calendar-1-150x150.jpg 150w, https://if.unpas.ac.id/wp-content/uploads/2016/10/calendar-1-300x300.jpg 300w, https://if.unpas.ac.id/wp-content/uploads/2016/10/calendar-1-250x250.jpg 250w" sizes="(max-width: 380px) 100vw, 380px"> </a>
                    </div>
        				 		<div class="entry-c">
                      <h5 class="nobottommargin"><a href="https://if.unpas.ac.id/agenda/it-phoria-start-up-challenge-connect-the-future-with-app/">IT Phoria Start Up Challenge – Connect The Future With App</a></h5>
          						<span class="small">4 October 2016</span>
        				 		</div>
        				 	</div>
        			 				 	<div class="spost clearfix">
                    <div class="entry-image">
                      <a href=""><img src="https://if.unpas.ac.id/wp-content/uploads/2016/10/img6.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" srcset="https://if.unpas.ac.id/wp-content/uploads/2016/10/img6.jpg 640w, https://if.unpas.ac.id/wp-content/uploads/2016/10/img6-300x225.jpg 300w" sizes="(max-width: 640px) 100vw, 640px"> </a>
                    </div>
        				 		<div class="entry-c">
                      <h5 class="nobottommargin"><a href="https://if.unpas.ac.id/agenda/it-phoria-the-spirit-of-young-it-prenuer-to-develop-national-creative-econom/">IT Phoria – The Spirit of Young IT Prenuer to Develop National Creative Econom</a></h5>
          						<span class="small">4 October 2016</span>
        				 		</div>
        				 	</div>

        			</div>

        			<div class="col-md-4 nobottommargin">
                  <div class="heading-block">
                    <h3>Artikel</h3>
                  </div>

                    				 	<div class="spost clearfix">
                      <div class="entry-image">
                        <a href=""><img src="https://if.unpas.ac.id/wp-content/uploads/2018/07/Android-P-orange.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" srcset="https://if.unpas.ac.id/wp-content/uploads/2018/07/Android-P-orange.png 1125w, https://if.unpas.ac.id/wp-content/uploads/2018/07/Android-P-orange-300x197.png 300w, https://if.unpas.ac.id/wp-content/uploads/2018/07/Android-P-orange-768x504.png 768w, https://if.unpas.ac.id/wp-content/uploads/2018/07/Android-P-orange-1024x672.png 1024w" sizes="(max-width: 1125px) 100vw, 1125px"> </a>
                      </div>
          				 		<div class="entry-c">
                        <h5 class="nobottommargin"><a href="https://if.unpas.ac.id/artikel/google-akhirnya-resmi-meriliskan-versi-beta-final-untuk-android-p/">Google akhirnya resmi meriliskan versi beta final untuk Android P</a></h5>
            						<span class="small">28 July 2018</span>
          				 		</div>
          				 	</div>
          			   				 	<div class="spost clearfix">
                      <div class="entry-image">
                        <a href=""><img src="https://if.unpas.ac.id/wp-content/uploads/2018/07/laptops-database_1158117321-e1532152340373.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" srcset="https://if.unpas.ac.id/wp-content/uploads/2018/07/laptops-database_1158117321-e1532152340373.jpg 479w, https://if.unpas.ac.id/wp-content/uploads/2018/07/laptops-database_1158117321-e1532152340373-300x200.jpg 300w" sizes="(max-width: 479px) 100vw, 479px"> </a>
                      </div>
          				 		<div class="entry-c">
                        <h5 class="nobottommargin"><a href="https://if.unpas.ac.id/artikel/bagaimana-cara-menjaga-keamanan-database/">Bagaimana Cara Menjaga Keamanan Database?</a></h5>
            						<span class="small">21 July 2018</span>
          				 		</div>
          				 	</div>
          			   				 	<div class="spost clearfix">
                      <div class="entry-image">
                        <a href=""><img src="https://if.unpas.ac.id/wp-content/uploads/2018/01/Wordpress.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" srcset="https://if.unpas.ac.id/wp-content/uploads/2018/01/Wordpress.jpg 602w, https://if.unpas.ac.id/wp-content/uploads/2018/01/Wordpress-300x200.jpg 300w" sizes="(max-width: 602px) 100vw, 602px"> </a>
                      </div>
          				 		<div class="entry-c">
                        <h5 class="nobottommargin"><a href="https://if.unpas.ac.id/artikel/membuat-website-sederhana-dengan-cms-wordpress/">Membuat Website Sederhana dengan CMS WordPress</a></h5>
            						<span class="small">16 January 2018</span>
          				 		</div>
          				 	</div>
          			   				 	<div class="spost clearfix">
                      <div class="entry-image">
                        <a href=""><img src="https://if.unpas.ac.id/wp-content/uploads/2018/01/Artikel-amel5.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" srcset="https://if.unpas.ac.id/wp-content/uploads/2018/01/Artikel-amel5.jpg 602w, https://if.unpas.ac.id/wp-content/uploads/2018/01/Artikel-amel5-300x200.jpg 300w" sizes="(max-width: 602px) 100vw, 602px"> </a>
                      </div>
          				 		<div class="entry-c">
                        <h5 class="nobottommargin"><a href="https://if.unpas.ac.id/artikel/trend-digital-ulasan-aplikasi-yang-meringankan-aktivitas-harian/">Trend Digital, Ulasan Aplikasi yang meringankan aktivitas harian</a></h5>
            						<span class="small">9 January 2018</span>
          				 		</div>
          				 	</div>
          			   				 	<div class="spost clearfix">
                      <div class="entry-image">
                        <a href=""><img src="https://if.unpas.ac.id/wp-content/uploads/2017/06/Liburan-4.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" srcset="https://if.unpas.ac.id/wp-content/uploads/2017/06/Liburan-4.jpg 602w, https://if.unpas.ac.id/wp-content/uploads/2017/06/Liburan-4-300x200.jpg 300w" sizes="(max-width: 602px) 100vw, 602px"> </a>
                      </div>
          				 		<div class="entry-c">
                        <h5 class="nobottommargin"><a href="https://if.unpas.ac.id/artikel/trend-digital-marketing-di-era-technology/">Trend Digital Marketing di Era Technology</a></h5>
            						<span class="small">6 June 2017</span>
          				 		</div>
          				 	</div>
          			 			</div>
        		</div>
        	</div>

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
                                        </div>
                  </div>

                  <div class="owl-item active" style="width: 131.571px; margin-right: 10px;"><div class="client_image">
                                            <img src="https://demo.accesspressthemes.com/enlighten/wp-content/uploads/2016/05/5.jpg" alt="Client 5">
                                        </div></div><div class="owl-item active" style="width: 131.571px; margin-right: 10px;"><div class="client_image">
                                            <img src="https://demo.accesspressthemes.com/enlighten/wp-content/uploads/2016/05/l3.jpg" alt="Client 4">
                                        </div></div><div class="owl-item active" style="width: 131.571px; margin-right: 10px;"><div class="client_image">
                                            <img src="https://demo.accesspressthemes.com/enlighten/wp-content/uploads/2016/05/2-100x100.jpg" alt="Client 3">
                                        </div></div>

              <div>
            </div>
          </div>
      </div>
    </div>
  </div>
</section>

<?php // include(dirname(__FILE__) . "/content-listartikel.php"); ?>



</div>

<?php get_footer(); ?>
