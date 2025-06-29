<?php
/**
 * Hero About Block template.
 *
 * @param array $block The block settings and attributes.
 */

$id = NULL;
if ( ! empty( $block['anchor'] ) ) {
    $id = 'id="' . esc_attr( $block['anchor'] ) . '" ';
} 

$image = get_field('image');
$title = get_field('title');
?>

<section <?php echo $id; ?> class="bg-cream">
    <div class="wide ~pt-10/50px ~pb-60px/20 grid items-center sm:grid-cols-2 lg:h-full">
        <div class="mb-10 sm:mb-0 sm:~p-5/14">
            <h1 class="text-body/[90%] font-bold ~text-56/9xl ~leading-56/112 ~-tracking-3/10 [&_span]:text-orange [&_span]:lg:inline-block [&_span]:lg:ml-85px"><?php echo wp_kses_post( $title ); ?></h1>
        </div>
        <div>
            <?php echo wp_get_attachment_image( $image, 'full' ); ?>
        </div>
    </div>
</section>