<?php
/**
 * Slider Alpine Only Block template.
 *
 * @param array $block The block settings and attributes.
 */

// Load values and assign defaults.


// Support custom "anchor" values.
$anchor = '';
if ( ! empty( $block['anchor'] ) ) {
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}

// Create class attribute allowing for custom "className" and "align" values.
$class_name = '';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $class_name .= ' align' . $block['align'];
}

$items = array();

if (have_rows('slides')) : while (have_rows('slides')) : the_row();

    $title = get_sub_field('title');
    $image = get_sub_field('image');

    $myObject = new stdClass();
    $myObject->title = $title;
    $myObject->image = $image;

    $items[] = $myObject;

endwhile; else :
    echo "No items found.";
endif; ?>

<div x-data="carousel({            
    slides: slides,            
})" class="relative w-full overflow-hidden">

    <!-- previous button -->
    <button type="button" class="absolute left-5 top-1/2 z-20 flex -translate-y-1/2 items-center justify-center rounded-full bg-white/40 p-2 text-neutral-600 transition hover:bg-white/60 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black active:outline-offset-0 dark:bg-neutral-950/40 dark:text-neutral-300 dark:hover:bg-neutral-950/60 dark:focus-visible:outline-white" aria-label="previous slide" x-on:click="previous()">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="3" class="size-5 pr-0.5 md:size-6" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
        </svg>
    </button>

    <!-- next button -->
    <button type="button" class="absolute right-5 top-1/2 z-20 flex -translate-y-1/2 items-center justify-center rounded-full bg-white/40 p-2 text-neutral-600 transition hover:bg-white/60 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black active:outline-offset-0 dark:bg-neutral-950/40 dark:text-neutral-300 dark:hover:bg-neutral-950/60 dark:focus-visible:outline-white" aria-label="next slide" x-on:click="next()">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="3" class="size-5 pl-0.5 md:size-6" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
        </svg>
    </button>
   
    <!-- slides -->
    <!-- Change min-h-[50svh] to your preferred height size -->
    <div class="relative min-h-[50svh] w-full" x-on:touchstart="handleTouchStart($event)" x-on:touchmove="handleTouchMove($event)" x-on:touchend="handleTouchEnd()">
        <template x-for="(slide, index) in slides">
            <div x-show="currentSlideIndex == index - 1" class="absolute inset-0" x-transition.opacity.duration.700ms>
                <h3 class="w-full text-balance text-2xl font-bold text-white lg:w-4/5 lg:text-3xl" x-text="slide.title" x-bind:aria-describedby="'slide' + (index + 1) + 'Description'"></h3>
                <img class="absolute inset-0 size-full object-cover text-neutral-600 dark:text-neutral-300" x-bind:src="slide.img" x-bind:alt="slide.imgAlt" />
            </div>
            <div x-show="currentSlideIndex == index + 1" class="absolute inset-0" x-transition.opacity.duration.700ms>
                <h3 class="w-full text-balance text-2xl font-bold text-white lg:w-4/5 lg:text-3xl" x-text="slide.title" x-bind:aria-describedby="'slide' + (index + 1) + 'Description'"></h3>
                <img class="absolute inset-0 size-full object-cover text-neutral-600 dark:text-neutral-300" x-bind:src="slide.img" x-bind:alt="slide.imgAlt" />
            </div>
        </template>
    </div>
    
    <!-- indicators -->
    <div class="absolute bottom-3 left-1/2 z-20 flex -translate-x-1/2 gap-4 rounded-md bg-white/75 px-1.5 py-1 md:bottom-5 md:gap-3 md:px-2 dark:bg-neutral-950/75" role="group" aria-label="slides" >
        <template x-for="(slide, index) in slides">
            <button class="size-2 cursor-pointer rounded-full bg-neutral-600 transition dark:bg-neutral-300" x-on:click="currentSlideIndex = index + 1" x-bind:class="[currentSlideIndex === index + 1 ? 'bg-neutral-600 dark:bg-neutral-300' : 'bg-neutral-600/50 dark:bg-neutral-300/50']" x-bind:aria-label="'slide ' + (index + 1)"></button>
        </template>
    </div>
</div>

<script>
    var slides = JSON.parse('<?= json_encode($items); ?>');

    document.addEventListener('alpine:init', () => {
        Alpine.data('carousel', (carouselData = {
            slides: [],
        },) => ({
            slides: carouselData.slides,
            currentSlideIndex: 1,
            touchStartX: null,
            touchEndX: null,
            swipeThreshold: 50,
            previous() {
                if (this.currentSlideIndex > 1) {
                    this.currentSlideIndex = this.currentSlideIndex - 1
                } else {
                    // If it's the first slide, go to the last slide           
                    this.currentSlideIndex = this.slides.length
                }
            },
            next() {
                if (this.currentSlideIndex < this.slides.length) {
                    this.currentSlideIndex = this.currentSlideIndex + 1
                } else {
                    // If it's the last slide, go to the first slide    
                    this.currentSlideIndex = 1
                }
            },
            handleTouchStart(event) {
                this.touchStartX = event.touches[0].clientX
            },
            handleTouchMove(event) {
                this.touchEndX = event.touches[0].clientX
            },
            handleTouchEnd() {
                if (this.touchEndX){
                    if (this.touchStartX - this.touchEndX > this.swipeThreshold) {
                        this.next()
                    }
                    if (this.touchStartX - this.touchEndX < -this.swipeThreshold) {
                        this.previous()
                    }
                    this.touchStartX = null
                    this.touchEndX = null
                }
            },     
        }))
    })
</script>