<?php
/**
 * Thank You Block template.
 *
 * @param array $block The block settings and attributes.
 */

$id = NULL;
if ( ! empty( $block['anchor'] ) ) {
    $id = 'id="' . esc_attr( $block['anchor'] ) . '" ';
} 

$title           = get_field('title');
$subtitle        = get_field('subtitle');
$text_share      = get_field('text_share');
$text_donate     = get_field('text_donate');
$button          = get_field('button');
$share_shortcode = get_field('share_shortcode');
?>

<section <?php echo $id; ?> class="bg-orange">
    <div class="main ~py-60px/120px grid gap-5 justify-items-center">
        <h2 class="text-body text-2xl font-bold"><?php echo esc_html( $subtitle ); ?></h2>
        <h1 class="font-bold text-cream text-3xl -mt-5"><?php echo esc_html( $title ); ?></h1>
        <?php if ( $text_share ): ?>
            <p class="text-cream text-lg -mb-2"><?php echo esc_html( $text_share ); ?></p>
            <?php echo do_shortcode( $share_shortcode ); ?>
        <?php endif; ?>
        <p class="text-cream text-lg"><?php echo esc_html( $text_donate ); ?></p>
        <a class="btn w-fit" href="<?php echo esc_url( $button['url'] ); ?>" role="button" target="<?php echo esc_attr( $link['target'] ? $link['target'] : '_self' ); ?>">
            <?php echo esc_html( $button['title'] ); ?>
        </a>
    </div>
</section>