<?php
/**
 * Partner Organisations Block template.
 *
 * @param array $block The block settings and attributes.
 */

$id = NULL;
if ( ! empty( $block['anchor'] ) ) {
    $id = 'id="' . esc_attr( $block['anchor'] ) . '" ';
} 

$title = get_field('title');
?>

<section <?php echo $id; ?> class="bg-cream">
    <div class="main ~py-60px/100px">
        <h2 class="heading text-orange/[90%] text-center ~mb-10/67px"><?php echo esc_html( $title ); ?></h2>
        <?php if ( have_rows('partners') ): ?>
            <div class="max-w-[900px] mx-auto grid grid-cols-[repeat(auto-fit,_minmax(124px,_1fr))] gap-x-6 ~gap-y-6/11">
                <?php while (have_rows('partners')): the_row(); 
                    $logo     = get_sub_field('logo');
                    $name     = get_sub_field('name');
                    $link     = get_sub_field('link');
                    $location = get_sub_field('location');
                    ?>
                        <div>
                            <a href="<?php echo esc_url( $link ); ?>" target="__blank" class="aspect-square bg-[#FFFAF0] rounded-2xl flex justify-center items-center ~mb-2.5/3.5">
                                <?php echo wp_get_attachment_image( $logo, 'full', false, [ 'class' => 'mix-blend-multiply rounded-none' ] ); ?>              
                            </a>
                            <a href="<?php echo esc_url( $link ); ?>" target="__blank" class="block text-sm font-medium text-body hover:text-orange"><?php echo esc_html( $name ); ?></a>
                            <p class="text-sm font-light text-body/[60%]"><?php echo esc_html( $location ); ?></p>
                        </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</section>