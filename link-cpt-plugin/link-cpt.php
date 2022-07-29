<?php
/*
    Plugin Name: Link cpt plugin
    Description: A plugin that adds a link post type
    Author: Bailey Lievens
    Author URI: https://www.baileylievens.be/
    Version: 1.0.0
*/

//Function to create the custom box
function link_add_custom_box() {
        add_meta_box(
            'link_box_id',
            'Link URI',
            'link_custom_box_html',
            'links'
        );
}
add_action('add_meta_boxes', 'link_add_custom_box');

//Function to create how the box will look (Also retrieves data and shows it in case)
function link_custom_box_html($post) {
    $value = get_post_meta( $post->ID, '_link_meta_key', true );
    ?>
    <label for="link_field">Link URI</label>
    <input type="text" name="link_field" id="link_field" placeholder="https://www.EpicLink.com/" value="<?php echo($value); ?>">
    <?php
}


//Function to save the user input
function link_save_postdata($post_id) {
    if (array_key_exists('link_field', $_POST)) {
        update_post_meta(
            $post_id,
            '_link_meta_key',
            $_POST['link_field']
        );
    }
}
add_action( 'save_post', 'link_save_postdata' );

//Function to register cpt
function links_post_type() {
    register_post_type( 'links',
        array(
            'labels' => array(
                'name' => __( 'Links' ),
                'singular_name' => __( 'Link' )
            ),
            'description' => 'A post type containing a title and a link.',
            'public' => true,
            'show_in_rest' => true,
        'supports' => array('title'),
        'taxonomies' => array('category')
        )
    );
}
add_action('init', 'links_post_type');

?>