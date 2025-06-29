<?php
/**
 * Hero Pregnant & In Need template.
 
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

<section <?php echo $id; ?> class="bg-brown">
    <div class="wide py-6 grid items-center ~sm:~gap-30px/68px sm:grid-cols-2 xl:grid-cols-[776px,1fr] lg:h-full">
        <div>
            <?php echo wp_get_attachment_image( $image, 'full' ); ?>
        </div>
        <div>
            <h1 class="heading-big ~leading-56/90 mb-6 sm:max-w-[500px] text-orange [&_span]:font-['Reckless_Light'] [&_span]:font-light [&_span]:-tracking-3 [&_span]:text-cream"><?php echo wp_kses_post( $title ); ?></h1>
            <p class="text-cream/[70%] sm:max-w-[378px]"><?php echo esc_html( $text ); ?></p>
        </div>
    </div>
</section>