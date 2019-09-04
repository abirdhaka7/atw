<?php get_header(); ?>

	<main role="main">
	<!-- section -->
	<section>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	
			<h2><span><?php the_title(); ?></span></h2>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class('grid2-3'); ?>>

			<!-- post thumbnail -->
			<?php if ( has_post_thumbnail()) : ?>
					<?php the_post_thumbnail(); ?>
			<?php endif; ?>
			
			<?php
                //Dates
                $format = 'd F, Y';
                $date = strtotime(get_field('leaving_date'));
                $leavingDate = date_i18n( $format, $date );
            
                $returningDate = strtotime(get_field('returning_date'));
                $returningDate = date_i18n( $format, $returningDate );
			?>
			<div class="tour-information">
				<p class="date"><strong>Leaving and returning date:</strong>
				<?php echo $leavingDate . ' - '. $returningDate;?>
				</p>
				<p><strong>Location for departure:</strong>
					<?php the_field('location');?>
				</p>
				<p><strong>Available seats:</strong>
					<?php the_field('available_seats');?></p>
				<p class="price"><strong>Price:</strong>
					<?php the_field('price');?></p>
			</div><!---/.tour-information--->

			<div class="itinerary">
				<h3>Travel itinerary</h3>
				<?php the_field('travel_itinerary')?>
			</div>
			 
			
			<?php edit_post_link(); // Always handy to have Edit Post Links available ?>

		</article>
		<!-- /article -->

	<aside class="grid1-3">
		<h3>Gallery</h3>
		<?php the_content();?>
	</aside>

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

	</section>
	<!-- /section -->
	</main>


<?php get_footer(); ?>
