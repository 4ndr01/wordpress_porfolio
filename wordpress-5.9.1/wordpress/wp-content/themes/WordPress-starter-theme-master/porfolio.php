<?php /* Template Name: porfolio*/?>

<?php get_header();?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
<body>
<header>



    <h1 class="name">Marvin HOGUET</h1>
    <div class="page">
        <button  onclick="window.location.href='http://localhost/wordpress-5.9.1/wordpress/contact/'" class="button is-info is-outlined">Me contacter</button>
        <button  onclick="window.location.href='http://localhost/wordpress-5.9.1/wordpress/mon-parcours/'" class="button is-info is-outlined">Mon parcours</button>

    </div>
<div>
    <img class="profil" src="<?php bloginfo('template_url');?>/images/dak07bc-61b845fb-7fef-4ee3-bb2e-446ad37428ee.jpg">
</div>




</header>

<?php if(have_rows('logo')) : ?>
    <?php while (have_rows('logo')) : the_row() ?>
        <h1 class="competence">Mes compétences</h1>
<div class="logo">
<img src=" <?php the_sub_field('js'); ?> ">
<img src="<?php the_sub_field('html'); ?>">
<img src="<?php the_sub_field('python'); ?>">
<img src="<?php the_sub_field('php'); ?>">
</div>
    <?php endwhile; ?>
<?php else : ?>
<?php endif; ?>

</body>




<?php get_footer() ?>





<style>

    .profil{
        border-radius: 0.5rem;
        margin-left: 41rem;
    }
    .logo{
        display: flex;
        justify-content: center;
        align-items: center;
        padding-top: 5rem;
    }
    header{
        background-image: url(<?php bloginfo('template_url');?>/images/header.webp);


    }
    img{
        width: 13rem;
    }

    .name{
        display: flex;
        justify-content: center;
        align-items: center;
        font-weight: bold;
        font-size: 1.5rem;

    }
    .competence{
        display: flex;
        justify-content: center;
        font-size: 2rem;
        font-weight: bold;
    }
    .button{
        display: flex;
        justify-content: center;
        align-items: center;

    }




</style>




