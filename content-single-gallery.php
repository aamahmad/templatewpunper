<div class="row">
	<div class="container">
	<div class="col-md-8">
		<div class="news-content">

			<h1 class="title"><a style="font-weight: 600;" href="<?php the_permalink(); ?>" title="Grup riset Intelligent System mengadakan Seminar Deep Learning"><?php the_title(); ?></a></h1>
			<span class="date"><?php the_date('j F Y', '', ''); ?> | oleh : <?php the_author(); ?></span>

			<div class="post"> 
				<?php 
				if ( $keterangan=get_post_meta(get_the_ID(),'gallery-deskripsi',true))
				{
					echo $keterangan;
				}
				?>
			<?php 
			$jeniskonten1=get_post_meta(get_the_ID(),'gallery-radio_1',true);
			?>

			<?php if ( $jeniskonten1 == 1 ) { ?>
				<div class="row">
					<div class='list-group gallery'>
						<?php
						$images = rwmb_meta( 'gallery-gallery', array( 'size' => 'thumbnail' ) );
						foreach ( $images as $image ) { ?>
							<div class='col-md-4'>
								<a class="thumbnail fancybox" rel="ligthbox" href="<?php echo $image['full_url'] ;?>">
									<img width="100%" class="img-responsive" alt="" src="<?php echo $image['url'] ;?>" />
								</a>
							</div>
						<?php } ?>
					</div>
				</div>
			<?php } elseif ( $jeniskonten1 == 2 ) { ?>
				<div style="position: relative;	padding-bottom: 56.25%; /* 16:9 */	margin-top: 30px;	height: 0;">
				<iframe style="position: absolute;	top: 0;	left: 0; width: 100%; height: 100%;;" src="
				<?php 
				if ( $embedvideo=get_post_meta(get_the_ID(),'gallery-embedvideo',true))
				{
					echo str_replace('watch?v=', 'embed/', $embedvideo);
				}
				?>
				" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
				</div>
			<?php } elseif ( $jeniskonten1 == 3 ) { ?>
				<div style="position: relative;	padding-bottom: 56.25%; /* 16:9 */	margin-top: 30px;	height: 0;">
				<iframe style="position: absolute;	top: 0;	left: 0; width: 100%; height: 100%;;" src="
				<?php 
				if ( $embedvideo=get_post_meta(get_the_ID(),'gallery-embedvideo',true))
				{
					echo str_replace('watch?v=', 'embed/', $embedvideo);
				}
				?>
				" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
				</div>

				<div class="row">
					<div class='list-group gallery'>
						<?php
						$images = rwmb_meta( 'gallery-gallery', array( 'size' => 'thumbnail' ) );
						foreach ( $images as $image ) { ?>
							<div class='col-md-4'>
								<a class="thumbnail fancybox" rel="ligthbox" href="<?php echo $image['full_url'] ;?>">
									<img width="100%" class="img-responsive" alt="" src="<?php echo $image['url'] ;?>" />
								</a>
							</div>
						<?php } ?>
					</div>
				</div>
			<?php } ?>
				

			
			</div> 		

		</div>
    </div>
    <div class="col-md-4">
    	<div class="sidebar">
                	<section class="widget_recent_entries widgets">
					<h3 class="widget_title">Galeri terbaru</h3>
				<nav>
			<ul>
				<?php
				
				$args = array( 'numberposts' => '10', 'post_type' => 'gallery', );
				$recent_posts = wp_get_recent_posts( $args );
					foreach( $recent_posts as $recent ){ 
					$jeniskonten=get_post_meta( $recent["ID"] ,'gallery-radio_1',true);
					$imagebg = rwmb_meta('gallery-gallery-cover', array('limit' => 1 , 'size' => 'thumbnail' ), $recent["ID"] );
    				$bgimg = reset( $imagebg );
						?>


					<li class="row no-gutter">
						<span class="reading"></span>
						<a href="<?php echo get_permalink($recent["ID"]); ?>">
							<div class="col-md-4">
								<span class="gallery_icon ">
									<?php if ( $jeniskonten == 1 ) { ?>
										<i aria="hidden" class="fa fa-picture-o fa-1x fa-1x"></i>
									<?php } elseif ( $jeniskonten == 2 ) { ?>
										<i aria="hidden" class="fa fa-play-circle fa-1x"></i>
									<?php } elseif ( $jeniskonten == 3 ) { ?>
										<i aria="hidden" class="fa fa-play-circle fa-1x"></i>
									<?php } ?>
								</span>
								<img width="100%" src="<?php echo $bgimg['url']; ?>" alt="Malam Puncak Milad IMM">
							</div>
								<div class="col-md-8"><div style="font-weight: 600;"><?php echo $recent["post_title"];?></div>
								<span class="post-date">
									<?php echo date('j F Y', strtotime($recent['post_date'])); ?>
								</span>
								</div>
							</a>
					</li>

				<?php }
				wp_reset_query();
				?>
				
			</ul>	
		</nav>
	</section>
                				
						
			</div>
    </div>
	</div>
</div>