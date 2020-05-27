<?php
global $wpdb;
// Create id attribute allowing for custom "anchor" value.
$id = 'sedoo_blocklist-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'sedoo_blocklist';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}
$titre = get_field('titre_de_la_zone');
$prefix = get_field('prefix_des_blocs');
$display = get_field('sedoo_blocklist_display');
$first_letter = "0";
?>
<section class="sedoo-blocklist <?php echo $className; ?>">
<?php if($titre) { ?>  <h2> <?php echo $titre; ?> </h2> <?php } ?>
    <?php 
        $resultats = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}posts WHERE post_type ='wp_block' AND post_title LIKE '$prefix%' ORDER BY post_title") ;
      //  var_dump($resultats);
        foreach ($resultats as $post) {
            if(substr(strtolower($post->post_title), 0, strlen($prefix)) == $prefix) {
                if($display == 'list') {
                ?>
                    <article id="post-<?php $post->ID; ?>" <?php post_class(); ?>>
                        <div class="entry-content sedoo_blocklist_content">
                            <?php echo $post->post_content; ?>
                        </div>
                    </article><!-- #post-->
                <?php 

                // reste à coder psk c'est casse couille j'aimerais trier par la premiere lettre du nom 
                } elseif($display == 'annuaire') {
                    ?>
                    <article id="post-<?php $post->ID; ?>" <?php post_class(); ?>>
                        <header class="entry-header">
                            <h3><a href="<?php echo $post->guid; ?>"><?php echo substr($post->post_title, strlen($prefix)); ?></a></h3>
                        </header><!-- .entry-header -->
                    </article><!-- #post-->
                    <?php 
                }
            }
        }
    ?>
</section>

