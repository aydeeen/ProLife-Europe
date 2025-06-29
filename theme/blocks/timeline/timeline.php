<?php
/**
 * Timeline Block template.
 *
 * @param array $block The block settings and attributes.
 */

$id = NULL;
if ( ! empty( $block['anchor'] ) ) {
    $id = 'id="' . esc_attr( $block['anchor'] ) . '" ';
} 

$title       = get_field('title');
$image_1     = get_field('image_1');
$image_2     = get_field('image_2');
$image_3     = get_field('image_3');
$image_4     = get_field('image_4');
$box_1_icon  = get_field('box_1_icon');
$box_1_title = get_field('box_1_title');
$box_1_text  = get_field('box_1_text');
$box_2_icon  = get_field('box_2_icon');
$box_2_title = get_field('box_2_title');
$box_2_text  = get_field('box_2_text');
$box_3_icon  = get_field('box_3_icon');
$box_3_title = get_field('box_3_title');
$box_3_text  = get_field('box_3_text');
$box_4_icon  = get_field('box_4_icon');
$box_4_title = get_field('box_4_title');
$box_4_text  = get_field('box_4_text');
$box_5_icon  = get_field('box_5_icon');
$box_5_title = get_field('box_5_title');
$box_5_text  = get_field('box_5_text');
$box_6_icon  = get_field('box_6_icon');
$box_6_title = get_field('box_6_title');
$box_6_text  = get_field('box_6_text');
?>

