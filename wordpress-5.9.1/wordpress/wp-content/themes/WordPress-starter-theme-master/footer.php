<?php wp_footer(); ?>
<html lang="fr">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
<body>
<footer class="footer">
    <h1>Mes réseaux</h1>
    <div class="logo">
        <img class="linkedin" src="<?php bloginfo('template_url');?>/images/icons8-linkedin-48.png" alt="linkedin">
        <img class="facebook" src="<?php bloginfo('template_url');?>/images/icons8-facebook-96.png" alt="facebook">

    </div>
</footer>

<style>
    h1{
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 2rem;
        color: black;
    }
    .logo{
        display: flex;
    }
    .linkedin{
        display: flex;
        width: 5rem;
    }
    .facebook{
        display: flex;
        width: 5rem;

    }
    .footer{

        width: 100%;
        height: 20rem;
        
        bottom: 0;


        background-color: #145365;

    }
</style>


</body>
</html>
