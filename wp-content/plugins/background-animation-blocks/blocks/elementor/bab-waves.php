<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$f_color = (isset($settings['bab_waves_color']) && !empty($settings['bab_waves_color'])) ? $settings['bab_waves_color'] : 'rgba(255,200,255,0.7)';
$s_color = (isset($settings['bab_waves_color_s']) && !empty($settings['bab_waves_color_s'])) ? $settings['bab_waves_color_s'] : 'rgba(255,255,255,0.5)';
$t_color = (isset($settings['bab_waves_color_t']) && !empty($settings['bab_waves_color_t'])) ? $settings['bab_waves_color_t'] : 'rgba(255,255,255,0.3)';
$fo_color = (isset($settings['bab_waves_color_fo']) && !empty($settings['bab_waves_color_fo'])) ? $settings['bab_waves_color_fo'] : 'rgba(255,255,255,0.2)';
?>
<div class="bab-waves-cont bab-elementor">
	<svg class="bab-waves-cont-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
	     viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
		<defs>
			<path id="bab-gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
		</defs>
		<g class="bab-waves-cont-parallax bab-trigger-el" data-first="<?php echo esc_attr($f_color); ?>" data-second="<?php echo esc_attr($s_color); ?>" data-third="<?php echo esc_attr($t_color); ?>" data-fourth="<?php echo esc_attr($fo_color); ?>">
			<use xlink:href="#bab-gentle-wave" x="48" y="0" fill="<?php echo esc_attr($f_color); ?>" />
			<use xlink:href="#bab-gentle-wave" x="48" y="3" fill="<?php echo esc_attr($s_color); ?>" />
			<use xlink:href="#bab-gentle-wave" x="48" y="5" fill="<?php echo esc_attr($t_color); ?>" />
			<use xlink:href="#bab-gentle-wave" x="48" y="7" fill="<?php echo esc_attr($fo_color); ?>" />
		</g>
	</svg>
</div>