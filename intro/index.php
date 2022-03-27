<?php
$nbmsg = 222;
$inscription=10;
$date= new DateTime('2001/07/20');
$date2= new DateTime('2001/07/20');

$is_admin = true;
$is_male = false;
?>
<!DOCTYPE html>
<html>
<head>
    <title>Forum</title>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.css"/>
</head>
<body>

<h1>Mon forum</h1>
<!-- Code temporaire à supprimer avant la mise en ligne -->
<fieldset>
    <legend>Badges disponibles</legend>
    <i class="fa fa-2x fa-border fa-user-secret" title="Administrateur"></i>
    <i class="fa fa-2x fa-border fa-birthday-cake" title="Anniversaire"></i>
    <i class="fa fa-2x fa-border fa-bug" title="Flood"></i>
    <i class="fa fa-2x fa-border fa-male" title="Homme"></i>
    <i class="fa fa-2x fa-border fa-female" title="Femme"></i>
    <i class="fa fa-2x fa-border fa-star-o" title="Moins de 50 messages"></i>
    <i class="fa fa-2x fa-border fa-star-half-o" title="Entre 50 et 100 messages"></i>
    <i class="fa fa-2x fa-border fa-star" title="Plus de 100 messages"></i>
    <i class="fa fa-2x fa-border fa-user-plus" title="VIP"></i>
</fieldset>

<?php if ($is_admin) : ?>
    <i class="fa fa-2x fa-border fa-user-secret" title="Administrateur"></i>
<?php endif; ?>

<?php if($is_male) : ?>
    <i class="fa fa-2x fa-border fa-male" title="Homme"></i>
<?php else: ?>
    <i class="fa fa-2x fa-border fa-female" title="Femme"></i>
<?php endif; ?>

<?php if($nbmsg<50): ?>
      <i class="fa fa-2x fa-border fa-star-o" title="Moins de 50 messages"></i>
<?php endif; ?>

<?php if ($nbmsg>50 and $nbmsg<100): ?>
        <i class="fa fa-2x fa-border fa-star-half-o" title="Entre 50 et 100 messages"></i>
<?php endif; ?>

<?php if ($nbmsg>100):?>
        <i class="fa fa-2x fa-border fa-star" title="Plus de 100 messages"></i>

<?php endif; ?>

<?php if ($date=$date2):?>
    <i class="fa fa-2x fa-border fa-birthday-cake" title="Anniversaire"></i>
<?php endif; ?>

<?php if ($nbmsg>30 and $inscription<50):?>
    <i class="fa fa-2x fa-border fa-bug" title="Flood"></i>
<?php endif ?>




</body>
</html>
