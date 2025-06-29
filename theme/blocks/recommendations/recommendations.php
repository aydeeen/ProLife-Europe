<?php
/**
 * Recommendations Block template.
 *
 * @param array $block The block settings and attributes.
 */

$id = NULL;
if ( ! empty( $block['anchor'] ) ) {
    $id = 'id="' . esc_attr( $block['anchor'] ) . '" ';
} 

$title            = get_field('title');
$text_above_title = get_field('text_above_title');
$bg_image         = get_field('bg_image');
?>

<section <?php echo $id; ?> class="bg-cover bg-center bg-no-repeat" style="background-image:url( <?php echo esc_url( $bg_image ); ?>)">
    <div class="main ~py-60px/120px grid ~gap-10/20">
        <div class="">
            <p class="text-cream text-lg mb-2.5"><?php echo esc_html( $text_above_title ); ?></p>
            <h2 class="font-bold text-cream -tracking-2 ~text-4xl/64 ~leading-9/64"><?php echo esc_html( $title ); ?></h2>
        </div>
        
        <?php if ( have_rows('recommendations_sources') ): ?>
            <div class="grid sm:grid-cols-3 ~gap-30px/10">
                <?php while (have_rows('recommendations_sources')): the_row(); 
                    $title = get_sub_field('title');
                    ?>
                        <div>
                            <h3 class="font-semibold text-21 text-yellow ~mb-5/8"><?php echo esc_html( $title ); ?></h3>
                            <?php if ( have_rows('items') ): ?>
                                <div class="grid ~gap-5/8">
                                    <?php while (have_rows('items')): the_row(); 
                                        $item = get_sub_field('item');
                                        ?>
                                            <div class="text-cream/[75%] [&_a]:underline [&_a]:text-cream [&_a:hover]:text-yellow"><?php echo wp_kses_post( $item ); ?></div>
                                    <?php endwhile; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</section>