<?php
/**
 * Hero Get Equiped template.
 
 * @param array $block The block settings and attributes.
 */

$id = NULL;
if ( ! empty( $block['anchor'] ) ) {
    $id = 'id="' . esc_attr( $block['anchor'] ) . '" ';
} 

$image = get_field('image');
$title = get_field('title');
$text  = get_field('text');
?>

<section <?php echo $id; ?> class="bg-orange">
    <div class="wide py-6 grid items-center ~gap-5/10 xl:gap-0 md:grid-cols-2">
        <div class="xl:ml-93px xl:z-10">
            <h1 class="text-cream font-bold ~text-56/150 ~leading-56/128 ~-tracking-3/11 ~mb-5/50px"><?php echo esc_html( $title ); ?></h1>
            <p class="text-lg md:max-w-460px"><?php echo esc_html( $text ); ?></p>
        </div>
        <div class="xl:-ml-93px">
            <?php echo wp_get_attachment_image( $image, 'full' ); ?>
        </div>
    </div>
</section>