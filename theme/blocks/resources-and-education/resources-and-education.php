<?php
/**
 * Resources and Education Block template.
 *
 * @param array $block The block settings and attributes.
 */

$id = NULL;
if ( ! empty( $block['anchor'] ) ) {
    $id = 'id="' . esc_attr( $block['anchor'] ) . '" ';
} 

$bg_image        = get_field('bg_image');
$resources_title = get_field('resources_title');
$education_title = get_field('education_title');
?>

<section <?php echo $id; ?> class="bg-cover bg-center bg-no-repeat" style="background-image:url( <?php echo esc_url( $bg_image ); ?>)">
    <div class="main ~pt-60px/100px ~pb-60px/138px">
        <h2 class="text-body/[90%] font-bold -tracking-2 ~text-4xl/54 ~leading-9/60 ~mb-30px/20"><?php echo esc_html( $resources_title ); ?></h2>
        <?php if ( have_rows('resources') ): ?>
            <div class="grid [@media(min-width:800px)]:grid-cols-2 ~gap-5/10 ~mb-60px/40">
                <?php while ( have_rows('resources') ): the_row(); 
                    $title  = get_sub_field('title');
                    $text   = get_sub_field('text');
                    $button = get_sub_field('button');
                    $image  = get_sub_field('image');
                    ?>
                        <div class="grid sm:grid-cols-2 items-center bg-[#FFFAF0] rounded-2xl">
                            <div class="h-full flex flex-col ~p-5/8">
                                <h3 class="text-2xl text-body/[90%] font-bold mb-3 leading-7"><?php echo esc_html( $title ); ?></h3>
                                <p class="text-body/[70%] ~mb-5/8"><?php echo esc_html( $text ); ?></p>
                                <a class="btn mt-auto" href="<?php echo esc_url( $button['url'] ); ?>" role="button" target="<?php echo esc_attr( $button['target'] ? $button['target'] : '_self' ); ?>">
                                    <?php echo esc_html( $button['title'] ); ?>
                                </a>
                            </div>
                            <div class="w-full h-full">
                                <?php echo wp_get_attachment_image( $image, 'full', false, [ 'class' => 'w-full h-full object-cover aspect-video object-cover max-h-[200px] sm:max-h-[none]' ] ); ?>
                            </div>
                        </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
        <h2 class="text-body/[90%] font-bold -tracking-2 ~text-4xl/54 ~leading-9/60 ~mb-30px/20 text-center"><?php echo esc_html( $education_title ); ?></h2>
        <?php if ( have_rows('education_items') ): ?>
            <div class="max-w-960px mx-auto grid md:grid-cols-2 gap-y-5 ~md:~gap-x-5/10">
                <?php while ( have_rows('education_items') ): the_row(); 
                    $title  = get_sub_field('title');
                    $button = get_sub_field('button');
                    $image  = get_sub_field('image');
                    ?>
                        <div class="p-6 bg-[#FFFAF0] rounded-2xl grid justify-items-start">
                            <?php echo wp_get_attachment_image( $image, 'full', false, [ 'class' => 'w-full aspect-video object-cover mb-6' ] ); ?>
                            <h3 class="text-2xl text-body/[90%] font-bold mb-6 md:min-h-16"><?php echo esc_html( $title ); ?></h3>
                            <a class="btn mt-auto" href="<?php echo esc_url( $button['url'] ); ?>" role="button" target="<?php echo esc_attr( $button['target'] ? $button['target'] : '_self' ); ?>">
                                <?php echo esc_html( $button['title'] ); ?>
                            </a>
                        </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</section>