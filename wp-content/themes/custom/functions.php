<?php
function register_foods_post_type() {
    $labels = array(
        'name' => 'Foods',
        'singular_name' => 'Food',
        'menu_name' => 'Foods',
        'all_items' => 'All Foods',
        'add_new' => 'Add New',
        'add_new_item' => 'Add New Food',
        'edit_item' => 'Edit Food',
        'new_item' => 'New Food',
        'view_item' => 'View Food',
        'search_items' => 'Search Foods',
        'not_found' => 'No foods found',
        'not_found_in_trash' => 'No foods found in trash',
        'parent_item_colon' => '',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-carrot',
        'supports' => array(
            'title',
            'editor',
            'thumbnail',
            'excerpt',
            'custom-fields',
            'comments',
        ),
        'rewrite' => array('slug' => 'foods'),
        'taxonomies' => array('food_groups'),
    );

    register_post_type('foods', $args);
}
add_action('init', 'register_foods_post_type');

function register_food_groups_taxonomy() {
    $labels = array(
        'name' => 'Food Groups',
        'singular_name' => 'Food Group',
        'menu_name' => 'Food Groups',
        'all_items' => 'All Food Groups',
        'edit_item' => 'Edit Food Group',
        'view_item' => 'View Food Group',
        'update_item' => 'Update Food Group',
        'add_new_item' => 'Add New Food Group',
        'new_item_name' => 'New Food Group Name',
        'search_items' => 'Search Food Groups',
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'rewrite' => array('slug' => 'food-group'),
    );

    register_taxonomy('food_groups', 'foods', $args);
}
add_action('init', 'register_food_groups_taxonomy');

function add_food_groups_terms() {
    wp_insert_term('Carbohydrates', 'food_groups', array());
    wp_insert_term('Proteins', 'food_groups', array());
    wp_insert_term('Vitamins', 'food_groups', array());
}
add_action('init', 'add_food_groups_terms');


function food_post_meta() {
    $author_id = get_the_author_meta( 'ID' );
    $author_url = esc_url( get_author_posts_url( $author_id ) );
    $author_name = get_the_author();
    $post_date = get_the_date();
    $categories_list = get_the_category_list( ', ' );

    printf(
        __( 'Posted by <a href="%1$s">%2$s</a> on %3$s in %4$s', 'food-theme' ),
        $author_url,
        $author_name,
        $post_date,
        $categories_list
    );
}
// Once the custom post type and taxonomies have been registered, you can create new foods posts by going to the WordPress dashboard and clicking on "Foods" in the left-hand menu. You can then add a title, thumbnail, and description to the food post, and categorize it by assigning one or more food group taxonomies (carbohydrates, proteins, or vitamins).

?>