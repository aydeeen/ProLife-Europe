<?php
/**
 * Form Block template.
 *
 * @param array $block The block settings and attributes.
 */

$id = NULL;
if ( ! empty( $block['anchor'] ) ) {
    $id = 'id="' . esc_attr( $block['anchor'] ) . '" ';
} 

$form_shortcode = get_field('form_shortcode');
?>

<section <?php echo $id; ?> class="bg-orange">
    <div class="main ~py-60px/100px max-w-[700px] [&_form]:bg-cream [&_form]:flex [&_form]:flex-col [&_form]:gap-5 [&_form]:rounded-lg [&_form]:p-8 [&_form_.HBspalteL\_N]:mb-5 [&_form_:is(input,select,textarea)]:px-4 [&_form_:is(input:not(.wpcf7-submit),select,textarea)]:my-1.5 [&_form_:is(input,select,textarea)]:w-full [&_form_:is(input,select,textarea)]:py-2.5 [&_form_:is(input,select,textarea)]:rounded-md [&_form_.wpcf7-submit]:cursor-pointer [&_form_.wpcf7-submit]:text-cream [&_form_.wpcf7-submit]:bg-green [&_form_.wpcf7-submit:hover]:bg-green-dark [&_form_.wpcf7-list-item_input]:w-auto [&_form_.wpcf7-list-item_input]:mr-1.5 [&_form_.wpcf7-response-output]:m-0">
        <?php echo do_shortcode( $form_shortcode ); ?>
    <div/>
</section>


