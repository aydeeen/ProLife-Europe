<?php
/**
 * Hero Home Block template.
 *
 * @param array $block The block settings and attributes.
 */

$id = NULL;
if ( ! empty( $block['anchor'] ) ) {
    $id = 'id="' . esc_attr( $block['anchor'] ) . '" ';
} 

$title                     = get_field('title');
$subtitle                  = get_field('subtitle');
$text                      = get_field('text');
$image                     = get_field('image');
$button                    = get_field('button');
$link_below_button         = get_field('link_below_button');
$reverse                   = get_field('reverse');
$mobile_image_below_title  = get_field('mobile_image_below_title');
$button_yellow             = get_field('button_yellow');
$button_with_arrow         = get_field('button_with_arrow');
$list_item_title_yellow    = get_field('list_item_title_yellow');
$list_item_cream           = get_field('list_item_cream');
$bg_color                  = get_field('bg_color');
$title_bigger              = get_field('title_bigger');
$title_border_left         = get_field('title_border_left');
$video                     = get_field('video');
?>

<section <?php echo $id; ?> style="background-color:<?php echo esc_html( $bg_color ); ?>">
    <div class="main grid grid-cols-1 items-center ~md:~gap-10/36 ~py-60px/100px md:grid-cols-2">
        <div class="content flex flex-col items-start ~gap-y-26px/8 md:max-w-460px <?php if ( $reverse ) echo 'md:order-1' ?>">
            <h2 class="heading text-body/[90%] <?php if ( $title_bigger ) echo 'heading-big' ?> <?php if ( $title_border_left ) echo 'border-l-2 border-solid border-orange ~pl-5/10' ?>"><?php echo $title; ?></h2>
            <?php if ( $subtitle ): ?>
                <h3 class="text-orange/[90%] text-2xl leading-7 font-bold ~-mt-2.5/4"><?php echo esc_html( $subtitle ); ?></h3>
            <?php endif; ?>
            <?php if ( $image ): ?>
                <div class="<?php echo ( $mobile_image_below_title ? 'block md:hidden' : 'hidden' ); ?>">
                    <?php echo wp_get_attachment_image( $image, 'full' ); ?>
                </div>
            <?php endif; ?>
            <?php if ( $text ): ?>
                <p class="text-lg text-body/[75%] [&_span]:text-orange"><?php echo wp_kses_post( $text ); ?></p>
            <?php endif; ?>
            <?php if ( have_rows('list_items') ): ?>
                <div class="grid gap-5">
                    <?php while (have_rows('list_items')): the_row(); 
                        $title = get_sub_field('title');
                        $text  = get_sub_field('text');
                        ?>
                            <div>
                                <h3 class="text-21 font-semibold <?php echo ( $list_item_title_yellow ? 'text-yellow' : 'text-orange' ); ?>"><?php echo esc_html( $title ); ?></h3>
                                <p class="text-lg <?php echo ( $list_item_cream ? 'text-cream/[85%]' : 'text-body/[75%]' ); ?>"><?php echo wp_kses_post( $text ); ?></p>
                            </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
            <?php if ( $button ): ?>
                <a class="btn text-center <?php if ( $button_yellow ) echo 'btn-yellow' ?>" href="<?php echo esc_url( $button['url'] ); ?>" role="button" target="<?php echo esc_attr( $button['target'] ? $button['target'] : '_self' ); ?>">
                    <?php echo esc_html( $button['title'] ); ?>
                    <?php if ( $button_with_arrow ): ?>
                        <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M11.1545 4.88892L16.1425 10.2095L11.1545 15.5301L10.4705 14.8889L14.418 10.6783H5.5V9.74076H14.418L10.4705 5.53011L11.1545 4.88892Z" fill="#2C1C12" stroke="#2C1C12" stroke-width="0.4"/>
                        </svg>
                    <?php endif; ?>
                </a>
            <?php endif; ?>
            <?php if ( $link_below_button ): ?>
                <a class="inline-block text-cream ~-mt-4/5" href="<?php echo esc_url( $link_below_button['url'] ); ?>" target="<?php echo esc_attr( $link_below_button['target'] ? $link_below_button['target'] : '_self' ); ?>">                    
                    <?php echo esc_html( $link_below_button['title'] ); ?>
                </a>
            <?php endif; ?>
        </div>
        <?php if ( $image ): ?>
            <div class="image-wrapper <?php if ( $mobile_image_below_title ) echo 'hidden md:block' ?>">
                <?php echo wp_get_attachment_image( $image, 'full' ); ?>
            </div>
        <?php endif; ?>
        <?php if ( $video ): ?>
            <div>
                <video class="rounded-2xl" playsinline autoplay loop muted>
                    <source src="<?php echo get_template_directory_uri(); ?>/videos/video.webm" type="video/webm">
                </video>
            </div>
        <?php endif; ?>
    </div>
</section>