<?php

/**
 * Testimonial Block template.
 *
 * @param array $block The block settings and attributes.
 */

$quote             = !empty(get_field('quote')) ? get_field('quote') : 'Your quote here...';
$author            = get_field('author');
$quote_attribution = '';

if ($author) {
    $quote_attribution .= '<footer class="testimonial__attribution">';
    $quote_attribution .= '<cite class="testimonial__author">' . $author . '</cite>';



    $quote_attribution .= '</footer><!-- .testimonial__attribution -->';
}

// Support custom "anchor" values.
$anchor = '';
if (!empty($block['anchor'])) {
    $anchor = 'id="' . esc_attr($block['anchor']) . '" ';
}

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'testimonial';
if (!empty($block['className'])) {
    $class_name .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $class_name .= ' align' . $block['align'];
}


// Build a valid style attribute for background and text colors.
$style  = '';
?>

<div <?php echo esc_attr($anchor); ?>class="<?php echo esc_attr($class_name); ?>" style="<?php echo esc_attr($style); ?>">
    <div class="testimonial__col">
        <blockquote class="testimonial__blockquote">
            <?php echo esc_html($quote); ?>

            <?php if (!empty($quote_attribution)) : ?>
                <?php echo wp_kses_post($quote_attribution); ?>
            <?php endif; ?>
        </blockquote>
    </div>


</div>