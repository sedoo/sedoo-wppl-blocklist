<?php 
if( function_exists('acf_add_local_field_group') ):

	acf_add_local_field_group(array(
		'key' => 'group_5ec4022eb199b',
		'title' => 'blocklist',
		'fields' => array(
			array(
				'key' => 'field_5ec402337a2bd',
				'label' => 'Titre de la zone',
				'name' => 'titre_de_la_zone',
				'type' => 'text',
				'instructions' => 'Pas affiché si vide.',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_5ec4023c7a2be',
				'label' => 'Prefix des blocs',
				'name' => 'prefix_des_blocs',
				'type' => 'text',
				'instructions' => 'Les majuscules ne sont pas prises en comptes.',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'block',
					'operator' => '==',
					'value' => 'acf/sedoo-blocklist',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
	));
	
	endif;
?>