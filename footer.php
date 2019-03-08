    <!--footer-->
    <div class="row footer">
        <div class="container">
            <div class="footer-widget green clearfix">
                <div class="col-sm-12 col-md-2">
                    <div class="logo-footer">
                        <img  width="100%" src="<?php echo esc_attr( get_option('map_option_1') ); ?>" alt="logo-footer">
                    </div>
                </div>
                <div class="col-sm-3 col-md-3 footer_widget hide_footer_widget">
                    <h4 class="widget_title">Kontak</h4>
                    <div class="widget-footer footer_widget_content">                       
                        <p style="margin:0px; padding: 0px; white-space: pre-wrap;"><?php echo esc_attr( get_option('map_option_3') ); ?></p>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4 footer_widget hide_footer_widget">
                    <h4 class="widget_title">Alamat</h4>
                    <div class="widget-footer footer_widget_content">
                        <p style="margin:0px; padding: 0px; white-space: pre-wrap;"><?php echo esc_attr( get_option('map_option_2') ); ?></p>                         
                    </div>
                </div>
                <div class="col-sm-3 col-md-3">
                    <h4 class="widget_title hidden-xs">Tetap Terhubung</h4>
                    <div class="widget-footer">                     
                        <ul class="list-inline">
                            <!--<li><a href="http://facebook.com"><i class="fa fa-facebook fa-1x"></i></a></li>-->
                            <?php
                            wp_nav_menu(array( 
                                'theme_location' => 'link-footer-sosmed', 
                                'container_class' => '',
                                'menu'            => '',
                                'container'       => '',
                                'container_id'    => '',
                                'menu_class'      => '',
                                'menu_id'         => '',
                                'echo'            => true,
                                'fallback_cb'     => 'wp_page_menu',
                                'before'          => '',
                                'after'           => '',
                                'link_before'     => '<i class="fa ',
                                'link_after'      => ' fa-1x"></i>',
                                'items_wrap'      => '%3$s',
                                'depth'           => 0,
                                'walker'          => '',
                                )
                            ); 
                            ?>                  
                        </ul>   
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="container">
        <div class="footer-copy darkgreen clearfix">
            <div class="col-md-12">
                <p><?php echo esc_attr( get_option('map_option_4') ); ?></p>
            </div>
        </div>
        </div>
    </div>

 
    

    <script>
      feather.replace()
    </script>


<script>
    $(document).ready(function(){
    //FANCYBOX
    //https://github.com/fancyapps/fancyBox
    $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
    });
});
    
</script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <script>window.jQuery || document.write('<script src="<?php bloginfo('template_directory');?>/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="<?php bloginfo('template_directory');?>/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php bloginfo('template_directory');?>/js/ie10-viewport-bug-workaround.js"></script>

     <!-- FlexSlider -->
    <script defer src="<?php bloginfo('template_directory');?>/js/vendor/flexslider/jquery.flexslider.js"></script>

    <script>
        // Can also be used with $(document).ready()
        $(window).load(function() {
          $('.flexslider').flexslider({
            animation: "slide"
        });
      });
    </script>



    <?php wp_footer(); ?>
</body>
</html>
