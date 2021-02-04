<section style="background:white;padding:unset">
    <div class="col-lg-12 col-md-12 col-sm-12 col-12 imgCoustome"   >
     <div class="row" style="text-align: center;">
	<?php if ( have_rows( 'logo_slideer' ) ) : ?>
	<?php while ( have_rows( 'logo_slideer' ) ) :
		the_row(); ?>
		
		<?php
		$img1 = get_sub_field( 'img1' );
		if ( $img1 ) : ?>
			 <div class="col-lg-2 col-md-2 col-sm-6 col-6 logosc"><img class="img-fluid maxH" src="<?php echo esc_url( $img1['url'] ); ?>" alt="<?php echo esc_attr( $img1['alt'] ); ?>" /></div>
		<?php endif; ?>

		<?php
		$img2 = get_sub_field( 'img2' );
		if ( $img2 ) : ?>
			<div class="col-lg-2 col-md-2 col-sm-6 col-6 logosc"><img class="img-fluid maxH" src="<?php echo esc_url( $img2['url'] ); ?>" alt="<?php echo esc_attr( $img2['alt'] ); ?>" /></div>
		<?php endif; ?>

		<?php
		$img3 = get_sub_field( 'img3' );
		if ( $img3 ) : ?>
			<div class="col-lg-2 col-md-2 col-sm-6 col-6 logosc"><img class="img-fluid maxH" src="<?php echo esc_url( $img3['url'] ); ?>" alt="<?php echo esc_attr( $img3['alt'] ); ?>" /></div>
		<?php endif; ?>

		<?php
		$img4 = get_sub_field( 'img4' );
		if ( $img4 ) : ?>
			<div class="col-lg-2 col-md-2 col-sm-6 col-6 logosc"><img class="img-fluid maxH" src="<?php echo esc_url( $img4['url'] ); ?>" alt="<?php echo esc_attr( $img4['alt'] ); ?>" /></div>
		<?php endif; ?>

		<?php
		$img5 = get_sub_field( 'img5' );
		if ( $img5 ) : ?>
			<div class="col-lg-2 col-md-2 col-sm-6 col-6 logosc"><img class="img-fluid maxH" src="<?php echo esc_url( $img5['url'] ); ?>" alt="<?php echo esc_attr( $img5['alt'] ); ?>" /></div>
		<?php endif; ?>

		<?php
		$img6 = get_sub_field( 'img6' );
		if ( $img6 ) : ?>
			<div class="col-lg-2 col-md-2 col-sm-6 col-6 logosc"><img class="img-fluid maxH" src="<?php echo esc_url( $img6['url'] ); ?>" alt="<?php echo esc_attr( $img6['alt'] ); ?>" /></div>
		<?php endif; ?>

	<?php endwhile; ?>
<?php endif; ?>
     
</div> 

    <style type="text/css">
        @media (max-width: 767px) {
            .maxH {
                max-height: 40px;
                min-height: 39px;
                max-width: 100px !important;
            }

        }


        .maxH {
            max-width: 150px !important;
            max-height: 60px;
            min-height: 48px;
        }
        .imgCoustome{
            text-align: center;
            width: auto;
            -webkit-box-pack: center;
            justify-content: center;
            padding: 30px 20px;
            overflow-x: auto;
            /*background: rgb(213, 230, 245);*/
            background: #ffffff;
            /*padding: unset;*/
        }
        .page-id-701 .partner_cards_section{
            padding: 80px 0 120px !important;
        }

        @media (max-width: 980px){
        .imgCoustome .logosc{
            padding:15px;
        }}
        .sliderdesk2 .n2-ss-slider-2.n2-ow {
            background-repeat: no-repeat !important;
        }

    </style>

    </section>