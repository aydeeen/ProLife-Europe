<?php
/**
 * Accordion Block template.
 *
 * @param array $block The block settings and attributes.
 */

$id = NULL;
if ( ! empty( $block['anchor'] ) ) {
    $id = 'id="' . esc_attr( $block['anchor'] ) . '" ';
} 

$title = get_field('title');
?>

<section <?php echo $id; ?> class="bg-blue">
    <div class="main max-w-[760px] ~py-60px/125px">
        <h2 class="heading text-cream ~mb-10/85px"><?php echo esc_html( $title ); ?></h2>
        <?php if ( have_rows('items') ): $item = 0; ?>   
            <?php while ( have_rows('items') ): the_row();
                $item++;  
                $title    = get_sub_field('title');
                $content  = get_sub_field('content');
                ?>
                    <div x-data="{ isExpanded: false }" class="border-b border-b-solid border-b-[#4D5074] pb-6 mb-6 [&:first-child]:border-t [&:first-child]:border-t-solid [&:first-child]:border-t-[#4D5074] [&:first-child]:pt-6">
                        <button id="controlsAccordionItem<?php echo esc_html( $item ); ?>" type="button" class="w-full font-bold text-cream text-left flex justify-between" aria-controls="accordionItem<?php echo esc_html( $item ); ?>" @click="isExpanded = ! isExpanded" :class="isExpanded ? 'mb-6' : ''" :aria-expanded="isExpanded ? 'true' : 'false'">
                            <?php echo esc_html( $title ); ?>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke="currentColor" class="size-5 shrink-0 transition" aria-hidden="true" :class="isExpanded ? 'rotate-180' : ''">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                            </svg>
                        </button>
                        <div x-cloak x-show="isExpanded" id="accordionItem<?php echo esc_html( $item ); ?>" role="region" aria-labelledby="controlsAccordionItem<?php echo esc_html( $item ); ?>" x-collapse>
                            <div class="[&_*]:text-blue-light/[85%]"><?php echo wp_kses_post( $content ); ?></div>
                        </div>
                    </div>
            <?php endwhile; ?>	
        <?php endif; ?>
    </div>
</section>