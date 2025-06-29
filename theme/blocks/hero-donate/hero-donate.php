<?php
/**
 * Hero Donate template.
 
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
    <div class="wide py-6 grid items-center ~md:~gap-30px/12 md:grid-cols-2">
        <div class="xl:ml-120px">
            <h1 class="heading-big ~text-56/85 ~leading-56/80 ~mb-5/20 text-orange [&_span]:font-['Reckless_Light'] [&_span]:font-light [&_span]:-tracking-3 [&_span]:text-cream xl:w-[116%]"><?php echo wp_kses_post( $title ); ?></h1>
            <p class="text-cream/[70%] md:max-w-560px"><?php echo esc_html( $text ); ?></p>
        </div>
        <div class="flex md:justify-end">
            <?php echo wp_get_attachment_image( $image, 'full' ); ?>
        </div>
    </div>
</section>