<?php get_header() ?>



    <header>
        <h1>Catégorie:<?php single_term_title()?></h1>
    </header>


<?php

$args = array(
    'post_type'=> 'formations',
    'tax_query'=> array(
        array(
            'taxonomy'=>'sujet',
            'field'=>'slug',
            'terms'=> single_term_title('', false)
        )
    ),
    'orderby'=>'title',
    'order'=> 'ASC'

);

 $the_query = new WP_Query($args); ?>

<?php if ($the_query->have_posts()) : ?>
    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

    <?php endwhile;
    endif;?>