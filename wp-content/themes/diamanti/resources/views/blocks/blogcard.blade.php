<?php if(have_rows('blog_card')): ?>

 <?php while(have_rows('blog_card')): the_row();?>

   <?php if(get_row_layout()=='coloumns'): ?>

<section class="section newSection">
       <div class="journey_card_section">
            <div class="quoteBlock__container">
                    <div class="journey-card">
                        <h3 class="journey_card_title">Take the next step in your Kubernetes journey</h3>
                        <div class="journey_card_wrap">
                            <div class="journey_card_left">
                                
                            <?php if ( have_rows( 'col5' ) ) : ?>
	                           <?php while ( have_rows( 'col5' ) ) :the_row(); ?>
	                                           <?php
	                             	$link1 = get_sub_field( 'block_link5' );
		                           if ( $link1 ) :
		                        	$link_url1 = $link1['url'];
		                        	$link_title1= $link1['title'];
			                      $link_target1 = $link1['target'] ? $link1['target'] : '_self';	?>
                                <div class="journey_card journey_card_big" onclick="location.href='<?php echo esc_url( $link_url1 ); ?>';" style="cursor: pointer;">
                                    <?php endif; ?>
                                    <?php 
                                    $block_image5 = get_sub_field( 'block_image5' );
	                              	if ( $block_image5 ) : ?>
			                       <img class="card-img " src="<?php echo esc_url( $block_image5['url'] ); ?>" alt="<?php echo esc_attr( $block_image5['alt'] ); ?>" />
		                            <?php endif; ?>
                                    <div class="big_card_content">
                                    <h4 class="blog-title">
                                        <?php if ( $block_text5 = get_sub_field( 'block_text5' ) ) : ?>
			                            <?php echo esc_html( $block_text5 ); ?>
		                                <?php endif; ?>
                                    </h4>
                                    <p class="blog_txt">
                                        <?php if ( $block_desc5 = get_sub_field( 'block_desc5' ) ) : ?>
			                            <?php echo esc_html( $block_desc5 ); ?>
		                                <?php endif; ?>
                                    </p></div>
                                    <img src="/wp-content/uploads/2020/10/link-green.svg">
                                </div> 
                            <?php endwhile; ?>
                            <?php endif; ?>





                               <?php if(have_rows('col4')): ?>
                               <?php while(have_rows('col4')): the_row(); ?>
                               
                                    <?php $link4 = get_sub_field( 'block_link4' );
                                    if ( $link4 ) :
                                 	$link4_url = $link4['url'];
	                                $link4_title = $link4['title'];
	                                $link4_target = $link4['target'] ? $link4['target'] : '_self'; ?>
	                             <!--<a class="button" href="<?php echo esc_url( $link4_url ); ?>" target="<?php echo esc_attr( $lin4k_target ); ?>"><?php echo esc_html( $link4_title ); ?></a>-->
                                <div class="journey_card journey_card_small" onclick="location.href='<?php echo esc_url( $link4_url ); ?>';" style="cursor: pointer;">
                                     <?php endif; ?>
                                    <?php 
                                    $block_image4 = get_sub_field('block_image4'); 
                                    if($block_image4): ?>
                                    <img src="<?php echo esc_url( $block_image4['url'] ); ?>" alt="<?php echo esc_attr( $block_image4['alt'] ); ?>" />
                                    <?php endif; ?>
                                    <div class="small_card_content">
                                        <h4 class="blog-title">
                                        <?php if($block_text4 = get_sub_field('block_text4')): ?>
                                        <?php echo esc_html( $block_text4 ); ?>
                                        <?php endif; ?>
                                        </h4>
                                        <p class="blog_txt">
                                            <?php if($block_desc4=get_sub_field('block_desc4')): ?>
                                            <?php endif; ?>
                                            <?php echo esc_html( $block_desc4 ); ?>
                                        </p>
                                        <img src="/wp-content/uploads/2020/10/link-green.svg">
                                    </div>
                                </div>
                            </div>
                            <?php endwhile; ?>
                            <?php endif; ?>


                         <?php if ( have_rows( 'col2' ) ) : ?>
	                     <?php while ( have_rows( 'col2' ) ) :the_row(); ?>
                            <div class="journey-card-right">
                                <?php $link2 = get_sub_field( 'block_link2' );
                                    if ( $link2 ) :
                                 	$link2_url = $link2['url'];
	                                $link2_title = $link2['title'];
	                                $link2_target = $link2['target'] ? $link2['target'] : '_self'; ?>        
                                <div class="journey_card journey_card_small hidden-xs" onclick="location.href='<?php echo esc_url( $link2_url ); ?>';" style="cursor: pointer;">
                                    <?php endif; ?>
                                    <?php $block_image2 = get_sub_field( 'block_image2' );
		                            if ( $block_image2 ) : ?><img class="card-img " src="<?php echo esc_url( $block_image2['url'] ); ?>" alt="<?php echo esc_attr( $block_image2['alt'] ); ?>" />
		                            <?php endif; ?>
                                    <div class="small_card_content">
                                        <h4 class="blog-title">
                                            <?php if ( $block_text2 = get_sub_field( 'block_text2' ) ) : ?>
			                                <?php echo esc_html( $block_text2 ); ?><?php endif; ?>
                                        <p class="blog_txt">
                                        <?php if ( $block_desc2 = get_sub_field( 'block_desc2' ) ) : ?>
		                               	<?php echo esc_html( $block_desc2 ); ?><?php endif; ?>
                                        </p>
                                        <img src="/wp-content/uploads/2020/10/link-green.svg">
                                    </div>
                                </div>
                         <?php endwhile; ?>
                         <?php endif; ?>
                         
                         
                          <?php if ( have_rows( 'col3' ) ) : ?>
	                      <?php while ( have_rows( 'col3' ) ) :the_row(); ?>
	                          <?php $link3 = get_sub_field( 'block_link3' );
                                    if ( $link3 ) :
                                 	$link3_url = $link3['url'];
	                                $link3_title = $link3['title'];
	                                $link3_target = $link3['target'] ? $link3['target'] : '_self'; ?>         
                               <div class="journey_card journey_card_big Rectangle-Copy-3" onclick="location.href='<?php echo esc_url( $link3_url ); ?>';" style="cursor: pointer;">
                                   <?php endif; ?>
                                   <?php $block_image3 = get_sub_field( 'block_image3' );
		                              if ( $block_image3 ) : ?>
		                         	<img class="card-img " src="<?php echo esc_url( $block_image3['url'] ); ?>" alt="<?php echo esc_attr( $block_image3['alt'] ); ?>" />
		                            <?php endif; ?>
                                    <div class="big_card_content">
                                        <h4 class="blog-title">
                                            <?php if ( $block_text3 = get_sub_field( 'block_text3' ) ) : ?>
			                                <?php echo esc_html( $block_text3 ); ?> <?php endif; ?>
                                        </h4>
                                        <p class="blog_txt">
                                        <?php echo esc_html( $block_desc3 ); ?>
                                        <?php if ( $block_desc3 = get_sub_field( 'block_desc3' ) ) : ?>
			                            <?php echo esc_html( $block_desc3 ); ?>
		                                <?php endif; ?>
                                        </p>
                                        <img src="/wp-content/uploads/2020/10/link-green.svg">
                                    </div>
                                </div>
                                <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </section>

</div></section>
 <?php endif; ?>
 <?php endwhile; ?>
<?php endif; ?>