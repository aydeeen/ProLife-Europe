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

$image    = get_field('image');
$bg_image = get_field('bg_image');
$subtitle = get_field('subtitle');
$title    = get_field('title');
$button   = get_field('button');
?>

<section <?php echo $id; ?> class="bg-brown">
    <div class="px-5 grid items-center md:grid-cols-2 lg:h-full">
        <div class="-mx-5 h-full bg-orange pt-10 flex items-center justify-center md:mr-0 md:pt-0 [@media(max-width:767px)]:!bg-none" style="background-image:url( <?php echo esc_url( $bg_image ); ?>)">
            <?php echo wp_get_attachment_image( $image, 'full', false, [ 'class' => 'w-full h-full max-w-[689px] object-contain 2xl:ml-auto 2xl:~mr-5/10' ] ); ?>
        </div>
        <div class="-order-1 flex flex-col items-start py-12 ~gap-y-6/10 md:order-none md:~px-5/75px md:~py-5/150px">
            <P class="text-base font-normal text-cream/[90%]"><?php echo wp_kses_post( $subtitle ); ?></P>
            <h1 class="heading-big -ml-1 text-orange [&_span]:font-['Reckless_Light'] [&_span]:font-light [&_span]:-tracking-3 [&_span]:text-cream"><?php echo wp_kses_post( $title ); ?></h1>
            <a class="btn btn-yellow" href="<?php echo esc_url( $button['url'] ); ?>" role="button" target="<?php echo esc_attr( $link['target'] ? $link['target'] : '_self' ); ?>">
                <?php echo esc_html( $button['title'] ); ?>
                <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.1545 4.88892L16.1425 10.2095L11.1545 15.5301L10.4705 14.8889L14.418 10.6783H5.5V9.74076H14.418L10.4705 5.53011L11.1545 4.88892Z" fill="#2C1C12" stroke="#2C1C12" stroke-width="0.4"/>
                </svg>
            </a>
        </div>
    </div>
</section>