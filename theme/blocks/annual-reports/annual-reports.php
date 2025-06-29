<?php
/**
 * Annual Reports Block template.
 *
 * @param array $block The block settings and attributes.
 */

$id = NULL;
if ( ! empty( $block['anchor'] ) ) {
    $id = 'id="' . esc_attr( $block['anchor'] ) . '" ';
} 

$bg_image = get_field('bg_image');
$title    = get_field('title');
$text     = get_field('text');
$button   = get_field('button');
?>

<section <?php echo $id; ?> class="bg-cover bg-center bg-no-repeat" style="background-image:url( <?php echo esc_url( $bg_image ); ?>)">
    <div class="main ~pt-60px/100px ~pb-60px/110px text-center">
        <h2 class="font-bold text-body/[90%] ~text-4xl/64 ~leading-36/48 mb-6 -tracking-2"><?php echo esc_html( $title ); ?></h2>
        <p class="text-body/[90%] text-lg ~mb-10/16"><?php echo esc_html( $text ); ?></p>
        <div class="max-w-[360px] rounded-2xl bg-[#FFFAF0] mx-auto pt-6 ~pb-6/50px px-5 text-center">
            <a class="px-10 py-2 text-28 text-body/[90%] bg-cream rounded-[30px] hover:bg-cream hover:text-body/[90%] inline-block ~mb-6/10 cursor-auto" role="button">
                <?php echo esc_html( $button['title'] ); ?>
            </a>
            <?php if ( have_rows('links') ): ?>
                <div class="grid gap-6">
                    <?php while ( have_rows('links') ): the_row(); 
                        $link = get_sub_field('link');
                        ?>
                            <a class="text-orange underline text-2xl font-bold w-fit mx-auto hover:text-green" href="<?php echo esc_url( $link['url'] ); ?>" target="<?php echo esc_attr( $link['target'] ? $link['target'] : '_self' ); ?>">
                                <?php echo esc_html( $link['title'] ); ?>
                            </a>
                    <?php endwhile; ?>		
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>