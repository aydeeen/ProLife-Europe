<?php
/**
 * Default Content Block template.
 *
 * @param array $block The block settings and attributes.
 */

$id = NULL;
if ( ! empty( $block['anchor'] ) ) {
    $id = 'id="' . esc_attr( $block['anchor'] ) . '" ';
} 

$content = get_field('content');
?>

<section <?php echo $id; ?> class="prose prose-neutral prose-a:text-primary">
    <div class="main ~py-10/20 text-lg text-body/[75%] [&_:is(strong,em)]:text-inherit [&_:is(h2,h3,h4,h5,h6)]:text-orange [&_a]:text-orange">
        <?php echo $content ?>
    </div>
</section>