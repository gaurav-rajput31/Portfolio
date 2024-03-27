<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$color = (isset($settings['bab_bubbles_css_color'])) ? $settings['bab_bubbles_css_color'] : 'rgba(255, 255, 255, 0.6)';
?>
<div class="bab-floatingsquares-cont bab-elementor">
    <div class="bab-floatingsquares bab-floatingsquares-circle bab-trigger-el" data-color="<?php echo esc_attr($color); ?>">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </div>
</div>