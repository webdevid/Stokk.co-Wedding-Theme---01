<?php

/*
Widget Name: Stokk Countdown widget
Description: -
Author: Stokk.co Team
Author URI: http://stokk.co
*/

class Stokk_Countdown_Widget extends SiteOrigin_Widget {
	function __construct() {

		parent::__construct(
			'stokk-countdown-widget',
			__('Stokk Countdown Widget', 'stokk-countdown-widget-text-domain'),
			array(
				'description' => __('A Stokk Countdown widget.', 'stokk-countdown-widget-text-domain'),
				'panels_groups' => array('stokk'),
				'has_preview' => false,
			),
			array(

			),
			array(
				'countdown' => array(
					'type' => 'text',
					'label' => __('year/month/date', 'stokk-countdown-widget-text-domain'),
					'default' => '2020/05/22'
				),
			),
			plugin_dir_path(__FILE__)
		);
	}

	function get_template_name($instance) {
		return 'stokk-countdown-widget-template';
	}

	function get_style_name($instance) {
		return 'stokk-countdown-widget-style';
	}

}

siteorigin_widget_register('stokk-countdown-widget', __FILE__, 'Stokk_Countdown_Widget');