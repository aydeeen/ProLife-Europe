<?php
/**
 * Help Centers Block template.
 *
 * @param array $block The block settings and attributes.
 */

$id = NULL;
if ( ! empty( $block['anchor'] ) ) {
    $id = 'id="' . esc_attr( $block['anchor'] ) . '" ';
} 

$title = get_field('title');
$text  = get_field('text');
?>

<section <?php echo $id; ?> class="bg-orange">
    <div class="main max-w-960px text-center ~py-60px/103px">
        <h2 class="heading-big text-body/[90%] mb-6"><?php echo esc_html( $title ); ?></h2>
        <p class="text-lg max-w-560px mx-auto ~mb-10/55px"><?php echo esc_html( $text ); ?></p>
        <div>
            <?php echo do_shortcode("[wpgmza id=1]"); ?>
        </div>
    </div>
</section>