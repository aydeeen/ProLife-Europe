<?php
/**
 * Life Talks Slider Block template.
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

<section <?php echo $id; ?> class="bg-blue" x-data="lifeTalksCarouselFilter()">
    <div class="main max-w-[1360px] pt-10 ~pb-10/108px">
        <?php echo wp_get_attachment_image( $image, 'full', false, [ 'class' => '~mb-10/120px' ] ); ?>
        <div class="xl:pl-100px">
            <h2 class="heading-big text-cream ~mb-30px/10 [&_span]:text-yellow"><?php echo wp_kses_post( $title ); ?></h2>
            <p class="max-w-[526px] text-blue-light ~mb-20/100px"><?php echo wp_kses_post( $text ); ?></p>
            <?php if ( have_rows('slider_items') ): $number = 0; ?>
                <div x-show="active == 0" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-90" x-transition:enter-end="opacity-100 transform scale-100" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 transform scale-100" x-transition:leave-end="opacity-0 transform scale-90">
                    <div x-data="lifeTalksCarousel()" x-init="init()">
                        <div class="lifeTalksCarousel [&_.flickity-button-icon]:fill-white [&_.flickity-prev-next-button]:-top-[36px] [&_.flickity-prev-next-button]:sm:-top-[9%] [&_.flickity-prev-next-button.previous]:left-auto [&_.flickity-prev-next-button_.flickity-button-icon]:left-[27%] [&_.flickity-prev-next-button_.flickity-button-icon]:w-[40%] [&_.flickity-button]:bg-blue-dark [&_.flickity-button:hover_.flickity-button-icon]:fill-blue-dark [&_.flickity-button:hover]:bg-yellow [&_.flickity-button:hover]:shadow-none [&_.flickity-prev-next-button.previous]:right-55px [&_.flickity-prev-next-button.next]:right-0" x-ref="lifeTalksCarousel">   
                            <?php while ( have_rows('slider_items') ): the_row();  
                                $number++;
                                $title = get_sub_field('title');
                                $text  = get_sub_field('text');
                                $image = get_sub_field('image');
                                ?>
                                    <div class="w-full min-h-full rounded-2xl bg-blue-dark sm:w-[calc(65%-30px)] md:w-[calc(55%-30px)] lg:w-[calc(45%-30px)] mx-5 p-10">
                                        <?php if ( $image ) {
                                            echo wp_get_attachment_image( $image, 'full', false, [ 'class' => '~mb-10/60px p-5 size-[134px] rounded-full border border-solid border-blue-light/[70%]' ] );           
                                        } else { ?>
                                            <p class="~mb-10/60px size-[134px] rounded-full border border-solid border-blue-light/[70%] flex justify-center items-center text-yellow text-64 font-bold"><?php echo esc_html( $number ); ?></p>
                                        <?php } ?>
                                        <h3 class="text-yellow text-21 font-semibold mb-2"><?php echo esc_html( $title ); ?></h3>
                                        <p class="text-blue-light/[90%]"><?php echo wp_kses_post( $text ); ?></p>
                                    </div>
                            <?php endwhile; ?>	
                        </div>	
                    </div>
                </div>
            <?php endif; ?>
        </div> 
    </div>
</section>

<script>
   const lifeTalksCarousel = () => {
        return {
            active: 0,
            init() {
                const flktyy = new Flickity(this.$refs.lifeTalksCarousel, {
                    pageDots: false,
                    wrapAround: true,
                    cellAlign: 'left',
                });
                flktyy.on('change', i => this.active = i);
            }
        }
   } 
     
    const lifeTalksCarouselFilter = () => {
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

