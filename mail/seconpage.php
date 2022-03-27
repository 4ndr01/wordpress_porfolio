<?php
var_dump($_GET);
if (!empty($_GET['mail'])) {
    mail('marvin.hoguet@marvin.com',$_GET['mail'],$_GET['message'] );

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="css/styles.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <title>portfolio</title>

    <style>


                    header{
                     background-image: url("images/samara-doole-3Zzsk2MG2AI-unsplash.jpg");
                     background-repeat:no-repeat;
                     -webkit-background-size:cover;
                     -moz-background-size:cover;
                     -o-background-size:cover;
                     background-size:cover;
                     background-position:center;
                     position: fixed;
                        z-index: 1;
                        top: 0;
                        right: 0;
                        left: 0;

                 }
                 </style>


</head>
<body class="bodyS">

<header class="header2">
<form method="get" class="field is-horizontal">
    <div class="field-label is-normal">
        <label class="label from">From</label>
    </div>
    <div class="field-body">
        <div class="field">
            <p class="control">
                <input class="input" id="in" type="email" name="mail" >
            </p>
            <textarea class="textarea" placeholder="" name="object"></textarea>
        </div>
    </div>


<div class="field is-horizontal">
    <div class="field-label is-normal">
        <label class="label">To</label>
    </div>
    <div class="field-body">
        <div class="field">
            <p class="control">
                <input class="input" type="email" value=""readonly placeholder="marvin.hoguet@marvin.com">

            <div>

                <input type="submit">

</form>

            <div>
                <p id="email" class=" has-text-danger"></p>
                <p class= "has-text-success" id="success"></p>
            </div>
        </div>
    </div>
</div>

</div>
</header>

</body>
<script src="script.js"></script>
</html>