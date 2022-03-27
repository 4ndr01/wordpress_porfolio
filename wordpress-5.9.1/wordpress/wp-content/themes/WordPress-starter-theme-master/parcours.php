<?php /* Template Name: parcours*/ ?>
<?php get_header(); ?>
<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title><?php the_title(); ?></title>

    <meta name="viewport"
          content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height"/>


</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
<body>
<header>


    <div class="page">
        <button onclick="window.location.href='http://localhost/wordpress-5.9.1/wordpress/contact/'"
                class="button is-info is-outlined">Me contacter
        </button>


</header>

<img class="rocket" src="<?php bloginfo('template_url'); ?>/images/Rocket.gif);?>">









<?php $args = array(
    'post_type' => 'parcours',
    'posts_per_page' => 3,
    'orderby' => 'menu_order',
    'order' => 'ASC',
    'post_status' => 'publish'
);
?>
<?php $the_query = new WP_Query($args)?>


<div class="contenue">
    <div class="grid">
        <?php if ($the_query->have_posts()) : ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>


<section class="section">
    <div class="container">
        <div class="content-section2">
            <div class="contenue-titre">


                <div class="competences">
                    <h2 class="titre">Mes projets</h2>

                    <img src=" <?php the_field('projet1'); ?> ">

                    <div class="trait"></div>
                    <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br> Blandit massa enim nec dui nunc mattis. Sed pulvinar proin gravida hendrerit lectus.</h2>
                </div>
            </div>
        </div>
    </div>
</section>
    <?php endwhile; ?>
    <?php endif; ?>

    </div>
</div>








<?php get_footer() ?>

<style>
    .titre{
        font-size: 2rem;
    }
    .competences{
        display: flex;
        flex-direction: row;
    }


    header {
        background-image: url(<?php bloginfo('template_url');?>/images/header.webp);
        height: 3rem;
        background-size: cover;
        background-repeat: no-repeat;


    }

    .rocket {
        margin-left: 30rem;
    }
</style>