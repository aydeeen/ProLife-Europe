<?php
/**
 * Team Block template.
 *
 * @param array $block The block settings and attributes.
 */

$id = NULL;
if ( ! empty( $block['anchor'] ) ) {
    $id = 'id="' . esc_attr( $block['anchor'] ) . '" ';
} 

$title = get_field('title');
$text  = get_field('text');
?>

<section <?php echo $id; ?> class="bg-orange" x-data="carouselFilter()">
    <div class="main grid ~gap-y-10/85px ~py-60px/105px">
        <div class="mb-7 m:mb-0">
            <h2 class="heading-big text-body/[90%] mb-4"><?php echo esc_html( $title ); ?></h2>
            <p class="text-body/[90%] text-lg sm:max-w-[462px]"><?php echo esc_html( $text ); ?></p>
        </div>
        <?php if ( have_rows('slider_items') ): ?>
            <div x-show="active == 0" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-90" x-transition:enter-end="opacity-100 transform scale-100" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 transform scale-100" x-transition:leave-end="opacity-0 transform scale-90"
            >
                <div x-data="carousel()" x-init="init()">
                    <div class="carousel [&_.flickity-button]:bg-body [&_.flickity-button-icon]:fill-white [&_.flickity-prev-next-button]:-top-[36px] [&_.flickity-prev-next-button]:sm:-top-[15%] [&_.flickity-prev-next-button.previous]:left-auto [&_.flickity-prev-next-button_.flickity-button-icon]:left-[27%] [&_.flickity-prev-next-button_.flickity-button-icon]:w-[40%] [&_.flickity-button:hover]:bg-green [&_.flickity-button:hover]:shadow-none [&_.flickity-prev-next-button.previous]:right-55px [&_.flickity-prev-next-button.next]:right-0" x-ref="carousel">   
                        <?php while ( have_rows('slider_items') ): the_row();  
                            $image    = get_sub_field('image');
                            $name     = get_sub_field('name');
                            $position = get_sub_field('position');
                            $quote    = get_sub_field('quote');
                            ?>
                                <div class="w-full sm:w-[calc(50%-20px)] lg:w-[calc(33.333333%-27px)] xl:w-[calc(25%-30px)] mx-5">
                                    <div class="relative mb-4 group overflow-hidden" x-data="{openQuote: false}">
                                        <div class="relative w-full rounded-2xl overflow-hidden">
                                            <?php echo wp_get_attachment_image( $image, 'full', false, [ 'class' => 'w-full h-full transition-all duration-300 ease-in-out transform sm:group-hover:scale-105' ] ); ?>
                                            <button class="btn px-5 absolute left-2 bottom-2 z-10 sm:hidden" @click="openQuote = !openQuote">
                                                <span x-text="openQuote ? 'Close' : 'Quote'"></span>
                                            </button>
                                        </div>

                                        <div class="bg-[#F09AC0] h-full w-full flex flex-col justify-center items-center gap-5 p-5 absolute left-0 top-0 rounded-2xl opacity-0 sm:group-hover:opacity-100 sm:group-hover:visible sm:group-hover:scale-100 transition-all duration-300 ease-in-out invisible cursor-pointer will-change-transform" :class="{'opacity-100 visible scale-100': openQuote, 'opacity-0 invisible scale-90': !openQuote}">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/quote.svg" alt="Quote" class="rounded-none transition-transform duration-300 ease-in-out sm:group-hover:scale-110" />
                                            <p class="text-center transition-opacity duration-300 ease-in-out sm:group-hover:opacity-100"><?php echo esc_html( $quote ); ?></p>
                                        </div>
                                    </div>
                                     
                                    <div>
                                        <div>
                                            <p class="text-body/[90%] text-lg font-bold"><?php echo esc_html( $name ); ?></p>
                                            <p class="text-body/[60%]"><?php echo esc_html( $position ); ?></p>
                                        </div>
                                    </div>
                                </div>
                        <?php endwhile; ?>	
                    </div>	
                </div>
            </div>
        <?php endif; ?>
    </div> 
</section>

<script>
   const carousel = () => {
        return {
            active: 0,
            init() {
                const flkty = new Flickity(this.$refs.carousel, {
                    cellAlign: 'left',
                    pageDots: false,
                    draggable: false,
                    wrapAround: true
                });
                    flkty.on('change', i => this.active = i);
            }
        }
   } 
     
    const carouselFilter = () => {
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
