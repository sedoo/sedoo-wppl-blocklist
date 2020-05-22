<?php

function register_sedoo_blocklist_block_types() {

    // register a testimonial block.
    acf_register_block_type(array(
        'name'              => 'sedoo_blocklist',
        'title'             => __('Sedoo Liste de block'),
        'description'       => __('Ajoute une liste de blocs'),
        'render_callback'   => 'sedoo_blocklist_render_callback',
        'enqueue_style'     => plugin_dir_url( __FILE__ ) . 'template-parts/blocklist/blocklist.css',
        'category'          => 'sedoo-block-category',
        'icon'              => 'editor-justify',
        'keywords'          => array( 'blocklist', 'sedoo', 'block', 'bloc' ),
    ));
}

// Check if function exists and hook into setup.
if( function_exists('acf_register_block_type') ) {
    add_action('acf/init', 'register_sedoo_blocklist_block_types');
}