<?php
	/**
	 * Welcome Page Initiation
	*/

	include get_stylesheet_directory() . '/inc/welcome/welcome.php';

	/** Plugins **/
	$th_plugins = array(
		// *** Companion Plugins
		'companion_plugins' => array(

			
		),

		// *** Displays on Import Demo section
		'req_plugins' => array(
			'access-demo-importer' => array(
					'slug' 		=> 'access-demo-importer',
					'name' 		=> esc_html__('Access Demo Importer', 'zigcy-baby'),
					'filename' 	=>'access-demo-importer.php',
					'host_type' => 'wordpress', // Use either bundled, remote, wordpress
					'class' 	=> 'Access_Demo_Importer',
					'location' 	=> get_template_directory().'/inc/welcome/plugins/access-demo-importer.zip',
					'info' 		=> esc_html__('Access Demo Importer adds the feature to Import the Demo Conent with a single click.', 'zigcy-baby'),
			),

		),

		//Displays on Required Plugins tab
		'required_plugins' => array(
			// Free Plugins
			'free_plugins' => array(
				'smart-slider-3' => array(
					'slug' 		=> 'smart-slider-3',
					'filename' 	=> 'smart-slider-3.php',
					'class' 	=> 'SmartSlider3',
				),

				'woocommerce' => array(
					'slug' 		=> 'woocommerce',
					'filename' 	=> 'woocommerce.php',
					'class' 	=> 'WooCommerce',
				),

				'yith-woocommerce-compare' => array(
					'slug' 		=> 'yith-woocommerce-compare',
					'filename' 	=> 'init.php',
					'class' 	=> 'YITH_Woocompare',
				),

				'yith-woocommerce-wishlist' => array(
					'slug' 		=> 'yith-woocommerce-wishlist',
					'filename' 	=> 'init.php',
					'class' 	=> 'YITH_WCWL',
				),

				'yith-woocommerce-quick-view' => array(
					'slug' 		=> 'yith-woocommerce-quick-view',
					'filename' 	=> 'init.php',
					'class' 	=> 'YITH_WCQV',
				),

				'mailchimp-for-wp' => array(
					'slug' 		=> 'mailchimp-for-wp',
					'filename' 	=> 'mailchimp-for-wp.php',
					'class' 	=> 'MC4WP_Plugin',
				),
			),
		),

		// *** Recommended Plugins
		'recommended_plugins' => array(
			// Free Plugins
			'free_plugins' => array(
				
			),

			// Pro Plugins
			'pro_plugins' => array(

			)
		),
	);

	$strings = array(
		// Welcome Page General Texts
		'welcome_menu_text' => esc_html__( 'Zigcy Baby Setup', 'zigcy-baby' ),
		'theme_short_description' => esc_html__( 'Zigcy Baby is a free eCommerce/WooCommerce child theme of Zigcy Lite which lets you create an online store in no time. The theme is perfect for selling baby products online or for creating any kind of kids related eCommerce sites. It is the most functional WordPress web shop theme integrated with powerful WooCommerce features. The theme has clean and sleek design with easy customization options. Besides, the theme includes additional header layout, categories promotion, attractive CTA forms and supports plugin’s shortcodes.', 'zigcy-baby' ),

		// Plugin Action Texts
		'install_n_activate' 	=> esc_html__('Install and Activate', 'zigcy-baby'),
		'deactivate' 			=> esc_html__('Deactivate', 'zigcy-baby'),
		'activate' 				=> esc_html__('Activate', 'zigcy-baby'),

		// Getting Started Section
		'doc_heading' 		=> esc_html__('Step 1 - Documentation', 'zigcy-baby'),
		'doc_description' 	=> esc_html__('Read the Documentation and follow the instructions to manage the site , it helps you to set up the theme more easily and quickly. The Documentation is very easy with its pictorial  and well managed listed instructions. ', 'zigcy-baby'),
		'doc_read_now' 		=> esc_html__( 'Read Now', 'zigcy-baby' ),
		'cus_heading' 		=> esc_html__('Step 2 - Customizer Panel', 'zigcy-baby'),
		'cus_description' 	=> esc_html__('Using the Zigcy Lite customizer panel you can easily customize every aspect of the theme.', 'zigcy-baby'),
		'cus_read_now' 		=> esc_html__( 'Go to Customizer Panels', 'zigcy-baby' ),

		// Recommended Plugins Section
		'pro_plugin_title' 			=> esc_html__( 'Premium Plugins', 'zigcy-baby' ),
		'free_plugin_title' 		=> esc_html__( 'Free Plugins', 'zigcy-baby' ),

		

		// Demo Actions
		'activate_btn' 		=> esc_html__('Activate', 'zigcy-baby'),
		'installed_btn' 	=> esc_html__('Activated', 'zigcy-baby'),
		'demo_installing' 	=> esc_html__('Installing Demo', 'zigcy-baby'),
		'demo_installed' 	=> esc_html__('Demo Installed', 'zigcy-baby'),
		'demo_confirm' 		=> esc_html__('Are you sure to import demo content ?', 'zigcy-baby'),

		// Actions Required
		'req_plugin_info' => esc_html__('All these required plugins will be installed and activated while importing demo. Or you can choose to install and activate them manually. If you\'re not importing any of the demos, you must install and activate these plugins manually.', 'zigcy-baby' ),
		'req_plugins_installed' => esc_html__( 'All Recommended action has been successfully completed.', 'zigcy-baby' ),
		'customize_theme_btn' 	=> esc_html__( 'Customize Theme', 'zigcy-baby' ),
	);

	/**
	 * Initiating Welcome Page
	*/
	$my_theme_wc_page = new Zigcy_Baby_Welcome( $th_plugins, $strings );


	