<?php

/*
Widget Name: Stokk Tab-profile widget
Description: -
Author: Stokk.co Team
Author URI: http://stokk.co
*/

class Stokk_tabProfile_Widget extends SiteOrigin_Widget {
	function __construct() {

		parent::__construct(
			'stokk-tabprofile-widget',
			__('Stokk Tab-Profile Widget', 'stokk-tabprofile-widget-text-domain'),
			array(
				'description' => __('A Stokk Tab-profile widget.', 'stokk-tabprofile-widget-text-domain'),
				'panels_groups' => array('stokk')
			),
			array(

			),
			array(
				'text' => array(
					'type' => 'text',
					'label' => __('Hello world! goes here.', 'stokk-tabprofile-widget-text-domain'),
					'default' => 'Hello world!'
				),
			),
			plugin_dir_path(__FILE__)
		);
	}

	function get_template_name($instance) {
		return 'stokk-tabprofile-widget-template';
	}

	function get_style_name($instance) {
		return 'stokk-tabprofile-widget-style';
	}

}

siteorigin_widget_register('stokk-tabprofile-widget', __FILE__, 'Stokk_tabProfile_Widget');