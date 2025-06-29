<?php
/**
 * Testimonials Block template.
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

<section <?php echo $id; ?> class="bg-cream" x-data="carouselFilter()">
    <div class="main ~pt-60px/120px ~pb-60px/165px relative">
        <div class="~mb-10/60px">
            <h2 class="~text-40/62 ~leading-40/62 -tracking-2 font-bold text-orange/[90%] mb-4"><?php echo esc_html( $title ); ?></h2>
            <p class="text-orange/[90%] text-2xl font-bold"><?php echo esc_html( $text ); ?></p>
        </div>
        <?php if ( have_rows('slider_items') ): ?>
            <div x-show="active == 0" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-90" x-transition:enter-end="opacity-100 transform scale-100" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 transform scale-100" x-transition:leave-end="opacity-0 transform scale-90">
                <div x-data="carousel()" x-init="init()">
                    <div class="carousel [&_.flickity-button]:bg-yellow [&_.flickity-button]:border [&_.flickity-button]:border-solid [&_.flickity-button]:border-body/[90%] [&_.flickity-button]:!bg-no-repeat [&_.flickity-button]:!bg-center [&_.flickity-button-icon]:hidden [&_.flickity-prev-next-button]:-top-[36px] [&_.flickity-prev-next-button]:sm:-top-[15%] [&_.flickity-prev-next-button.previous]:left-auto [&_.flickity-button:hover]:bg-orange [&_.flickity-button:hover]:shadow-none [&_.flickity-prev-next-button.previous]:right-55px [&_.flickity-prev-next-button.previous]:bg-[url('./images/arrow-left.svg')] [&_.flickity-prev-next-button.next]:right-0 [&_.flickity-prev-next-button.next]:bg-[url('./images/arrow-right.svg')] [&_.flickity-page-dots]:-bottom-10" x-ref="carousel">   
                        <?php while ( have_rows('slider_items') ): the_row();  
                            $image    = get_sub_field('image');
                            $name     = get_sub_field('name');
                            $position = get_sub_field('position');
                            $quote    = get_sub_field('quote');
                            ?>
                                <div class="w-full sm:w-[calc(50%-20px)] lg:w-[calc(33.333333%-27px)] xl:w-[calc(25%-30px)] min-h-full grid gap-7 mx-5 bg-[rgba(255,250,240,1)] rounded-2xl px-6 py-9">
                                    <p class="text-15 text-body/[90%]"><?php echo esc_html( $quote ); ?></p>
                                    <div class="flex items-center gap-4 mt-auto">
                                        <?php echo wp_get_attachment_image( $image, 'full', false, [ "class" => "w-12 h-12 rounded-full" ] ); ?>
                                        <div class="">
                                            <p class="text-body/[90%] text-13 font-bold"><?php echo esc_html( $name ); ?></p>
                                            <p class="text-body/[60%] text-13"><?php echo esc_html( $position ); ?></p>
                                        </div>
                                    </div>
                                </div>
                        <?php endwhile; ?>	
                    </div>	
                </div>
            </div>
        <?php endif; ?>
        <img src="<?php echo get_template_directory_uri(); ?>/images/pro-life-1.png" alt="Pro-Life" class="hidden xl:block absolute left-[-110px] bottom-[45px]" />
        <img src="<?php echo get_template_directory_uri(); ?>/images/pro-life-2.png" alt="Pro-Life" class="hidden xl:block absolute top-0 right-[371px]" />
        <img src="<?php echo get_template_directory_uri(); ?>/images/pro-life-3.png" alt="Pro-Life" class="hidden xl:block absolute right-[63px] bottom-0" />
    </div> 
</section>

<script>
   const carousel = () => {
        return {
            active: 0,
            init() {
                const flkty = new Flickity(this.$refs.carousel, {
                    cellAlign: 'left',
                    draggable: true,
                    groupCells: true
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
