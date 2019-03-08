<?php
$tampilkan=get_post_meta(get_the_ID(),'slider-radio_5',true);
$jenistampilan=get_post_meta(get_the_ID(),'slider-radio_6',true);

if ( $tampilkan == 1 ) { ?>

 	<?php
    $imagebg = rwmb_meta( 'slider-image_advanced_bg', array( 'limit' => 1 , 'size' => 'thumbnail' ) );
    $bgimg = reset( $imagebg );
    ?>

	<?php
	if ( $urlbanner=get_post_meta(get_the_ID(),'slider-linktujuan',true)) { ?>
		<li>
			<a href=""><img width="100%" src="<?php echo $bgimg['full_url']; ?>" alt="<?php the_title(); ?>" /></a>
		</li>
	<?php } else { ?>
		<li>
			<img width="100%" src="<?php echo $bgimg['full_url']; ?>" alt="<?php the_title(); ?>" />
		</li>
	<?php } ?>

<?php } ;?>