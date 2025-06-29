<?php
/**
 * Hero Take Action template.
 *
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
    <div class="wide ~py-60px/24 grid items-center ~sm:~gap-10/12 sm:grid-cols-2">
        <div class="">
            <h1 class="text-body/[90%] ~text-56/240 ~leading-56/180 ~-tracking-3/20 font-bold ~mb-30px/10 [&_span]:text-cream"><?php echo wp_kses_post( $title ); ?></h1>
            <p class="text-lg max-w-460px"><?php echo esc_html( $text ); ?></p>
        </div>
        <div class="-mr-5">
            <?php echo wp_get_attachment_image( $image, 'full', false, [ "class" => "w-full" ] ); ?>
        </div>
    </div>
</section>