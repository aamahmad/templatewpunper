<?php
$tampilkan=get_post_meta(get_the_ID(),'gallery-radio_5',true);

if ( $tampilkan == 1 ) { ?>

 	<?php
    $imagebg = rwmb_meta( 'gallery-gallery-cover', array( 'limit' => 1 , 'size' => 'thumbnail' ) );
    $bgimg = reset( $imagebg );
    $jeniskonten=get_post_meta(get_the_ID(),'gallery-radio_1',true);
    ?>

		 <div class="col-md-3">
		 	<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><span class="gallery_icon ">
		 		<?php if ( $jeniskonten == 1 ) { ?>
					<i aria="hidden" class="fa fa-picture-o fa-1x fa-1x"></i>
		 		<?php } elseif ( $jeniskonten == 2 ) { ?>
					<i aria="hidden" class="fa fa-play-circle fa-1x"></i>
				<?php } elseif ( $jeniskonten == 3 ) { ?>
					<i aria="hidden" class="fa fa-play-circle fa-1x"></i>
		 		<?php } ?>
		 		
		 	</span><img width="150" height="150" src="<?php echo $bgimg['url']; ?>" class="attachment-thumbnail size-thumbnail wp-post-image" alt="<?php the_title(); ?>"></a>
		 </div> 


<?php } ;?>