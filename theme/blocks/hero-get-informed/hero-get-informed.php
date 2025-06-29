<?php
/**
 * Hero Get Informed template.
 
 * @param array $block The block settings and attributes.
 */

$id = NULL;
if ( ! empty( $block['anchor'] ) ) {
    $id = 'id="' . esc_attr( $block['anchor'] ) . '" ';
} 

$image = get_field('image');
$title = get_field('title');
?>

<section <?php echo $id; ?> class="bg-brown">
    <div class="wide ~pt-60px/110px ~pb-60px/125px grid items-center gap-10 xl:gap-0 2xl:items-end md:grid-cols-2">
        <div class="xl:ml-120px xl:z-10">
            <h1 class="text-cream font-bold ~text-56/9xl ~leading-56/112 ~-tracking-3/10 ~xl:~mb-10/110px"><?php echo wp_kses_post( $title ); ?></h1>
            <?php if ( have_rows('links') ): ?>
                <div class="max-w-[409px] flex gap-4 flex-wrap">
                    <?php while (have_rows('links')): the_row(); 
                        $link = get_sub_field('link');
                        ?>
                            <a class="btn text-cream font-normal border border-solid border-cream bg-transparent hover:bg-cream hover:text-body max-w-[150px] [&:nth-child(3)]:max-w-[95px] [&:nth-child(4)]:max-w-[132px]" href="<?php echo esc_url( $link['url'] ); ?>" role="button" target="<?php echo esc_attr( $link['target'] ? $link['target'] : '_self' ); ?>">
                                <?php echo esc_html( $link['title'] ); ?>
                            </a>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>
        <div class="xl:-ml-120px">
            <?php echo wp_get_attachment_image( $image, 'full' ); ?>
        </div>
    </div>
</section>