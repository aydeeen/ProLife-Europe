<?php
/**
 * Videos Block template.
 *
 * @param array $block The block settings and attributes.
 */

$id = NULL;
if ( ! empty( $block['anchor'] ) ) {
    $id = 'id="' . esc_attr( $block['anchor'] ) . '" ';
} 

$title   = get_field('title');
$text    = get_field('text');
$button  = get_field('button');
$video_1 = get_field('video_1');
$video_2 = get_field('video_2');
$video_3 = get_field('video_3');
$video_4 = get_field('video_4');
?>

<section <?php echo $id; ?> class="bg-cream">
    <div class="main grid grid-cols-1 items-center gap-10 ~py-60px/100px lg:grid-cols-2">
        <div class="lg:max-w-460px">
            <h2 class="heading text-body/[90%] ~mb-6/8 [&_span]:text-orange"><?php echo wp_kses_post( $title ); ?></h2>
            <p class="text-lg text-body/[75%] [&_span]:text-orange [&_span]:font-semibold"><?php echo wp_kses_post( $text ); ?></p>
            <?php if ( $button ): ?>   
                <a class="btn ~mt-6/10" href="<?php echo esc_url( $button['url'] ); ?>" role="button" target="<?php echo esc_attr( $button['target'] ? $button['target'] : '_self' ); ?>">
                    <?php echo esc_html( $button['title'] ); ?>
                </a>
            <?php endif; ?>
        </div>
        <div class="grid grid-cols-2 ~gap-5/10">
            <?php if ( $video_1 ): ?>   
                <video preload="metadata" controls>
                    <source src="<?php echo get_template_directory_uri(); ?>/videos/video-1.mp4#t=0.000001" type="video/mp4">
                </video>
            <?php endif; ?>
            <?php if ( $video_2 ): ?>   
                <video preload="metadata" controls>
                    <source src="<?php echo get_template_directory_uri(); ?>/videos/video-2.mp4#t=0.000001" type="video/mp4">
                </video>
            <?php endif; ?>
            <?php if ( $video_3 ): ?>   
                <video preload="metadata" controls>
                    <source src="<?php echo get_template_directory_uri(); ?>/videos/video-3.mp4#t=0.000001" type="video/mp4">
                </video>
            <?php endif; ?>
            <?php if ( $video_4 ): ?>   
                <video preload="metadata" controls>
                    <source src="<?php echo get_template_directory_uri(); ?>/videos/video-4.mp4#t=0.000001" type="video/mp4">
                </video>
            <?php endif; ?>
        </div>
    </div>
</section>