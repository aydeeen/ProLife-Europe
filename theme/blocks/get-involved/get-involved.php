<?php
/**
 * Get Involved Block template.
 *
 * @param array $block The block settings and attributes.
 */

$id = NULL;
if ( ! empty( $block['anchor'] ) ) {
    $id = 'id="' . esc_attr( $block['anchor'] ) . '" ';
} 

$title = get_field('title');
?>

<section <?php echo $id; ?> class="bg-brown">
    <div class="main ~pt-60px/100px ~pb-60px/130px">
        <h2 class="heading text-cream text-center mx-auto w-fit relative ~mb-10/85px [&_span]:text-orange">
            <?php echo wp_kses_post( $title ); ?>
            <svg class="absolute -right-30px -bottom-22px [@media(max-width:450px)]:hidden" width="28" height="40" viewBox="0 0 28 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M8.8233 1.63867C14.6741 4.27864 28.2234 10.2584 25.6232 19.0169C24.2486 23.6472 18.2599 27.5212 14.5518 30.0608C11.4746 32.1683 7.69891 33.5712 4.85742 35.8444" stroke="#F36025" stroke-width="3" stroke-linecap="round"/>
                <path d="M4.85716 28.4082C4.51407 29.3164 1.39981 36.6282 2.48865 37.717C3.59987 38.8282 8.31035 38.3229 9.59419 38.3229C11.6822 38.3229 13.7089 37.8272 15.7633 37.8272" stroke="#F36025" stroke-width="3" stroke-linecap="round"/>
            </svg>
        </h2>
        <?php if ( have_rows('items') ): ?>
            <div class="grid grid-cols-[repeat(auto-fit,minmax(250px,1fr))] gap-x-10 gap-y-16">
                <?php while ( have_rows('items') ): the_row(); 
                    $image  = get_sub_field('image');
                    $title  = get_sub_field('title');
                    $text   = get_sub_field('text');
                    $button = get_sub_field('button');
                    ?>
                        <div class="flex flex-col items-start">
                            <?php echo wp_get_attachment_image( $image, 'full', false, [ 'class' => '~mb-6/8' ] ); ?>
                            <h3 class="text-cream mb-2 text-2xl text-body/[90%] font-bold"><?php echo esc_html( $title ); ?></h3>
                            <p class="~mb-5/6 text-cream/[70%] [&_a]:text-orange [&_a]:underline [&_a:hover]:text-yellow"><?php echo wp_kses_post( $text ); ?></p>
                            <a class="btn btn-yellow mt-auto" href="<?php echo esc_url( $button['url'] ); ?>" role="button" target="<?php echo esc_attr( $button['target'] ? $button['target'] : '_self' ); ?>">
                                <?php echo esc_html( $button['title'] ); ?>
                            </a>
                        </div>
                <?php endwhile; ?>		
            </div>
        <?php endif; ?>
    </div>
</section>