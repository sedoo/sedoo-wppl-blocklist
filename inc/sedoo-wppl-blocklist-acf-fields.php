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
			array(
				'key' => 'field_5ec408a23a211',
				'label' => 'Affichage',
				'name' => 'sedoo_blocklist_display',
				'type' => 'radio',
				// 'instructions' => 'Le mode annuaire marche uniquement si les noms de familles sont avant les prénoms',
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'choices' => array(
					'list' => 'Liste'
				//	'anuaire' => 'Annuaire'
				),
				'allow_null' => 0,
				'other_choice' => 0,
				'default_value' => 'list',
				'layout' => 'horizontal',
				'return_format' => 'value',
				'save_other_choice' => 0,
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