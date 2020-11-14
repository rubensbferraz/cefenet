<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo DIRCSS . 'bootstrap/bootstrap.min.css' ?>">
    <link href="<?php echo DIRCSS . 'adminStyle.css' ?>" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?php echo DIRCSS . 'cefe.css' ?>">
    <link rel="stylesheet" href="<?php echo DIRCSS . 'carousel.css' ?>">
    <link rel="stylesheet" href="<?php echo DIRCSS . 'menu.css' ?>">
</head>

<body>
    <div class="container">
        <div class='container mt-5'>
            <script>
                now = new Date
                if (now.getHours() >= 0 && now.getHours() < 5) {
                    document.write("Olá nbsp<?php echo "$nomeAdm" ?> você está de madrugada! - Tenha um bom trabalho.")
                } else if (now.getHours() >= 5 && now.getHours() < 12) {
                    document.write("Olá <?php echo "$nomeAdm" ?> - Bom dia, => tenha um bom trabalho ")
                } else if (now.getHours() >= 12 && now.getHours() < 18) {
                    document.write("Olá nbsp <?php echo "$nomeAdm" ?> - Boa Tarde, => tenha um bom trabalho.")
                } else {
                    document.write("Olá nbsp<?php echo "$nomeAdm" ?> - Boa Noite, => tenha um bom trabalho não deixe de descansar!")
                }
            </script>
        </div>
    </div>
</body>
<script src="<?php echo DIRJS . "Jquery/Jquery.js" ?>"></script>
<script src="<?php echo DIRJS . "bootstrap/bootstrap.min.js" ?>"></script>

</html>