<?php
/**
 * Marquee Block template.
 *
 * @param array $block The block settings and attributes.
 */

$id = NULL;
if ( ! empty( $block['anchor'] ) ) {
    $id = 'id="' . esc_attr( $block['anchor'] ) . '" ';
} 

?>

<section <?php echo $id; ?> class="bg-blue-dark relative flex overflow-x-hidden">
    <?php if ( have_rows('cities') ): ?>
        <div class="py-2.5 animate-marquee whitespace-nowrap">
            <?php while (have_rows('cities')): the_row(); 
                $city = get_sub_field('city');
                ?>
                    <span class="text-blue-light text-xl [&_span]:inline-block [&_span]:mx-4"><?php echo wp_kses_post( $city ); ?></span>
            <?php endwhile; ?>
        </div>

        <div class="absolute top-0 py-2.5 animate-marquee2 whitespace-nowrap">
            <?php while (have_rows('cities')): the_row(); 
                $city = get_sub_field('city');
                ?>
                    <span class="text-blue-light text-xl [&_span]:inline-block [&_span]:mx-4"><?php echo wp_kses_post( $city ); ?></span>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>
</section>