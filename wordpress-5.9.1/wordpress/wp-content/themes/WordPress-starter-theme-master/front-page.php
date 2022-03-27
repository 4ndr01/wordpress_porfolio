<?php get_header() ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">

    <header>

    </header>

    <main></main>

    <style>

        .nav ul {
            display: flex;

            justify-content: space-around;


        }

        .nav ul a {
            font-weight: bold;
        }

        .nav ul li {
            list-style-type: none;

        }

        .akali {
            border-radius: 0.5rem;
        }

        .current-menu-item a {
            color: #0e7b17;
        }
    </style>


<?php
$args = array(
    'post_type' => 'premier_projet',
    'posts_per_page' => -1,
    'orderby' => 'menu_order',
    'order' => 'ASC',
    'post_status' => 'publish'
);

?>

<?php $the_query = new WP_Query($args); ?>

<?php if ($the_query->have_posts()) : ?>
    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

        <div>
            <?php the_title() ?>
            <img src="<?php the_field('image_illustration_2'); ?>" alt="">

            <img class="akali" src="<?php the_field('image_illustration'); ?>" alt="">

        </div>

        <?php if (get_the_terms(get_the_ID(), 'sujet')): ?>
        <div>
            <?php foreach (get_the_terms(get_the_ID(), 'sujet') as $tax) : ?>

                <a class="formationCard__content_categories_category"><?php echo get_term_link($tax->term_id) ?>
                    <?php echo $tax->name;?>
                </a>
                </div>
                <div class="categorie">
                <?php $terms = get_terms(array(
                    'taxonomy'=> 'post_tag',
                    'hide_empty'=> false,
                ))?>
                </div>
            <?php endforeach; ?>


        <?php endif; ?>

    <?php endwhile; ?>
<?php endif; ?>


<?php wp_reset_query(); ?>


<?php get_footer() ?>