

<?php $args = array(
    'post_type' => 'parcours',
    'posts_per_page' => -1,
    'orderby' => 'menu_order',
    'order' => 'ASC',
    'post_status' => 'publish'
);
    ?>
    <?php $the_query = new WP_Query($args); ?>