<?php
/**
 * Three Pillars Block template.
 *
 * @param array $block The block settings and attributes.
 */

$id = NULL;
if ( ! empty( $block['anchor'] ) ) {
    $id = 'id="' . esc_attr( $block['anchor'] ) . '" ';
} 

$bg_image = get_field('bg_image');
$title    = get_field('title');
?>

<section <?php echo $id; ?> class="bg-cover bg-center bg-no-repeat" style="background-image:url( <?php echo esc_url( $bg_image ); ?>)">
    <div class="main ~pt-14/28 ~pb-20/138px">
        <h2 class="font-bold text-body/[90%] ~text-4xl/54 ~leading-36/54 ~mb-10/68px -tracking-2 [&_span]:text-orange"><?php echo wp_kses_post( $title ); ?></h2>
        <?php if ( have_rows('items') ): ?>
            <div class="grid grid-cols-1 items-center gap-y-4 ~md:~gap-x-5/10 md:grid-cols-3">
                <?php while ( have_rows('items') ): the_row(); 
                    $icon  = get_sub_field('icon');
                    $title = get_sub_field('title');
                    $text  = get_sub_field('text');
                    ?>
                        <div class="h-full bg-[#FFFAF0] p-6 rounded-2xl">
                            <?php echo wp_get_attachment_image( $icon, 'full', false, [ 'class' => 'mb-6' ] ); ?>
                            <h3 class="mb-2 text-2xl text-body/[90%] font-bold"><?php echo esc_html( $title ); ?></h3>
                            <p class="text-body/[70%]"><?php echo esc_html( $text ); ?></p>
                        </div>
                <?php endwhile; ?>		
            </div>
        <?php endif; ?>
    </div>
</section>