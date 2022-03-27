<?php get_header() ?>



<header>
    <h1>Catégorie:<?php single_cat_title()?></h1>
</header>


<?php

$args = array(
        'post_type'=> 'formations',
        'tax_query'=> array(
                array(
                        'taxonomy'=>'sujet',
                        'field'=>'slug',
                        'terms'=> 'SF'
                )
        ),
    'orderby'=>'title',
    'order'=> 'ASC'

);



?>




<?php get_footer() ?>
