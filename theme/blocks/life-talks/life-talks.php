<?php
/**
 * Life Talks Block template.
 *
 * @param array $block The block settings and attributes.
 */

$id = NULL;
if ( ! empty( $block['anchor'] ) ) {
    $id = 'id="' . esc_attr( $block['anchor'] ) . '" ';
} 

$image = get_field('image');
$title = get_field('title');
$text  = get_field('text');
?>

<section <?php echo $id; ?> class="bg-blue overflow-hidden">
    <div class="main max-w-[1360px] pt-10 ~pb-10/108px">
        <?php echo wp_get_attachment_image( $image, 'full', false, [ 'class' => '~mb-10/120px' ] ); ?>
        <div class="xl:pl-100px">
            <h2 class="heading-big text-cream ~mb-30px/10 [&_span]:text-yellow"><?php echo wp_kses_post( $title ); ?></h2>
            <p class="max-w-[526px] text-blue-light ~mb-10/100px"><?php echo wp_kses_post( $text ); ?></p>

            <?php if ( have_rows('slider_items') ): $number = 0; ?>
                <div class="relative w-full h-auto" id="slider-wrapper">
                    <div class="flex gap-10">
                        <?php while (have_rows('slider_items')): the_row();
                            $number++;
                            $title  = get_sub_field('title');
                            $text   = get_sub_field('text');
                            $image  = get_sub_field('image');
                            ?>
                                <div class="flex-[0_0_400px] min-h-full rounded-2xl bg-blue-dark p-10 transform translate-x-0 will-change-transform transition-transform duration-1000 ease-out" data-speed="1">
                                    <?php if ( $image ) { ?>
                                        <div class="mb-10 size-[134px] rounded-full border border-solid border-blue-light/[70%] flex justify-center items-center">
                                            <?php echo wp_get_attachment_image( $logo, 'image' ); ?>
                                        </div>   
                                    <?php  } else { ?>
                                        <p class="mb-10 size-[134px] rounded-full border border-solid border-blue-light/[70%] flex justify-center items-center text-yellow text-64 font-bold">
                                            <?php echo esc_html($number); ?>
                                        </p>
                                    <?php } ?>
                                 
                                    <h3 class="text-yellow text-xl font-semibold mb-2">
                                        <?php echo esc_html($title); ?>
                                    </h3>
                                    <p class="text-blue-light/[90%]">
                                        <?php echo esc_html($text); ?>
                                    </p>
                                </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            <?php endif; ?>

        </div> 
    </div>


<script>
document.addEventListener("DOMContentLoaded", () => {
    const sliderItems = document.querySelectorAll("[data-speed]");
    let isAnimationStarted = false; // Flag to track if animation has started

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting && !isAnimationStarted) {
                    isAnimationStarted = true; // Animation starts after first item is in view

                    // Scroll-based animation for continuous movement
                    const scrollHandler = () => {
                        sliderItems.forEach((item) => {
                            const speed = parseFloat(item.dataset.speed);
                            const rect = item.getBoundingClientRect();
                            const offset = rect.top - window.innerHeight / 2; // Adjust relative position
                            item.style.transform = `translateX(${offset * speed}px)`; // Move items horizontally
                        });
                    };

                    window.addEventListener("scroll", scrollHandler);

                    // Stop observing after triggering animation
                    observer.disconnect();
                }
            });

             // Toggle overflow based on visibility
             document.getElementById("slider-wrapper").style.overflow = isAnimationStarted ? "hidden" : "visible";
        },
        {
            rootMargin: "50px 0px", // When any item comes into view
        }
    );

    // Observe the first item to trigger the animation
    sliderItems.forEach((item) => observer.observe(item));

});
</script>