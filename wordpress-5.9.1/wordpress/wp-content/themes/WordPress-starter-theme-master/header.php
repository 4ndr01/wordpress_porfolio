<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title><?php the_title(); ?></title>

    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height" />

    <?php wp_head(); ?>

</head>


<body <?php body_class(); ?>>
<?php

wp_nav_menu(
        array(
                'theme_location'=>'menu principal',
                   'container' => 'nav',
            'contaienr_class'=>'nav',
            'menu_class'=>'nav'
        )
);
?>