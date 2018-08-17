<?php
/**
 * Contact section.
 *
 * @package WordPress
 * @subpackage Shop Isle
 */
?>
		<section class="module">
			<div class="container">

				<div class="row">
					<?php
						$shop_isle_contact_page_form_shortcode = get_theme_mod( 'shop_isle_contact_page_form_shortcode' );

						$is_content  = $post->post_content !== '' ? true : false;
						$is_shotcode = ! empty( $shop_isle_contact_page_form_shortcode ) ? true : false;

					if ( $is_shotcode ) {

						echo '<div class="col-xs-12  ' . ( $is_content ? 'col-sm-6' : 'col-sm-12' ) . ' contact-page-form">';

						echo do_shortcode( $shop_isle_contact_page_form_shortcode );

						echo '</div>';

					}

					if ( $is_content ) {

						echo '<div class="col-xs-12 ' . ( $is_shotcode ? 'col-sm-6' : 'col-sm-12' ) . ' contact-page-content">';

						the_content();

						echo '</div>';
					}

					?>

				</div><!-- .row -->

			</div>
		</section>
		<!-- Contact end -->

		<!-- Map start -->
		<?php
			$shop_isle_contact_page_map_shortcode = get_theme_mod( 'shop_isle_contact_page_map_shortcode' );
		if ( ! empty( $shop_isle_contact_page_map_shortcode ) ) :
			echo '<section id="map-section">';
			echo '<div id="map"> <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3705.4874906563614!2d-43.351331285557976!3d-21.76138610347168!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x989c9f939eb7ad%3A0xc8b10f49062555d4!2sR.+Halfeld%2C+807+-+Centro%2C+Juiz+de+Fora+-+MG%2C+36010-003!5e0!3m2!1spt-BR!2sbr!4v1533667708921" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>';
			echo '</section>';
			endif;
		?>
		<!-- Map end -->
