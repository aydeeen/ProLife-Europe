<?php
/**
 * Statistics Block template.
 *
 * @param array $block The block settings and attributes.
 */

$id = NULL;
if ( ! empty( $block['anchor'] ) ) {
    $id = 'id="' . esc_attr( $block['anchor'] ) . '" ';
} 

$text_above_number         = get_field('text_above_number');
$text_below_number         = get_field('text_below_number');
$abortions_in_europe_title = get_field('abortions_in_europe_title');
$abortions_in_europe_text  = get_field('abortions_in_europe_text');
$image                     = get_field('image');
$text_below_image          = get_field('text_below_image');
?>

<section <?php echo $id; ?> class="bg-orange">
    <div class="main ~py-60px/138px text-center">
        <p class="heading text-body/[90%] xl:-tracking-2"><?php echo esc_html( $text_above_number ); ?></p>
        <h2 id="counter" class="heading-big ~text-56/170 [@media(max-width:389px)]:text-5xl ~leading-56/170 ~my-6/28px" x-data="counterAnimation()" x-intersect.full="startAnimation" x-text="formattedNumber"></h2>
        <p class="heading text-body/[90%] xl:-tracking-2 [&_span]:text-cream"><?php echo wp_kses_post( $text_below_number ); ?></p>
        <h3 class="heading-big ~text-56/170 ~leading-56/170 ~mt-14/120px ~mb-6/28px" x-data="{ shown: false }" x-intersect.once="shown = true" :class="shown ? 'opacity-0 animate-fadeIn' : 'opacity-0'"><?php echo esc_html( $abortions_in_europe_title ); ?></h3>
        <p class="heading text-body/[90%] xl:-tracking-2" x-data="{ shown: false }" x-intersect.once="shown = true" :class="shown ? 'opacity-0 animate-fadeIn' : 'opacity-0'"><?php echo esc_html( $abortions_in_europe_text ); ?></p>
        <?php echo wp_get_attachment_image( $image, 'full', false, [ 'class' => '~w-264px/560px mx-auto ~my-60px/130px' ] ); ?>
        <p class="text-lg max-w-560px mx-auto [&_a]:underline [&_span]:text-cream"><?php echo wp_kses_post( $text_below_image); ?></p>
    </div>
</section>