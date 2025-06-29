<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ple
 */

get_header();
?>

	<section class="bg-[#FFFAF0] overflow-x-hidden" id="primary">
		<main id="main">

			<?php while ( have_posts() ): the_post();
				get_template_part( 'template-parts/content/content', 'single' );
			endwhile;
			?>

			<div class="bg-yellow">
				<div class="main ~py-60px/100px">
					<h2 class="heading text-orange text-center ~mb-10/16"><?php echo esc_html_e( "More articles" ); ?></h2>

					<div class="grid md:grid-cols-2 gap-10">
						<?php $other_post_args = array(
							'posts_per_page' => 9,
							'post__not_in' => array( get_the_ID() ),
						);

						$other_post_query = new WP_Query( $other_post_args );

						while ( $other_post_query->have_posts() ) : $other_post_query->the_post(); ?>
							<div class="flex ~gap-6/8">
								<div class="shrink-0 [&_img]:size-[160px] [&_img]:object-cover"> 								
									<a href="<?php the_permalink() ?>">                    
										<?php the_post_thumbnail( 'full' ); ?>
									</a> 
								</div>
								<div class="flex flex-col justify-between gap-5">
									<h3 class="~text-base/19 text-body/[90%] font-bold">		
										<a href="<?php the_permalink() ?>" class="hover:text-orange"><?php the_title(); ?></a>
									</h3>
									<p class="text-body/[60%] text-15"><?php the_time( 'F d, h:i' ); ?> </p>
								</div>
							</div>
						<?php endwhile;
						wp_reset_postdata(); ?>
					</div>
				</div>
			</div>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
