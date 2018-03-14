<?php
/*
Widget Name: Stokk Tab-friend widget
Description: -
Author: Stokk.co Team
Author URI: http://stokk.co
*/

class Stokk_tabFriend_Widget extends SiteOrigin_Widget {
	function __construct() {

		parent::__construct(
			'stokk-tabfriend-widget',
			__('Stokk Tab-friend Widget', 'hello-world-widget-text-domain'),
			array(
				'description' => __('A Stokk Tab-friend widget.', 'hello-world-widget-text-domain'),
				'panels_groups' => array('stokk')
			),
			array(

			),
			array(
				'text' => array(
					'type' => 'text',
					'label' => __('Hello world! goes here.', 'hello-world-widget-text-domain'),
					'default' => 'Hello world!'
				),
			),
			plugin_dir_path(__FILE__)
		);
	}

	function get_template_name($instance) {
		return 'stokk-tabfriend-widget-template';
	}

	function get_style_name($instance) {
		return 'stokk-tabfriend-widget-style';
	}

}

siteorigin_widget_register('stokk-tabfriend-widget', __FILE__, 'Stokk_tabFriend_Widget');