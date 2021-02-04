<?php if($newTabsBlock): ?>
    <?php ($hash = uniqid()); ?>
    <section class="section newSection">
        
        
        
        
<?php if ( have_rows( 'partner_tabs' ) ) : ?>
	<?php while ( have_rows( 'partner_tabs' ) ) :
		the_row(); ?>

		

        <div class="partner_cards_section">
            <div class="partner_cards_container">
                <h3 class="partnering_title">
                <?php if ( $partner_head_text = get_sub_field( 'partner_head_text' ) ) : ?>
	            <?php echo esc_html( $partner_head_text ); ?>
                <?php endif; ?></h3>
            
            <?php if ( have_rows( 'partner_content' ) ) : ?>
			<?php while ( have_rows( 'partner_content' ) ) :
				the_row(); ?>
                
                <div class="partnering_card_wrapper">
                    <div class="partner_card">
                        <div class="partner_card_logo">
                            <!--<img src="/wp-content/uploads/2020/10/logo-rh-openshift.png">-->
                            <?php $partner_logo = get_sub_field( 'partner_logo' );
                            if ( $partner_logo ) : ?>
	                       <img src="<?php echo esc_url( $partner_logo['url'] ); ?>" alt="<?php echo esc_attr( $partner_logo['alt'] ); ?>" />
                          <?php endif; ?>
                        </div>
                        <div class="partner_card_content">
                            <h3 class="partner_card_title">
                                <?php if ( $partner_title = get_sub_field( 'partner_title' ) ) : ?>
			                    <?php echo esc_html( $partner_title ); ?>
		                        <?php endif; ?></h3>
                            <p class="partner_card_text">
                                <?php if ( $partner_desc = get_sub_field( 'partner_desc' ) ) : ?>
		                      	<?php echo esc_html( $partner_desc ); ?>
		                         <?php endif; ?>
                            </p>
                        </div>
                        <?php $part_link = get_sub_field( 'button_url' );
                            if ( $part_link ) :
	                    $part_link_url = $part_link['url'];
                    	$part_link_title = $part_link['title'];
                      	$part_link_target = $part_link['target'] ? $part_link['target'] : '_self';
                       	?>
                        <?php endif; ?>
                        <a href="<?php echo esc_url( $part_link_url ); ?>" class="btn btn-action learnmore_btn"><?php echo esc_html( $part_link_title ); ?></a>
                    </div>
                    <?php endwhile; ?>
		            <?php endif; ?>
                    
                    <?php if ( have_rows( 'partner_content_5' ) ) : ?>
	<?php while ( have_rows( 'partner_content_5' ) ) :
		the_row(); ?>
		
                    <div class="partner_card">
                        <div class="partner_card_logo">
                            <?php
		                     $partner_logo5 = get_sub_field( 'partner_logo5' );
	                       	if ( $partner_logo5 ) : ?>
			                <img src="<?php echo esc_url( $partner_logo5['url'] ); ?>" alt="<?php echo esc_attr( $partner_logo5['alt'] ); ?>" />
		                    <?php endif; ?>
                            <?php
	                    	$partner_logo5b = get_sub_field( 'partner_logo5b' );
	                    	if ( $partner_logo5b ) : ?>
		                	<img src="<?php echo esc_url( $partner_logo5b['url'] ); ?>" alt="<?php echo esc_attr( $partner_logo5b['alt'] ); ?>" />
		                   <?php endif; ?>
                        </div>
                        <div class="partner_card_content">
                            <h3 class="partner_card_title">
                             <?php if ( $partner_title5 = get_sub_field( 'partner_title5' ) ) : ?>
			                 <?php echo esc_html( $partner_title5 ); ?>
		                      <?php endif; ?>
                            </h3>
                            <p class="partner_card_text">
                            <?php if ( $partner_desc5 = get_sub_field( 'partner_desc5' ) ) : ?>
			                <?php echo esc_html( $partner_desc5 ); ?>
		                    <?php endif; ?>    
                            </p>
                        </div>
                        <?php
		$part5_link = get_sub_field( 'button_url5' );
		if ( $part5_link ) :
			$part5_link_url = $part5_link['url'];
			$part5_link_title = $part5_link['title'];
			$part5_link_target = $part5_link['target'] ? $link['target'] : '_self';
			?>
		<?php endif; ?>
                        <a href="<?php echo esc_url( $part5_link_url ); ?>" class="btn btn-action learnmore_btn"><?php echo esc_html( $part5_link_title ); ?></a>
                    </div>
                    
