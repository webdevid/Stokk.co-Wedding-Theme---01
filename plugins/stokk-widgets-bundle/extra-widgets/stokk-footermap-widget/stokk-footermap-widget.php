<?php

/*
Widget Name: Stokk FooterMap widget
Description: -
Author: Stokk.co Team
Author URI: http://stokk.co 
*/

class Stokk_FooterMap_Widget extends SiteOrigin_Widget {
	function __construct() {

		parent::__construct(
			'stokk-footermap-widget',
			__('Stokk Footer Map Widget', 'footer-map-widget-text-domain'),
			array(
				'description' => __('A Stokk Footer Map widget.', 'footer-map-widget-text-domain'),
				'panels_groups' => array('stokk')
			),
			array(),
			false,
			plugin_dir_path(__FILE__)
		);
	}

	function get_widget_form(){
		return array(
			'loc_gmap_key' => array(
				'type' => 'text',
				'label' => __('Google Maps API Key', 'so-widgets-bundle'),
				'default' => 'AIzaSyAl-EDTJ5_uU3zBIX7-wNTu-qSZr1DO5Dw'
			),
			'location' => array(
				'type' => 'repeater',
				'label' => __('Location Map', 'so-widgets-bundle'),
				'item_name'  => __( 'Location ', 'so-widgets-bundle' ),
				'item_label' => array(
					'selector'     => "[name*='loc_title']",
					'update_event' => 'change',
					'value_method' => 'val'
				),
				'fields' => array(
					'loc_image' => array(
						'type' => 'media',
						'label' => __('BackgroundImage', 'so-widgets-bundle'),
						'library' => 'image',
						'fallback' => true,
					),
					'loc_icon' => array(
						'type' => 'icon',
						'label' => __('Select an icon', 'widget-form-fields-text-domain'),
					),
					'loc_title' => array(
						'type' => 'text',
						'label' => __('Title', 'so-widgets-bundle'),
						'default' => 'Wedding Ceremony - Bondi Beach'
					),
					'loc_latitude' => array(
						'type' => 'text',
						'label' => __('latitude', 'so-widgets-bundle'),
						'default' => '-33.890542'
					),
					'loc_longitude' => array(
						'type' => 'text',
						'label' => __('longitude', 'so-widgets-bundle'),
						'default' => '151.274856'
					),
				)
			),

			'display' => array(
				'type' => 'section',
				'label' => __('Display', 'so-widgets-bundle'),
				'fields' => array(
					'bg_image' => array(
						'type' => 'media',
						'label' => __('Background Image', 'so-widgets-bundle'),
						'library' => 'image',
						'fallback' => true,
					),
					'logo_image' => array(
						'type' => 'media',
						'label' => __('Footer logo', 'so-widgets-bundle'),
						'library' => 'image',
						'fallback' => true,
					),
				)
			)
		);
	}

	function stokk_src_image($instance){
		if ( function_exists( 'wp_get_attachment_image_srcset' ) ) {
			$srcset = wp_get_attachment_image_src( $instance,$instance['size']);
			return $srcset;
		}else{
			return $instance;
		} 
	}

	function get_template_variables( $instance, $args ) {
		$images = isset( $instance['images'] ) ? $instance['images'] : array();
		$title = isset ( $instance['images_title'] ) ? $instance['images_title'] : array();
		
		foreach ( $images as $image ) {
			$link_atts = empty( $image['link_attributes'] ) ? array() : $image['link_attributes'];
			if ( ! empty( $image['new_window'] ) ) {
				$link_atts['target'] = '_blank';
				$link_atts['rel'] = 'noopener noreferrer';
			}
			$image['link_attributes'] = $link_atts;

		}

		return array(
			'bg_image' => $this->stokk_src_image($instance['display']['bg_image'])[0],
			'logo_image' => $this->stokk_src_image($instance['display']['logo_image'])[0],
			'locations' => array(
				'loc_gmap_key' => $instance['loc_gmap_key'],
				'locations' => $instance['location'],
			),
		);
	}

	function get_template_name($instance) {
		return 'stokk-footermap-widget-template';
	}

	function get_style_name($instance) {
		return 'stokk-footermap-widget-style';
	}

}

siteorigin_widget_register('stokk-footermap-widget', __FILE__, 'Stokk_FooterMap_Widget');