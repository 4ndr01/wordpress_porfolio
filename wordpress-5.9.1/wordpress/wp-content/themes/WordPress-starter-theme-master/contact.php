
<?php /* Template Name: contact */ ?>

<?php get_header() ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
<header></header>

<style>
    body{
        background-image: url(<?php bloginfo('template_url');?>/images/header.webp);
        background-size: cover;
        height: 42.75rem
    }

    form{
       padding-left: 40rem;



    }
    p{
        color: red;
    }
    input{
        border-radius: 0.5rem;
        color: blue;
        width: 8rem;

    }

    .title{
        margin-left: 38rem;
        font-weight: bold;
    }

    textarea{
        width:230px;
        height:60px;
        border:2px dashed #D1C7AC;
    }
    input:invalid {
        border: 2px dashed red;
    }

    input:valid {
        border: 1px solid black;
    }




</style>

<main>
</main>
<h1 class="title">CONTACTEZ NOUS</h1>
<?php echo do_shortcode('[contact-form-7 id="58" title="Formulaire de contact 1"]')?>
<?php get_footer() ?>
