<?php
/**
 * Events Calendar Block template.
 *
 * @param array $block The block settings and attributes.
 */

$id = NULL;
if ( ! empty( $block['anchor'] ) ) {
    $id = 'id="' . esc_attr( $block['anchor'] ) . '" ';
} 

$title    = get_field('title');
$bg_color = get_field('bg_color');
?>

<section <?php echo $id; ?> style="background-color:<?php echo esc_html( $bg_color ); ?>">
    <div class="main ~pt-14/115px ~pb-20/150px">
        <h2 class="heading-big text-center text-body/[90%] [&_span:last-of-type]:font-['Reckless_Light'] [&_span:last-of-type]:font-light [&_span:last-of-type]:-tracking-3 [&_span:last-of-type]:text-cream sm:text-left ~mb-12/100px"><?php echo wp_kses_post( $title ); ?></h2>
        <div class="relative rounded-xl bg-body/[90%] max-w-[760px] mx-auto border-b-1 border-b-[#68857B] [&_*]:!font-sans [&_.tribe-common_.tribe-common-b2]:sm:text-15 [&_.tribe-common_.tribe-common-h5]:sm:text-19 [&_.tribe-common_.tribe-common-h6]:sm:text-19 [&_.tribe-events_.tribe-events-c-events-bar\_\_search-container]:bg-cream [&_.tribe-common-c-btn]:!bg-green [&_.tribe-common-c-btn:hover]:!bg-green-dark [&_.tribe-common]:bg-[#FFFAF0] [&_.tribe-common]:sm:-translate-x-6 [&_.tribe-common]:sm:-translate-y-6 [&_.evo\_header\_title]:flex-wrap [&_.evo\_header\_title]:gap-x-5 [&_.evo\_header\_title]:gap-y-2 [&_.evo\_header\_title]:p-5 [&_.evo\_header\_title]:mb-8 [&_.evo\_header\_title]:border [&_.evo\_header\_title]:border-[#718B83] [&_.evo\_header\_title]:rounded-xl [&_#evcal\_cur]:!~text-32/5xl [&_#evcal\_cur]:!text-[#8C9E92] [&_#evcal\_cur]:!font-normal [&_.evcal\_arrows]:!size-11 [&_.evcal\_arrows]:!bg-transparent [&_.evcal\_arrows]:!border-[#93A79B] [&_.evcal\_arrows::before]:!border-cream [&_.evcal\_arrows::before]:!p-5px [&_.evcal\_arrows::before]:!m-[15px] [&_#evcal\_prev]:!m-0 [&_.eventon\_list\_event]:!mb-3 [&_.tribe-events]:rounded-xl [&_.tribe-events_.tribe-events-l-container]:min-h-0 [&_.tribe-events_:is(button)]:rounded-xl [&_.tribe-events-calendar-list\_\_event]:sm:!grid [&_.tribe-events-calendar-list\_\_event]:grid-cols-2 [&_.tribe-events-c-subscribe-dropdown\_\_container]:!hidden">
            <?php echo do_shortcode('[tribe_events]'); ?>
            <img src="<?php echo get_template_directory_uri(); ?>/images/lets-change-the-culture-orange.svg" alt="Let's change the culture" class="hidden lg:block absolute -left-72 bottom-[54%]" />
            <img src="<?php echo get_template_directory_uri(); ?>/images/lets-change-the-culture-blue.svg" alt="Let's change the culture" class="hidden lg:block absolute right-[-15%] top-[-18%]" />
            <img src="<?php echo get_template_directory_uri(); ?>/images/lets-change-the-culture-yellow.svg" alt="Let's change the culture" class="hidden lg:block absolute bottom-[-12%] -right-120px" />        
        </div>
    </div>
</section>