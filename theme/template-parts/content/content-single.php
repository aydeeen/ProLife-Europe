<?php
/**
 * Template part for displaying single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ple
 */

 $name = get_field('name');
?>

<article class="main max-w-960px ~pt-60px/16 ~pb-60px/36" id="post-<?php the_ID(); ?>">
	<div class="~mb-10/14 [&_img]:w-full"> 	
		<?php the_post_thumbnail( 'full' ); ?>
	</div>

	<h1 class="heading mb-8 max-w-660px mx-auto"><?php the_title(); ?></h1>

	<div class="max-w-660px mx-auto ~mb-10/20 flex flex-col justify-between items-start gap-5 sm:flex-row sm:items-center [&_a]:opacity-80">
		<div>
			<?php if( $name ): ?>
				<p class="text-body/[75%] font-semibold"><?php echo esc_html( $name ); ?></p>
        	<?php endif; ?>
			<p class="text-body/[50%]"><?php the_time( 'd/m/Y' ); ?> </p>
		</div>
		<?php echo do_shortcode('[addtoany]'); ?>
	</div>

	<div <?php ple_content_class( "entry-content max-w-660px mx-auto [&_.wp-block-image]:mx-auto text-body/[90%] ~text-base/19 [&_:is(strong,em)]:text-inherit [&_:is(h2,h3,h4,h5,h6)]:text-orange [&_a]:text-orange" ); ?>><?php the_content(); ?></div>
</article>