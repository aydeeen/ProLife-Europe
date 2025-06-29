<?php
/**
 * Donation Form Block template.
 *
 * @param array $block The block settings and attributes.
 */

$id = NULL;
if ( ! empty( $block['anchor'] ) ) {
    $id = 'id="' . esc_attr( $block['anchor'] ) . '" ';
} 

$form_language_id = get_field('form_language_id');
?>

<section <?php echo $id; ?> class="bg-cream">
    <div class="main">
        <iframe src="https://secure.spendenbank.de/form/3372?langid=<?php echo esc_html( $form_language_id ) ?>" frameborder="0" width="100%" height="1313px" class="rounded-2xl"></iframe>
    </div>
</section>