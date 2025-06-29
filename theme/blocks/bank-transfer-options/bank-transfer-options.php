<?php
/**
 * Bank Transfer Options Block template.
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

<section <?php echo $id; ?> class="bg-cream">
    <div class="main ~py-60px/100px">
        <h2 class="heading mb-4"><?php echo esc_html( $title ); ?></h2>
        <p class="text-lg text-body/[75%] max-w-[492px] ~mb-10/12"><?php echo esc_html( $text ); ?></p>
        <?php if ( have_rows('items') ): ?>
            <div class="max-w-660px rounded-2xl px-28px py-10 bg-[#F5F2E9]">
                <?php while ( have_rows('items') ): the_row(); 
                    $country = get_sub_field('country');
                    $number  = get_sub_field('number');
                    ?>
                        <p class="text-lg text-body/[75%] font-medium [&:not(:last-child)]:mb-4">
                            <span class="text-orange font-semibold"><?php echo esc_html( $country ); ?></span>
                            <span><?php echo esc_html( $number ); ?></span>
                        </p>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</section>