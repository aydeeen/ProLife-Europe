<?php
/**
 * Values Block template.
 *
 * @param array $block The block settings and attributes.
 */

$id = NULL;
if ( ! empty( $block['anchor'] ) ) {
    $id = 'id="' . esc_attr( $block['anchor'] ) . '" ';
} 

$title = get_field('title');
?>

<section <?php echo $id; ?> class="bg-brown [&_.flickity-enabled.is-draggable_.flickity-viewport]:cursor-[url('./images/drag.svg'),_grab] [&_.flickity-enabled.is-draggable_.flickity-viewport.is-pointer-down]:cursor-[url('./images/drag.svg'),_grabbing]" x-data="valuesCarouselFilter()">
    <div class="wide max-w-[2000px] grid ~gap-y-10/100px ~pt-60px/85px ~pb-60px/138px sm:px-0">
        <h2 class="heading-big mx-auto text-orange text-center [&_span]:font-['Reckless_Light'] [&_span]:font-light [&_span]:-tracking-3 [&_span]:text-cream"><?php echo wp_kses_post( $title ); ?></h2>
        <?php if ( have_rows('slider_items') ): ?>
            <div x-show="active == 0" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-90" x-transition:enter-end="opacity-100 transform scale-100" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 transform scale-100" x-transition:leave-end="opacity-0 transform scale-90">
                <div x-data="valuesCarousel()" x-init="init()">
                    <div class="valuesCarousel [&_.flickity-button]:sm:hidden" x-ref="valuesCarousel">   
                        <?php while ( have_rows('slider_items') ): the_row(); 
                            $image = get_sub_field('image');
                            $text  = get_sub_field('text');
                            ?>
                                <div class="w-full sm:w-460px md:w-560px ~mx-6/16 [&.is-selected_p]:text-cream/[90%]">
                                    <?php echo wp_get_attachment_image( $image, 'full', false, [ 'class' => 'w-full ~mb-30px/12' ] ); ?>
                                    <p class="text-lg text-cream/[40%]"><?php echo esc_html( $text ); ?></p>
                                 </div>
                        <?php endwhile; ?>	
                    </div>	
                </div>
            </div>
        <?php endif; ?>
    </div> 
</section>

<script>
   const valuesCarousel = () => {
    const desktopQuery = window.matchMedia('(min-width: 768px)');

        return {
            active: 0,
            init() {
                const flktyy = new Flickity(this.$refs.valuesCarousel, {
                    pageDots: false,
                    wrapAround: true
                });
                flktyy.on('change', i => this.active = i);
            }
        }
   } 
     
    const valuesCarouselFilter = () => {
        return {
            active: 0,
            changeActive(i) {
            this.active = i;
            
                this.$nextTick(() => {
                    let flkty = Flickity.data( this.$el.querySelectorAll('.carousel')[i] );
                    flkty.resize();
                });
            }
        }
    }
</script>
