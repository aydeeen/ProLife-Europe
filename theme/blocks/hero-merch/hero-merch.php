<?php
/**
 * Hero Merch template.
 
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

<section <?php echo $id; ?> class="bg-cream">
    <div class="wide py-6 grid items-center ~gap-5/10 xl:gap-0 md:grid-cols-2">
        <div>
            <h1 class="text-body/[90%] font-bold ~text-56/9xl ~leading-56/110 ~-tracking-3/11 ~mb-5/8 [&_span]:text-orange"><?php echo wp_kses_post( $title ); ?></h1>
            <p class="text-lg text-body/[75%] md:max-w-560px"><?php echo esc_html( $text ); ?></p>
        </div>
        <div>
            <?php echo wp_get_attachment_image( $image, 'full', false, [ 'class' => 'md:mx-auto' ] ); ?>
        </div>
    </div>
</section>