<section <?php echo $id; ?> class="bg-brown">
    <div class="main grid ~gap-y-60px/110px ~pt-60px/130px ~pb-60px/44">
        <h2 class="font-bold text-cream -tracking-2 ~text-4xl/54 ~leading-9/54 text-center [&_span]:text-orange"><?php echo wp_kses_post( $title ); ?></h2>
        <div class="grid-cols-[1fr_auto_1fr] hidden md:grid md:~gap-10/20">
            <div class="ml-auto">
                <div class="p-6 bg-[#FFFAF0] rounded-2xl max-w-[360px] ~md:~mb-10/44" x-data="{ shown: false }" x-intersect.once="shown = true" :class="shown ? 'opacity-100 transition-all transform translate-y-0 duration-1000' : 'opacity-0 transform translate-y-10'">
                    <?php echo wp_get_attachment_image( $box_1_icon, 'full', false, [ 'class' => 'mb-6' ] ); ?>
                    <h3 class="text-2xl font-bold text-body/[90%] mb-2 -tracking-1"><?php echo esc_html( $box_1_title ); ?></h3>
                    <p class="text-body/[70%]"><?php echo esc_html( $box_1_text ); ?></p>
                </div>
                <div class="mb-6 xl:-translate-x-28" x-data="{ shown: false }" x-intersect.once="shown = true" :class="shown ? 'opacity-100 transition-all translate-y-0 duration-1000 delay-300' : 'opacity-0 transform translate-y-10'">
                    <?php echo wp_get_attachment_image( $image_2, 'full', false ); ?>
                </div>
                <div class="p-6 bg-[#FFFAF0] rounded-2xl max-w-[360px] ~md:~mb-10/96" x-data="{ shown: false }" x-intersect.once="shown = true" :class="shown ? 'opacity-100 transition-all translate-y-0 duration-1000 delay-200' : 'opacity-0 transform translate-y-10'">
                    <?php echo wp_get_attachment_image( $box_3_icon, 'full', false, [ 'class' => 'mb-6' ] ); ?>
                    <h3 class="text-2xl font-bold text-body/[90%] mb-2 -tracking-1"><?php echo esc_html( $box_3_title ); ?></h3>
                    <p class="text-body/[70%]"><?php echo esc_html( $box_3_text ); ?></p>
                </div>
                <div class="p-6 bg-[#FFFAF0] rounded-2xl max-w-[360px] ~md:~mb-10/24" x-data="{ shown: false }" x-intersect.once="shown = true" :class="shown ? 'opacity-100 transition-all translate-y-0 duration-1000 delay-500' : 'opacity-0 transform translate-y-10'">
                    <?php echo wp_get_attachment_image( $box_5_icon, 'full', false, [ 'class' => 'mb-6' ] ); ?>
                    <h3 class="text-2xl font-bold text-body/[90%] mb-2 -tracking-1"><?php echo esc_html( $box_5_title ); ?></h3>
                    <p class="text-body/[70%]"><?php echo esc_html( $box_5_text ); ?></p>
                </div>
                <div class="p-6 bg-[#FFFAF0] rounded-2xl max-w-[360px]" x-data="{ shown: false }" x-intersect.once="shown = true" :class="shown ? 'opacity-100 transition-all translate-y-0 duration-1000 delay-[600ms]' : 'opacity-0 transform translate-y-10'">
                    <?php echo wp_get_attachment_image( $box_6_icon, 'full', false, [ 'class' => 'mb-6' ] ); ?>
                    <h3 class="text-2xl font-bold text-body/[90%] mb-2 -tracking-1"><?php echo esc_html( $box_6_title ); ?></h3>
                    <p class="text-body/[70%]"><?php echo esc_html( $box_6_text ); ?></p>
                </div>
            </div>   
            <svg class="shrink-0 hidden md:block" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="28" height="1965" viewBox="0 0 28 1965">
                <image xlink:href="data:image/png;base64,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" x="0" y="0" width="28" height="1965"/>
            </svg>
            <div>
                <div class="~md:~mb-10/24" x-data="{ shown: false }" x-intersect.once="shown = true" :class="shown ? 'opacity-100 transition-all translate-y-0 duration-1000' : 'opacity-0 transform translate-y-10'">
                    <?php echo wp_get_attachment_image( $image_1, 'full', false ) ?>
                </div>
                <div class="p-6 bg-[#FFFAF0] rounded-2xl max-w-[360px] ~md:~mb-10/44" x-data="{ shown: false }" x-data="{ shown: false }" x-intersect.once="shown = true" :class="shown ? 'opacity-100 transition-all translate-y-0 duration-1000 delay-100' : 'opacity-0 transform translate-y-10'">
                    <?php echo wp_get_attachment_image( $box_2_icon, 'full', false, [ 'class' => 'mb-6' ] ); ?>
                    <h3 class="text-2xl font-bold text-body/[90%] mb-2 -tracking-1"><?php echo esc_html( $box_2_title ); ?></h3>
                    <p class="text-body/[70%]"><?php echo esc_html( $box_2_text ); ?></p>
                </div>
                <div class="mb-22px xl:translate-x-[272px]" x-data="{ shown: false }" x-intersect.once="shown = true" :class="shown ? 'opacity-100 transition-all translate-y-0 duration-1000 delay-[400ms]' : 'opacity-0 transform translate-y-10'">
                    <?php echo wp_get_attachment_image( $image_3, 'full', false ); ?>
                </div>
                <div class="p-6 bg-[#FFFAF0] rounded-2xl max-w-[360px] ~md:~mb-10/100px" x-data="{ shown: false }" x-intersect.once="shown = true" :class="shown ? 'opacity-100 transition-all translate-y-0 duration-1000 delay-[400ms]' : 'opacity-0 transform translate-y-10'">
                    <?php echo wp_get_attachment_image( $box_4_icon, 'full', false, [ 'class' => 'mb-6' ] ); ?>
                    <h3 class="text-2xl font-bold text-body/[90%] mb-2 -tracking-1"><?php echo esc_html( $box_4_title ); ?></h3>
                    <p class="text-body/[70%]"><?php echo esc_html( $box_4_text ); ?></p>
                </div>
                <div x-data="{ shown: false }" x-intersect.once="shown = true" :class="shown ? 'opacity-100 transition-all translate-y-0 duration-1000 delay-500' : 'opacity-0 transform translate-y-10'">
                    <?php echo wp_get_attachment_image( $image_4, 'full', false ); ?>
                </div>
            </div>   
        </div>
        <div class="grid justify-center gap-10 md:hidden">
            <div class="p-6 bg-[#FFFAF0] rounded-2xl max-w-[360px] mx-auto" x-data="{ shown: false }" x-intersect.once="shown = true" :class="shown ? 'opacity-100 transition-all translate-y-0 duration-1000' : 'opacity-0 transform translate-y-10'">
                <?php echo wp_get_attachment_image( $box_1_icon, 'full', false, [ 'class' => 'mb-6' ] ); ?>
                <h3 class="text-2xl font-bold text-body/[90%] mb-2 -tracking-1"><?php echo esc_html( $box_1_title ); ?></h3>
                <p class="text-body/[70%]"><?php echo esc_html( $box_1_text ); ?></p>
            </div>
            <div class="mx-auto" x-data="{ shown: false }" x-intersect.once="shown = true" :class="shown ? 'opacity-100 transition-all translate-y-0 duration-1000' : 'opacity-0 transform translate-y-10'">
                <?php echo wp_get_attachment_image( $image_1, 'full', false ); ?>
            </div>
            <div class="p-6 bg-[#FFFAF0] rounded-2xl max-w-[360px] mx-auto" x-data="{ shown: false }" x-intersect.once="shown = true" :class="shown ? 'opacity-100 transition-all translate-y-0 duration-1000' : 'opacity-0 transform translate-y-10'">
                <?php echo wp_get_attachment_image( $box_2_icon, 'full', false, [ 'class' => 'mb-6' ] ); ?>
                <h3 class="text-2xl font-bold text-body/[90%] mb-2 -tracking-1"><?php echo esc_html( $box_2_title ); ?></h3>
                <p class="text-body/[70%]"><?php echo esc_html( $box_2_text ); ?></p>
            </div>
            <div class="p-6 bg-[#FFFAF0] rounded-2xl max-w-[360px] mx-auto" x-data="{ shown: false }" x-intersect.once="shown = true" :class="shown ? 'opacity-100 transition-all translate-y-0 duration-1000' : 'opacity-0 transform translate-y-10'">
                <?php echo wp_get_attachment_image( $box_3_icon, 'full', false, [ 'class' => 'mb-6' ] ); ?>
                <h3 class="text-2xl font-bold text-body/[90%] mb-2 -tracking-1"><?php echo esc_html( $box_3_title ); ?></h3>
                <p class="text-body/[70%]"><?php echo esc_html( $box_3_text ); ?></p>
            </div>
            <div class="mx-auto" x-data="{ shown: false }" x-intersect.once="shown = true" :class="shown ? 'opacity-100 transition-all translate-y-0 duration-1000' : 'opacity-0 transform translate-y-10'">
                <?php echo wp_get_attachment_image( $image_2, 'full', false ); ?>
            </div>
            <div class="mx-auto" x-data="{ shown: false }" x-intersect.once="shown = true" :class="shown ? 'opacity-100 transition-all translate-y-0 duration-1000' : 'opacity-0 transform translate-y-10'">
                <?php echo wp_get_attachment_image( $image_3, 'full', false ); ?>
            </div>
            <div class="p-6 bg-[#FFFAF0] rounded-2xl max-w-[360px] mx-auto" x-data="{ shown: false }" x-intersect.once="shown = true" :class="shown ? 'opacity-100 transition-all translate-y-0 duration-1000' : 'opacity-0 transform translate-y-10'">
                <?php echo wp_get_attachment_image( $box_4_icon, 'full', false, [ 'class' => 'mb-6' ] ); ?>
                <h3 class="text-2xl font-bold text-body/[90%] mb-2 -tracking-1"><?php echo esc_html( $box_4_title ); ?></h3>
                <p class="text-body/[70%]"><?php echo esc_html( $box_4_text ); ?></p>
            </div>
            <div class="p-6 bg-[#FFFAF0] rounded-2xl max-w-[360px] mx-auto" x-data="{ shown: false }" x-intersect.once="shown = true" :class="shown ? 'opacity-100 transition-all translate-y-0 duration-1000' : 'opacity-0 transform translate-y-10'">
                <?php echo wp_get_attachment_image( $box_5_icon, 'full', false, [ 'class' => 'mb-6' ] ); ?>
                <h3 class="text-2xl font-bold text-body/[90%] mb-2 -tracking-1"><?php echo esc_html( $box_5_title ); ?></h3>
                <p class="text-body/[70%]"><?php echo esc_html( $box_5_text ); ?></p>
            </div>
            <div class="mx-auto" x-data="{ shown: false }" x-intersect.once="shown = true" :class="shown ? 'opacity-100 transition-all translate-y-0 duration-1000' : 'opacity-0 transform translate-y-10'">
                <?php echo wp_get_attachment_image( $image_4, 'full', false ); ?>
            </div>
            <div class="p-6 bg-[#FFFAF0] rounded-2xl max-w-[360px] mx-auto" x-data="{ shown: false }" x-intersect.once="shown = true" :class="shown ? 'opacity-100 transition-all translate-y-0 duration-1000' : 'opacity-0 transform translate-y-10'">
                <?php echo wp_get_attachment_image( $box_6_icon, 'full', false, [ 'class' => 'mb-6' ] ); ?>
                <h3 class="text-2xl font-bold text-body/[90%] mb-2 -tracking-1"><?php echo esc_html( $box_6_title ); ?></h3>
                <p class="text-body/[70%]"><?php echo esc_html( $box_6_text ); ?></p>
            </div>
        </div>
    </div> 
</section>