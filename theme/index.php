<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no `home.php` file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ple
 */

get_header();
?>

	<section id="primary">
		<main id="main">

		<div class="bg-cream lg:flex lg:items-center">
			<div class="main flex flex-col gap-5 md:gap-0 md:flex-row ~pt-10/105px ~pb-60px/138px">
				<?php $sticky_post__args = array(
					'posts_per_page'      => 1,
					'post__in'            => get_option( 'sticky_posts' ),
					'ignore_sticky_posts' => 1,
				);

				$sticky_post_query = new WP_Query( $sticky_post__args );

				while ( $sticky_post_query->have_posts() ) : $sticky_post_query->the_post(); ?>
					<div class="rounded-2xl bg-white p-10 md:max-w-660px [&_p]:text-body/[75%] [&_p]:text-lg [&_p]:~mb-10/55px [&_p]:md:max-w-[500px]">
						<h1 class="text-body/[90%] ~text-40/7xl ~leading-10/72 ~-tracking-2/5 font-bold mb-6">
							<a class="hover:text-green" href="<?php the_permalink() ?>">                    
								<?php the_title(); ?>
							</a> 	
						</h1>
						<?php the_excerpt(); ?>
						<a class="btn bg-cream/[60%] text-body px-5 font-normal [&_svg_path]:hover:fill-cream" href="<?php the_permalink() ?>">                    
							<?php echo esc_html_e( "Read full post" ); ?>
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M12.7854 5.61523L18.771 12L12.7854 18.3847L11.9646 17.6152L16.7016 12.5625H6V11.4375H16.7016L11.9646 6.38467L12.7854 5.61523Z" fill="#2C1C12"/>
							</svg>
						</a>
					</div>
					<div class="md:-ml-5 md:-translate-y-5 lg:-ml-10 lg:-translate-y-10 [&_img]:w-full [&_img]:h-full [&_img]:object-cover">
						<a href="<?php the_permalink() ?>">    
							<?php the_post_thumbnail( 'full' ); ?>
						</a> 
					</div>
				<?php endwhile;
				wp_reset_postdata(); ?>
			</div>
		</div>

		<div class="bg-[#FFFAF0]">
			<div class="main ~pt-60px/83px ~pb-60px/108px">
				<h2 class="heading text-body/[90%] ~mb-10/68px"><?php echo esc_html_e( "Latest articles" ); ?></h2>
				
				<?php $latest_posts__args = array(
					'posts_per_page' => 9,
					'post__not_in' => get_option( 'sticky_posts' ),
					'ignore_sticky_posts' => 1,
				);

				$latest_posts_query = new WP_Query( $latest_posts__args );

				while ( $latest_posts_query->have_posts() ) : $latest_posts_query->the_post(); ?>
					<div class="grid sm:grid-cols-2 ~gap-8/10 [&:not(:last-child)]:mb-10">
						<div class="[&_img]:max-w-560px [&_img]:w-full [&_img]:cover [&_img]:aspect-video">
							<a href="<?php the_permalink() ?>">                    
								<?php the_post_thumbnail( 'full' ); ?>
							</a> 
						</div>
						<div class="[&_p]:text-body/[60%] [&_p]:text-lg [&_p]:~mb-4/8">
							<h3 class="text-26 text-orange font-bold mb-2 leading-8 -tracking-2">
								<a class="hover:text-brown" href="<?php the_permalink() ?>">                    
									<?php the_title(); ?>
								</a> 
							</h3>
							<?php the_excerpt(); ?>
							<a class="inline-flex justify-center items-center gap-1 hover:text-orange" href="<?php the_permalink() ?>">                    
								<?php echo esc_html_e( "Read full post" ); ?>
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" clip-rule="evenodd" d="M12.7854 5.61523L18.771 12L12.7854 18.3847L11.9646 17.6152L16.7016 12.5625H6V11.4375H16.7016L11.9646 6.38467L12.7854 5.61523Z" fill="#2C1C12"/>
								</svg>
							</a>
						</div>
					</div>
				<?php endwhile;
				wp_reset_postdata(); ?>
			</div>
		</div>

<!-- 		<div class="bg-yellow">
			<div class="main ~py-60px/100px">
				<h2 class="heading text-orange text-center ~mb-10/16"><?php echo esc_html_e( "More articles" ); ?></h2>

				<div class="grid md:grid-cols-2 gap-10">
					<?php $other_post_args = array(
						'posts_per_page' => 4,
						'post__not_in' => get_option( 'sticky_posts' ),
						'ignore_sticky_posts' => 1,
						'offset' => 4
					);

					$other_post_query = new WP_Query( $other_post_args );

					while ( $other_post_query->have_posts() ) : $other_post_query->the_post(); ?>
						<div class="flex ~gap-6/8">
							<div class="shrink-0 [&_img]:rounded-2xl [&_img]:size-[160px] [&_img]:object-cover"> 								
								<a href="<?php the_permalink() ?>">                    
									<?php the_post_thumbnail( 'full' ); ?>
								</a> 
							</div>
							<div class="flex flex-col justify-between gap-5">
								<h3 class="font-lg text-body/[90%] font-bold">		
									<a href="<?php the_permalink() ?>" class="hover:text-orange"><?php the_title(); ?></a>
								</h3>
								<p class="text-body/[60%] text-15"><?php the_time( 'F d, h:i' ); ?> </p>
							</div>
						</div>
					<?php endwhile;
					wp_reset_postdata(); ?>
				</div>
			</div>
		</div> -->

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