<?php endwhile; ?>
<?php endif; ?>

<?php if ( have_rows( 'partner_content_3' ) ) : ?>
	<?php while ( have_rows( 'partner_content_3' ) ) :
		the_row(); ?>
                    <div class="partner_card">
                        <div class="partner_card_logo">
                            <?php	$partner_logo3 = get_sub_field( 'partner_logo3' );
	                    	if ( $partner_logo3 ) : ?>
		             	<img src="<?php echo esc_url( $partner_logo3['url'] ); ?>" alt="<?php echo esc_attr( $partner_logo3['alt'] ); ?>" />
		                <?php endif; ?>
                        </div>
                        <div class="partner_card_content">
                            <h3 class="partner_card_title">
                                <?php if ( $partner_title3 = get_sub_field( 'partner_title3' ) ) : ?>
			                    <?php echo esc_html( $partner_title3 ); ?>
		                        <?php endif; ?></h3>
                            <p class="partner_card_text">
                                <?php if ( $partner_desc3 = get_sub_field( 'partner_desc3' ) ) : ?>
		                    	<?php echo esc_html( $partner_desc3 ); ?>
	                        	<?php endif; ?>
                            </p>
                        </div>
                          <?php $part3_link = get_sub_field( 'button_url3' );
    if ( $part3_link ) :
	$part3_link_url = $part3_link['url'];
	$part3_link_title = $part3_link['title'];
	$part3_link_target = $part3_link['target'] ? $part3_link['target'] : '_self'; ?>
               <a href="<?php echo esc_url( $part3_link_url ); ?>" class="btn btn-action learnmore_btn"><?php echo esc_html( $part3_link_title ); ?></a>
               <?php endif; ?> 
                    </div>
                 
<?php endwhile; ?>
<?php endif; ?>         


<?php if ( have_rows( 'partner_content_4' ) ) : ?>
	<?php while ( have_rows( 'partner_content_4' ) ) :
		the_row(); ?>
                    <div class="partner_card">
                        <div class="partner_card_logo">
                            <?php
		                    $partner_logo4 = get_sub_field( 'partner_logo4' );
		                    if ( $partner_logo4 ) : ?>
		                	<img src="<?php echo esc_url( $partner_logo4['url'] ); ?>" alt="<?php echo esc_attr( $partner_logo4['alt'] ); ?>" />
	                     	<?php endif; ?>
                            <?php $partner_logo4b = get_sub_field( 'partner_logo4b' );
	                      if ( $partner_logo4b ) : ?>
		                <img src="<?php echo esc_url( $partner_logo4b['url'] ); ?>" alt="<?php echo esc_attr( $partner_logo4b['alt'] ); ?>" />
                        </div>
                        <?php endif; ?>
                        <div class="partner_card_content">
                            <h3 class="partner_card_title">
                            <?php if ( $partner_title4 = get_sub_field( 'partner_title4' ) ) : ?>
			                <?php echo esc_html( $partner_title4 ); ?>
		                    <?php endif; ?></h3>
                            <p class="partner_card_text">
                                <?php if ( $partner_desc4 = get_sub_field( 'partner_desc4' ) ) : ?>
		                     	<?php echo esc_html( $partner_desc4 ); ?>
	                        	<?php endif; ?></p>
                        </div>
                        <?php
	               	$part4_link = get_sub_field( 'button_url4' );
	              	if ( $part4_link ) :
		           	$part4_link_url = $part4_link['url'];
		          	$part4_link_title = $part4_link['title'];
		        	$part4_link_target = $part4_link['target'] ? $part4_link['target'] : '_self';
		         	?>
		         	<!--<a class="button" href="<?php echo esc_url( $part4_link_url ); ?>" target="<?php echo esc_attr( $part4_link_target ); ?>"><?php echo esc_html( $part4_link_title ); ?></a>-->
                    <a href="<?php echo esc_url( $part4_link_url ); ?>" class="btn btn-action learnmore_btn"><?php echo esc_html( $part4_link_title ); ?></a>
                    </div>
                    	<?php endif; ?>
                </div>
            </div>
        </div>
<?php endwhile; ?>
<?php endif; ?>  
        

	<?php endwhile; ?>
<?php endif; ?>

    </section>
<?php else: ?>
    <p class="alert-danger text-center m-5">There are no sections to display</p>
<?php endif; ?>
