<?php
/**
 * Template Name: Topic
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ple
 */

get_header();

$current_page_id = get_the_ID();
$topic           = get_field('topic', $current_page_id);
$topic_value     = $topic['value'];
$topic_label     = $topic['label'];
?>

<section id="primary" class="bg-[#FFFAF0] ~pb-60px/120px">
	<div class="[&_img]:w-full [&_img]:max-h-[315px] [&_img]:object-cover">
		<?php ple_post_thumbnail(); ?>
	</div>

 	<h1 class="main max-w-[1100px] heading-big text-orange/[95%] ~pt-10/20 ~mb-10/16"><?php echo esc_html( $topic_label ); ?></h1>

	<div class="main max-w-[1100px] flex flex-col justify-between gap-10 md:flex-row">
		<aside class="shrink-0 border-r-0 border-solid border-body/[7%] md:sticky md:top-0 md:border-r md:max-w-[300px] md:pr-10">
			<?php if ( $topic_value == "Abortion" ): ?>
				<?php $args = array(
						'posts_per_page' => -1,
						'post_type'      => 'page',
						'order'          => 'ASC',
						'orderby'        => 'date',
						'meta_key'       => 'topic',
						'meta_value'     => 'Abortion'
				);

				$the_query = new WP_Query( $args ); ?>

				<?php if ( $the_query->have_posts() ): ?>
					<ul class="grid gap-18px ~mb-10/12">
						<?php while ( $the_query->have_posts() ) : $the_query->the_post(); 
						$id = get_the_ID();
						?>
							<li>
								<a class="text-15 text-body/[50%] inline-flex items-center gap-3 leading-18 font-medium hover:text-orange [&:hover_svg_circle]:fill-orange <?php if ( $current_page_id == $id ) echo 'text-orange [&_svg_circle]:fill-orange' ?>" href="<?php the_permalink(); ?>">
									<svg class="shrink-0" width="9" height="9" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
										<circle cx="4.77246" cy="4.31543" r="4" fill="#BEB7AE" />
									</svg>
									<?php the_title(); ?>
								</a
							</li>
						<?php endwhile; ?>
					</ul>
				<?php endif; ?>

				<?php wp_reset_query(); ?>

				<div class="">
					<p class="text-sm text-body/[90%] font-bold mb-4"><?php echo esc_html_e( 'OTHER TOPICS' ); ?></p>
					<div class="grid gap-18px [&_a]:text-body/[50%] [&_a]:text-15 [&_a]:w-fit [&_a:hover]:text-orange">
						<?php $query_adoption = new WP_Query([
							'posts_per_page' => 1,
							'post_type'      => 'page',
							'order'          => 'ASC',
							'meta_key'       => 'topic',
							'meta_value'     => 'Adoption'
						]);
						?>
						<?php if ( $query_adoption->have_posts() ): while ( $query_adoption->have_posts() ) : $query_adoption->the_post(); ?>
							<a href="<?php the_permalink(); ?>"><?php echo esc_html_e( 'Adoption' ); ?></a>
						<?php endwhile; endif; ?>
						<?php wp_reset_query(); ?>

						<?php $query_ivf = new WP_Query([
							'posts_per_page' => 1,
							'post_type'      => 'page',
							'order'          => 'ASC',
							'meta_key'       => 'topic',
							'meta_value'     => 'IVF treatment'
						]);
						?>
						<?php if ( $query_ivf->have_posts() ): while ( $query_ivf->have_posts() ) : $query_ivf->the_post(); ?>
							<a href="<?php the_permalink(); ?>"><?php echo esc_html_e( 'IVF treatment' ); ?></a>
						<?php endwhile; endif; ?>
						<?php wp_reset_query(); ?>

						<?php $query_suicide = new WP_Query([
							'posts_per_page' => 1,
							'post_type'      => 'page',
							'order'          => 'ASC',
							'meta_key'       => 'topic',
							'meta_value'     => 'Suicide'
						]);
						?>
						<?php if ( $query_suicide->have_posts() ): while ( $query_suicide->have_posts() ) : $query_suicide->the_post(); ?>
							<a href="<?php the_permalink(); ?>"><?php echo esc_html_e( 'Suicide' ); ?></a>
						<?php endwhile; endif; ?>
						<?php wp_reset_query(); ?>

						<?php $query_euthanasia = new WP_Query([
							'posts_per_page' => 1,
							'post_type'      => 'page',
							'order'          => 'ASC',
							'meta_key'       => 'topic',
							'meta_value'     => 'Euthanasia'
						]);
						?>
						<?php if ( $query_euthanasia->have_posts() ): while ( $query_euthanasia->have_posts() ) : $query_euthanasia->the_post(); ?>
							<a href="<?php the_permalink(); ?>"><?php echo esc_html_e( 'Euthanasia' ); ?></a>
						<?php endwhile; endif; ?>
						<?php wp_reset_query(); ?>
					</div>
				</div>

			<?php elseif ( $topic_value == "Adoption" ): ?>
				<?php $args = array(
						'posts_per_page' => -1,
						'post_type'      => 'page',
						'order'          => 'ASC',
						'orderby'        => 'date',
						'meta_key'       => 'topic',
						'meta_value'     => 'Adoption'
				);

				$the_query = new WP_Query( $args ); ?>

				<?php if ( $the_query->have_posts() ): ?>
					<ul class="grid gap-18px ~mb-10/12">
						<?php while ( $the_query->have_posts() ) : $the_query->the_post(); 
						$id = get_the_ID();
						?>
							<li>
								<a class="text-15 text-body/[50%] inline-flex items-center gap-3 leading-18 font-medium hover:text-orange [&:hover_svg_circle]:fill-orange <?php if ( $current_page_id == $id ) echo 'text-orange [&_svg_circle]:fill-orange' ?>" href="<?php the_permalink(); ?>">
									<svg class="shrink-0" width="9" height="9" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
										<circle cx="4.77246" cy="4.31543" r="4" fill="#BEB7AE" />
									</svg>
									<?php the_title(); ?>
								</a
							</li>
						<?php endwhile; ?>
					</ul>
				<?php endif; ?>

				<?php wp_reset_query(); ?>

				<div class="">
					<p class="text-sm text-body/[90%] font-bold mb-4"><?php echo esc_html_e( 'OTHER TOPICS' ); ?></p>
					<div class="grid gap-18px [&_a]:text-body/[50%] [&_a]:text-15 [&_a]:w-fit [&_a:hover]:text-orange">
						<?php $query_abortion = new WP_Query([
							'posts_per_page' => 1,
							'post_type'      => 'page',
							'order'          => 'ASC',
							'meta_key'       => 'topic',
							'meta_value'     => 'Abortion'
						]);
						?>
						<?php if ( $query_abortion->have_posts() ): while ( $query_abortion->have_posts() ) : $query_abortion->the_post(); ?>
							<a href="<?php the_permalink(); ?>"><?php echo esc_html_e( 'Abortion' ); ?></a>
						<?php endwhile; endif; ?>
						<?php wp_reset_query(); ?>

						<?php $query_ivf = new WP_Query([
							'posts_per_page' => 1,
							'post_type'      => 'page',
							'order'          => 'ASC',
							'meta_key'       => 'topic',
							'meta_value'     => 'IVF treatment'
						]);
						?>
						<?php if ( $query_ivf->have_posts() ): while ( $query_ivf->have_posts() ) : $query_ivf->the_post(); ?>
							<a href="<?php the_permalink(); ?>"><?php echo esc_html_e( 'IVF treatment' ); ?></a>
						<?php endwhile; endif; ?>
						<?php wp_reset_query(); ?>

						<?php $query_suicide = new WP_Query([
							'posts_per_page' => 1,
							'post_type'      => 'page',
							'order'          => 'ASC',
							'meta_key'       => 'topic',
							'meta_value'     => 'Suicide'
						]);
						?>
						<?php if ( $query_suicide->have_posts() ): while ( $query_suicide->have_posts() ) : $query_suicide->the_post(); ?>
							<a href="<?php the_permalink(); ?>"><?php echo esc_html_e( 'Suicide' ); ?></a>
						<?php endwhile; endif; ?>
						<?php wp_reset_query(); ?>

						<?php $query_euthanasia = new WP_Query([
							'posts_per_page' => 1,
							'post_type'      => 'page',
							'order'          => 'ASC',
							'meta_key'       => 'topic',
							'meta_value'     => 'Euthanasia'
						]);
						?>
						<?php if ( $query_euthanasia->have_posts() ): while ( $query_euthanasia->have_posts() ) : $query_euthanasia->the_post(); ?>
							<a href="<?php the_permalink(); ?>"><?php echo esc_html_e( 'Euthanasia' ); ?></a>
						<?php endwhile; endif; ?>
						<?php wp_reset_query(); ?>
					</div>
				</div>

			<?php elseif ( $topic_value == "IVF treatment" ): ?>
				<?php $args = array(
						'posts_per_page' => -1,
						'post_type'      => 'page',
						'order'          => 'ASC',
						'orderby'        => 'date',
						'meta_key'       => 'topic',
						'meta_value'     => 'IVF treatment'
				);

				$the_query = new WP_Query( $args ); ?>

				<?php if ( $the_query->have_posts() ): ?>
					<ul class="grid gap-18px ~mb-10/12">
						<?php while ( $the_query->have_posts() ) : $the_query->the_post(); 
						$id = get_the_ID();
						?>
							<li>
								<a class="text-15 text-body/[50%] inline-flex items-center gap-3 leading-18 font-medium hover:text-orange [&:hover_svg_circle]:fill-orange <?php if ( $current_page_id == $id ) echo 'text-orange [&_svg_circle]:fill-orange' ?>" href="<?php the_permalink(); ?>">
									<svg class="shrink-0" width="9" height="9" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
										<circle cx="4.77246" cy="4.31543" r="4" fill="#BEB7AE" />
									</svg>
									<?php the_title(); ?>
								</a
							</li>
						<?php endwhile; ?>
					</ul>
				<?php endif; ?>

				<?php wp_reset_query(); ?>

				<div class="">
					<p class="text-sm text-body/[90%] font-bold mb-4"><?php echo esc_html_e( 'OTHER TOPICS' ); ?></p>
					<div class="grid gap-18px [&_a]:text-body/[50%] [&_a]:text-15 [&_a]:w-fit [&_a:hover]:text-orange">
						<?php $query_abortion = new WP_Query([
							'posts_per_page' => 1,
							'post_type'      => 'page',
							'order'          => 'ASC',
							'meta_key'       => 'topic',
							'meta_value'     => 'Abortion'
						]);
						?>
						<?php if ( $query_abortion->have_posts() ): while ( $query_abortion->have_posts() ) : $query_abortion->the_post(); ?>
							<a href="<?php the_permalink(); ?>"><?php echo esc_html_e( 'Abortion' ); ?></a>
						<?php endwhile; endif; ?>
						<?php wp_reset_query(); ?>

						<?php $query_adoption = new WP_Query([
							'posts_per_page' => 1,
							'post_type'      => 'page',
							'order'          => 'ASC',
							'meta_key'       => 'topic',
							'meta_value'     => 'Adoption'
						]);
						?>
						<?php if ( $query_adoption->have_posts() ): while ( $query_adoption->have_posts() ) : $query_adoption->the_post(); ?>
							<a href="<?php the_permalink(); ?>"><?php echo esc_html_e( 'Adoption' ); ?></a>
						<?php endwhile; endif; ?>
						<?php wp_reset_query(); ?>

						<?php $query_suicide = new WP_Query([
							'posts_per_page' => 1,
							'post_type'      => 'page',
							'order'          => 'ASC',
							'meta_key'       => 'topic',
							'meta_value'     => 'Suicide'
						]);
						?>
						<?php if ( $query_suicide->have_posts() ): while ( $query_suicide->have_posts() ) : $query_suicide->the_post(); ?>
							<a href="<?php the_permalink(); ?>"><?php echo esc_html_e( 'Suicide' ); ?></a>
						<?php endwhile; endif; ?>
						<?php wp_reset_query(); ?>

						<?php $query_euthanasia = new WP_Query([
							'posts_per_page' => 1,
							'post_type'      => 'page',
							'order'          => 'ASC',
							'meta_key'       => 'topic',
							'meta_value'     => 'Euthanasia'
						]);
						?>
						<?php if ( $query_euthanasia->have_posts() ): while ( $query_euthanasia->have_posts() ) : $query_euthanasia->the_post(); ?>
							<a href="<?php the_permalink(); ?>"><?php echo esc_html_e( 'Euthanasia' ); ?></a>
						<?php endwhile; endif; ?>
						<?php wp_reset_query(); ?>
					</div>
				</div>

			<?php elseif ( $topic_value == "Suicide" ): ?>
				<?php $args = array(
						'posts_per_page' => -1,
						'post_type'      => 'page',
						'order'          => 'ASC',
						'orderby'        => 'date',
						'meta_key'       => 'topic',
						'meta_value'     => 'Suicide'
				);

				$the_query = new WP_Query( $args ); ?>

				<?php if ( $the_query->have_posts() ): ?>
					<ul class="grid gap-18px ~mb-10/12">
						<?php while ( $the_query->have_posts() ) : $the_query->the_post(); 
						$id = get_the_ID();
						?>
							<li>
								<a class="text-15 text-body/[50%] inline-flex items-center gap-3 leading-18 font-medium hover:text-orange [&:hover_svg_circle]:fill-orange <?php if ( $current_page_id == $id ) echo 'text-orange [&_svg_circle]:fill-orange' ?>" href="<?php the_permalink(); ?>">
									<svg class="shrink-0" width="9" height="9" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
										<circle cx="4.77246" cy="4.31543" r="4" fill="#BEB7AE" />
									</svg>
									<?php the_title(); ?>
								</a
							</li>
						<?php endwhile; ?>
					</ul>
				<?php endif; ?>

				<?php wp_reset_query(); ?>

				<div class="">
					<p class="text-sm text-body/[90%] font-bold mb-4"><?php echo esc_html_e( 'OTHER TOPICS' ); ?></p>
					<div class="grid gap-18px [&_a]:text-body/[50%] [&_a]:text-15 [&_a]:w-fit [&_a:hover]:text-orange">
						<?php $query_abortion = new WP_Query([
							'posts_per_page' => 1,
							'post_type'      => 'page',
							'order'          => 'ASC',
							'meta_key'       => 'topic',
							'meta_value'     => 'Abortion'
						]);
						?>
						<?php if ( $query_abortion->have_posts() ): while ( $query_abortion->have_posts() ) : $query_abortion->the_post(); ?>
							<a href="<?php the_permalink(); ?>"><?php echo esc_html_e( 'Abortion' ); ?></a>
						<?php endwhile; endif; ?>
						<?php wp_reset_query(); ?>

						<?php $query_adoption = new WP_Query([
							'posts_per_page' => 1,
							'post_type'      => 'page',
							'order'          => 'ASC',
							'meta_key'       => 'topic',
							'meta_value'     => 'Adoption'
						]);
						?>
						<?php if ( $query_adoption->have_posts() ): while ( $query_adoption->have_posts() ) : $query_adoption->the_post(); ?>
							<a href="<?php the_permalink(); ?>"><?php echo esc_html_e( 'Adoption' ); ?></a>
						<?php endwhile; endif; ?>
						<?php wp_reset_query(); ?>

						<?php $query_ivf = new WP_Query([
							'posts_per_page' => 1,
							'post_type'      => 'page',
							'order'          => 'ASC',
							'meta_key'       => 'topic',
							'meta_value'     => 'IVF treatment'
						]);
						?>
						<?php if ( $query_ivf->have_posts() ): while ( $query_ivf->have_posts() ) : $query_ivf->the_post(); ?>
							<a href="<?php the_permalink(); ?>"><?php echo esc_html_e( 'IVF treatment' ); ?></a>
						<?php endwhile; endif; ?>
						<?php wp_reset_query(); ?>

						<?php $query_euthanasia = new WP_Query([
							'posts_per_page' => 1,
							'post_type'      => 'page',
							'order'          => 'ASC',
							'meta_key'       => 'topic',
							'meta_value'     => 'Euthanasia'
						]);
						?>
						<?php if ( $query_euthanasia->have_posts() ): while ( $query_euthanasia->have_posts() ) : $query_euthanasia->the_post(); ?>
							<a href="<?php the_permalink(); ?>"><?php echo esc_html_e( 'Euthanasia' ); ?></a>
						<?php endwhile; endif; ?>
						<?php wp_reset_query(); ?>
					</div>
				</div>

			<?php elseif ( $topic_value == "Euthanasia" ): ?>
				<?php $args = array(
						'posts_per_page' => -1,
						'post_type'      => 'page',
						'order'          => 'ASC',
						'orderby'        => 'date',
						'meta_key'       => 'topic',
						'meta_value'     => 'Euthanasia'
				);

				$the_query = new WP_Query( $args ); ?>

				<?php if ( $the_query->have_posts() ): ?>
					<ul class="grid gap-18px ~mb-10/12">
						<?php while ( $the_query->have_posts() ) : $the_query->the_post(); 
						$id = get_the_ID();
						?>
							<li>
								<a class="text-15 text-body/[50%] inline-flex items-center gap-3 leading-18 font-medium hover:text-orange [&:hover_svg_circle]:fill-orange <?php if ( $current_page_id == $id ) echo 'text-orange [&_svg_circle]:fill-orange' ?>" href="<?php the_permalink(); ?>">
									<svg class="shrink-0" width="9" height="9" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
										<circle cx="4.77246" cy="4.31543" r="4" fill="#BEB7AE" />
									</svg>
									<?php the_title(); ?>
								</a
							</li>
						<?php endwhile; ?>
					</ul>
				<?php endif; ?>

				<?php wp_reset_query(); ?>

				<div class="">
					<p class="text-sm text-body/[90%] font-bold mb-4"><?php echo esc_html_e( 'OTHER TOPICS' ); ?></p>
					<div class="grid gap-18px [&_a]:text-body/[50%] [&_a]:text-15 [&_a]:w-fit [&_a:hover]:text-orange">
						<?php $query_abortion = new WP_Query([
							'posts_per_page' => 1,
							'post_type'      => 'page',
							'order'          => 'ASC',
							'meta_key'       => 'topic',
							'meta_value'     => 'Abortion'
						]);
						?>
						<?php if ( $query_abortion->have_posts() ): while ( $query_abortion->have_posts() ) : $query_abortion->the_post(); ?>
							<a href="<?php the_permalink(); ?>"><?php echo esc_html_e( 'Abortion' ); ?></a>
						<?php endwhile; endif; ?>
						<?php wp_reset_query(); ?>

						<?php $query_adoption = new WP_Query([
							'posts_per_page' => 1,
							'post_type'      => 'page',
							'order'          => 'ASC',
							'meta_key'       => 'topic',
							'meta_value'     => 'Adoption'
						]);
						?>
						<?php if ( $query_adoption->have_posts() ): while ( $query_adoption->have_posts() ) : $query_adoption->the_post(); ?>
							<a href="<?php the_permalink(); ?>"><?php echo esc_html_e( 'Adoption' ); ?></a>
						<?php endwhile; endif; ?>
						<?php wp_reset_query(); ?>

						<?php $query_ivf = new WP_Query([
							'posts_per_page' => 1,
							'post_type'      => 'page',
							'order'          => 'ASC',
							'meta_key'       => 'topic',
							'meta_value'     => 'IVF treatment'
						]);
						?>
						<?php if ( $query_ivf->have_posts() ): while ( $query_ivf->have_posts() ) : $query_ivf->the_post(); ?>
							<a href="<?php the_permalink(); ?>"><?php echo esc_html_e( 'IVF treatment' ); ?></a>
						<?php endwhile; endif; ?>
						<?php wp_reset_query(); ?>

						<?php $query_suicide = new WP_Query([
							'posts_per_page' => 1,
							'post_type'      => 'page',
							'order'          => 'ASC',
							'meta_key'       => 'topic',
							'meta_value'     => 'Suicide'
						]);
						?>
						<?php if ( $query_suicide->have_posts() ): while ( $query_suicide->have_posts() ) : $query_suicide->the_post(); ?>
							<a href="<?php the_permalink(); ?>"><?php echo esc_html_e( 'Suicide' ); ?></a>
						<?php endwhile; endif; ?>
						<?php wp_reset_query(); ?>
					</div>
				</div>
			<?php else : ?>
				<?php return; ?>
			<?php endif; ?>
		</aside>
		<main id="main" class="md:max-w-660px">
			<?php while ( have_posts() ) : the_post();  ?>
				<h2 class="heading text-green/[60%] ~mb-10/11""><?php the_title(); ?></h2>
				<article <?php ple_content_class( 'entry-content text-body/[90%] [&_img]:w-full [&_:is(strong,em)]:text-inherit [&_:is(h2,h3,h4,h5,h6)]:text-orange [&_:is(h2,h3,h4,h5,h6)]:font-bold [&_a]:text-orange marker:text-orange' ); ?>>
					<?php the_content(); ?>
				</article>
			<?php endwhile; ?>
			<div class="flex justify-between gap-2.5 ~mt-60px/108px">
				<?php 
				$topics = array("Abortion", "Adoption", "IVF treatment", "Suicide", "Euthanasia");

				if (in_array($topic_value, $topics)) {
					$args = array(
						'post_type'      => 'page',
						'posts_per_page' => -1, 
						'order'          => 'ASC', 
						'meta_query'     => array(
							array(
								'key'     => 'topic',    
								'value'   => $topic_value, 
								'compare' => '=',      
							),
						),
					);
				}

				$query = new WP_Query( $args );

				if ( $query->have_posts() ) {
					$posts = $query->posts; 
					$previous_post = null;
					$next_post = null;
					
					foreach ( $posts as $index => $post ) :
						if ( $post->ID == $current_page_id ) :
							if ( isset( $posts[ $index - 1 ] ) ) {
								$previous_post = $posts[ $index - 1 ];
							}
							if ( isset( $posts[ $index + 1 ] ) ) {
								$next_post = $posts[ $index + 1 ];
							}
							break;
						endif;
					endforeach;
					
					if ( $previous_post ) :
						$previous_post_url = get_permalink( $previous_post->ID );
						echo '<a class="btn btn-yellow max-w-[160px] w-full gap-1.5" href="' . esc_url( $previous_post_url ) . '">
							<svg class="rotate-180 shrink-0" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M6.15447 0.679443L11.1425 6.00004L6.15447 11.3206L5.47053 10.6794L9.41802 6.46879H0.5V5.53129H9.41802L5.47053 1.32064L6.15447 0.679443Z" fill="#2C1C12" stroke="#2C1C12" stroke-width="0.4"/>
							</svg> ' . esc_html__( 'Previous', 'ple' ) . '</a>';
					else :    
						echo '<button class="btn btn-yellow max-w-[160px] w-full gap-1.5 cursor-not-allowed opacity-50 invisible" disabled>
							<svg class="rotate-180 shrink-0" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M6.15447 0.679443L11.1425 6.00004L6.15447 11.3206L5.47053 10.6794L9.41802 6.46879H0.5V5.53129H9.41802L5.47053 1.32064L6.15447 0.679443Z" fill="#2C1C12" stroke="#2C1C12" stroke-width="0.4"/>
							</svg> ' . esc_html__( 'Previous', 'ple' ) . '</button>';
					endif;
				
					if ( $next_post ) :
						$next_post_url = get_permalink( $next_post->ID );
						echo '<a class="btn btn-yellow max-w-[160px] w-full gap-1.5" href="' . esc_url( $next_post_url ) . '">'
							. esc_html__( 'Next', 'ple' ) . ' 
							<svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M6.15447 0.679443L11.1425 6.00004L6.15447 11.3206L5.47053 10.6794L9.41802 6.46879H0.5V5.53129H9.41802L5.47053 1.32064L6.15447 0.679443Z" fill="#2C1C12" stroke="#2C1C12" stroke-width="0.4"/>
							</svg></a>';
					else :    
						echo '<button class="btn btn-yellow max-w-[160px] w-full gap-1.5 cursor-not-allowed opacity-50 invisible" disabled>'
							. esc_html__( 'Next', 'ple' ) . ' 
							<svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M6.15447 0.679443L11.1425 6.00004L6.15447 11.3206L5.47053 10.6794L9.41802 6.46879H0.5V5.53129H9.41802L5.47053 1.32064L6.15447 0.679443Z" fill="#2C1C12" stroke="#2C1C12" stroke-width="0.4"/>
							</svg></button>';
					endif;
				} else {
					echo esc_html__( 'No posts found in this topic.', 'ple' );
				}
				
				wp_reset_postdata();
				?>
			</div>
		</main>
	</div>
</section>

<?php
get_footer();