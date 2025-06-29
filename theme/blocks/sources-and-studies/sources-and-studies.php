<?php
/**
 * Sources and Studies Block template.
 *
 * @param array $block The block settings and attributes.
 */

$id = NULL;
if ( ! empty( $block['anchor'] ) ) {
    $id = 'id="' . esc_attr( $block['anchor'] ) . '" ';
} 
?>

<section <?php echo $id; ?> class="bg-cream overflow-x-hidden">
    <div class="main ~pt-5/10 ~pb-60px/83px">
        <?php if ( have_rows('items') ): $item = 0; ?>   
            <?php while ( have_rows('items') ): the_row();
                $item++;  
                $title    = get_sub_field('title');
                $content  = get_sub_field('content');
                ?>
                    <div x-data="{ isExpanded: false }" class="max-w-[760px] border-b border-b-solid border-b-[#B8B0A7]/[20%] py-6 [&:first-child]:border-t [&:first-child]:border-t-solid [&:first-child]:border-t-[#B8B0A7]/[20%]">
                        <button id="controlsAccordionItem<?php echo esc_html( $item ); ?>" type="button" class="w-full font-bold flex justify-between" aria-controls="accordionItem<?php echo esc_html( $item ); ?>" @click="isExpanded = ! isExpanded" :class="isExpanded ? 'mb-6' : ''" :aria-expanded="isExpanded ? 'true' : 'false'">
                            <?php echo esc_html( $title ); ?>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke="currentColor" class="size-5 shrink-0 transition" aria-hidden="true" :class="isExpanded ? 'rotate-180' : ''">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                            </svg>
                        </button>
                        <div x-cloak x-show="isExpanded" id="accordionItem<?php echo esc_html( $item ); ?>" role="region" aria-labelledby="controlsAccordionItem<?php echo esc_html( $item ); ?>" x-collapse>
                            <div class="[&_*]:text-body/[90%] [&_a]:text-orange [&_a]:underline [&_a:hover]:text-blue-light"><?php echo wp_kses_post( $content ); ?></div>
                        </div>
                    </div>
            <?php endwhile; ?>	
        <?php endif; ?>
    </div>
</section>