<?php 

/*
Widget Name: Stokk RSVP widget
Description: -
Author: Stokk.co Team
Author URI: http://stokk.co
*/

class Stokk_Rsvp_Widget extends SiteOrigin_Widget {
	function __construct() {

		parent::__construct(
			'stokk-rsvp-widget',
			__('Stokk RSVP Widget', 'stokk-rsvp-widget-text-domain'),
			array(
				'description' => __('A Stokk RSVP widget.', 'stokk-rsvp-widget-text-domain'),
				'panels_groups' => array('stokk'),
				'has_preview' => false,
			),
			array(),
			false,
			
			plugin_dir_path(__FILE__)
		);
	}

	function get_widget_form(){
		return array(
			
			'rsvp_left' => array(
				'type' => 'section',
				'label' => __('RSVP Left', 'so-widgets-bundle'),
				'hide' => true,
				'fields' => array(
					'rsvp_icon' => array(
						'type' => 'media',
						'label' => __('Icon RSVP', 'so-widgets-bundle'),
						'library' => 'image',
						'fallback' => true,
					),
					'rsvp_title' => array(
						'type' => 'text',
						'label' => __('Title RSVP', 'so-widgets-bundle'),
						'default' => 'CEREMONY',
					),
					'rsvp_subtitle' => array(
						'type' => 'text',
						'label' => __('Subtitle RSVP', 'so-widgets-bundle'),
						'default' => 'Wedding',
					),
					'rsvp_content' => array(
						'type' => 'text',
						'label' => __('Content RSVP', 'so-widgets-bundle'),
						'default' => 'We ve got our foolproof tech tip to know EXACTLY how to bring more visitors. L',
					),
					'event_repeater' => array(
						'type' => 'repeater',
						'label' => __( 'Left Events' , 'widget-form-fields-text-domain' ),
						'item_name'  => __( 'Left Event item', 'siteorigin-widgets' ),
						'scroll_count' => 10,
						'item_label' => array(
							'selector'     => "[id*='event_repeater-event_title']",
							'update_event' => 'change',
							'value_method' => 'val'
						),'fields' => array(
							'event_title' => array(
								'type' => 'text',
								'label' => __('Title Content RSVP', 'so-widgets-bundle'),
								'default' => 'SAVANNAH RIVERBOOT CRUISES',
							),
							'event_desc' => array(
								'type' => 'text',
								'label' => __('Subtitle Content RSVP', 'so-widgets-bundle'),
								'default' => '9 E River St, Savannah, GA 31401, USA',
							),
							'event_icon' => array(
								'type' => 'media',
								'label' => __('Icon Content', 'so-widgets-bundle'),
								'library' => 'image',
								'fallback' => true,
							),
						)
					),
				)
			),
			'rsvp_right' => array(
				'type' => 'section',
				'label' => __('RSVP Right', 'so-widgets-bundle'),
				'hide' => true,
				'fields' => array(
					'rsvp_icon' => array(
						'type' => 'media',
						'label' => __('Icon RSVP', 'so-widgets-bundle'),
						'library' => 'image',
						'fallback' => true,
					),
					'rsvp_title' => array(
						'type' => 'text',
						'label' => __('Title RSVP', 'so-widgets-bundle'),
						'default' => 'RECEPTION',
					),
					'rsvp_subtitle' => array(
						'type' => 'text',
						'label' => __('Subtitle RSVP', 'so-widgets-bundle'),
						'default' => 'Wedding',
					),
					'rsvp_content' => array(
						'type' => 'text',
						'label' => __('Content RSVP', 'so-widgets-bundle'),
						'default' => 'We ve got our foolproof tech tip to know EXACTLY how to bring more visitors. R',
					),

					'event_repeater' => array(
						'type' => 'repeater',
						'label' => __( 'Right Events' , 'widget-form-fields-text-domain' ),
						'item_name'  => __( 'Right Event item', 'siteorigin-widgets' ),
						'scroll_count' => 10,
						'item_label' => array(
							'selector'     => "[id*='event_repeater-event_title']",
							'update_event' => 'change',
							'value_method' => 'val'
						),'fields' => array(
							'event_title' => array(
								'type' => 'text',
								'label' => __('Title Content RSVP', 'so-widgets-bundle'),
								'default' => 'SAVANNAH RIVERBOOT CRUISES',
							),
							'event_desc' => array(
								'type' => 'text',
								'label' => __('Subtitle Content RSVP', 'so-widgets-bundle'),
								'default' => '9 E River St, Savannah, GA 31401, USA',
							),
							'event_icon' => array(
								'type' => 'media',
								'label' => __('Icon Content', 'so-widgets-bundle'),
								'library' => 'image',
								'fallback' => true,
							),
						)
					),
				)
			),
			'button_link' => array(
				'type' => 'section',
				'label' => __('Button Link', 'so-widgets-bundle'),
				'hide' => true,
				'fields' => array(
					'caption' => array(
						'type' => 'text',
						'label' => __('Button Caption', 'so-widgets-bundle'),
						'default' => 'RSPV NOW'
					),
					'link' => array(
						'type' => 'link',
						'label' => __('Some URL goes here', 'widget-form-fields-text-domain'),
						'default' => 'http://www.example.com'
					),
				)
			),
			'background_image' => array(
				'type' => 'section',
				'label' => __('Background Image', 'so-widgets-bundle'),
				'hide' => true,
				'fields' => array(
					'rsvp_background' => array(
						'type' => 'media',
						'label' => __('Background RSVP', 'so-widgets-bundle'),
						'library' => 'image',
						'fallback' => true,
					),
				)
			), 
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

		

		return array(
			'rsvp_right' => array(
				'rsvp_title'=>$instance['rsvp_right']['rsvp_title'],
				'rsvp_icon'=>$this->stokk_src_image($instance['rsvp_right']['rsvp_icon']),
				'rsvp_subtitle'=>$instance['rsvp_right']['rsvp_subtitle'],
				'rsvp_content'=>$instance['rsvp_right']['rsvp_content'],
				
				'event'=>$instance['rsvp_right']['event_repeater'],
			),

			'rsvp_left' => array(
				'rsvp_title'=>$instance['rsvp_left']['rsvp_title'],
				'rsvp_icon'=>$this->stokk_src_image($instance['rsvp_left']['rsvp_icon']),
				'rsvp_subtitle'=>$instance['rsvp_left']['rsvp_subtitle'],
				'rsvp_content'=>$instance['rsvp_left']['rsvp_content'],
				
				'event'=>$instance['rsvp_left']['event_repeater'],
			),

			'button_link' => array(
				'link'=>$instance['button_link']['link'],
				'caption'=>$instance['button_link']['caption']
			),
			'background_image' => array(
				'rsvp_background'=>$this->stokk_src_image($instance['background_image']['rsvp_background']),
			)
		);
	}

	function get_template_name($instance) {
		return 'stokk-rsvp-widget-template';
	}

	function get_style_name($instance) {
		return 'stokk-rsvp-widget-style';
	}

}

siteorigin_widget_register('stokk-rsvp-widget', __FILE__, 'Stokk_Rsvp_Widget');