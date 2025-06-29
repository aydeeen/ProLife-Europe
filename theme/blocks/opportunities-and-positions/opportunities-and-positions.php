<?php
/**
 * Opportunities and Positions Block template.
 *
 * @param array $block The block settings and attributes.
 */

$id = NULL;
if ( ! empty( $block['anchor'] ) ) {
    $id = 'id="' . esc_attr( $block['anchor'] ) . '" ';
} 

$bg_image            = get_field('bg_image');
$opportunities_title = get_field('opportunities_title');
$opportunities_text  = get_field('opportunities_text');
$positions_title     = get_field('positions_title');
?>

<section <?php echo $id; ?> class="bg-cover bg-center bg-no-repeat" style="background-image:url( <?php echo esc_url( $bg_image ); ?>)">
    <div class="main ~pt-60px/100px ~pb-60px/150px">
        <h2 class="text-body/[90%] font-bold -tracking-2 ~text-4xl/54 ~leading-9/60 mb-3"><?php echo esc_html( $opportunities_title ); ?></h2>
        <p class="text-body/[90%] text-lg ~mb-10/52px"><?php echo esc_html( $opportunities_text ); ?></p>
        <?php if ( have_rows('opportunities') ): ?>
            <div class="max-w-960px mx-auto grid gap-6 ~mb-60px/40">
                <?php while ( have_rows('opportunities') ): the_row(); 
                    $position = get_sub_field('position');
                    $hours    = get_sub_field('hours');
                    $text     = get_sub_field('text');
                    $link     = get_sub_field('link');
                    $image    = get_sub_field('image');
                    ?>
                        <div class="grid md:grid-cols-[auto_auto] items-center ~gap-10/60px ~p-5/8 bg-[#FFFAF0] rounded-2xl">
                            <div class="">
                                <h3 class="text-2xl text-body/[90%] font-bold -mb-1">      
                                    <a href="<?php echo esc_url( $link['url'] ); ?>" target="<?php echo esc_attr( $link['target'] ? $link['target'] : '_self' ); ?>" class="hover:text-orange">
                                        <?php echo esc_html( $position ); ?>                               
                                    </a>
                                </h3>
                                <p class="text-2xl text-orange font-bold mb-4"><?php echo esc_html( $hours ); ?></p>
                                <p class="text-body/[70%] ~mb-5/8"><?php echo esc_html( $text ); ?></p>
                                <a class="btn" href="<?php echo esc_url( $link['url'] ); ?>" role="button" target="<?php echo esc_attr( $link['target'] ? $link['target'] : '_self' ); ?>">
                                    <?php echo esc_html( $link['title'] ? $link['title'] : 'Download job description' ); ?>
                                </a>
                            </div>
                            <div>
                                <a href="<?php echo esc_url( $link['url'] ); ?>" target="<?php echo esc_attr( $link['target'] ? $link['target'] : '_self' ); ?>">
                                    <?php echo wp_get_attachment_image( $image, 'full', false, [ 'class' => 'aspect-video object-cover' ] ); ?>                                
                                </a>
                            </div>
                        </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
        <h2 class="text-body/[90%] font-bold -tracking-2 ~text-4xl/54 ~leading-9/60 ~mb-10/52px"><?php echo esc_html( $positions_title ); ?></h2>
        <?php if ( have_rows('positions') ): ?>
            <div class="max-w-960px mx-auto grid gap-6">
                <?php while ( have_rows('positions') ): the_row(); 
                    $position = get_sub_field('position');
                    $text     = get_sub_field('text');
                    $link     = get_sub_field('link');
                    $image    = get_sub_field('image');
                    ?>
                        <div class="grid md:grid-cols-[auto_auto] items-center ~gap-10/60px ~p-5/8 bg-[#FFFAF0] rounded-2xl">
                            <div class="">
                                <h3 class="text-2xl text-body/[90%] font-bold mb-4">    
                                    <a href="<?php echo esc_url( $link['url'] ); ?>" target="<?php echo esc_attr( $link['target'] ? $link['target'] : '_self' ); ?>" class="hover:text-orange">
                                        <?php echo esc_html( $position ); ?>                               
                                    </a>
                                </h3>
                                <p class="text-body/[70%] ~mb-5/8"><?php echo esc_html( $text ); ?></p>
                                <a class="btn" href="<?php echo esc_url( $link['url'] ); ?>" role="button" target="<?php echo esc_attr( $link['target'] ? $link['target'] : '_self' ); ?>">
                                    <?php echo esc_html( $link['title'] ? $link['title'] : 'Download job description' ); ?>
                                </a>
                            </div>
                            <div>
                                <a href="<?php echo esc_url( $link['url'] ); ?>" target="<?php echo esc_attr( $link['target'] ? $link['target'] : '_self' ); ?>">
                                    <?php echo wp_get_attachment_image( $image, 'full', false, [ 'class' => 'aspect-video object-cover' ] ); ?>                                
                                </a>
                            </div>
                        </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</section>