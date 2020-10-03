<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Webdesign em Foco">
    <meta name="description" content="<?php echo $this->getDescription(); ?>">
    <meta name="keywords" content="<?php echo $this->getKeywords(); ?>">
    <title><?php echo $this->getTitle(); ?></title>
    <link rel="stylesheet" href="<?php echo DIRCSS . 'bootstrap/bootstrap.min.css' ?>">
    <link rel="stylesheet" href="<?php echo DIRCSS . 'cefe.css' ?>">
    <link rel="stylesheet" href="<?php echo DIRCSS . 'carousel.css' ?>">
    <link rel="stylesheet" href="<?php echo DIRCSS . 'menu.css' ?>">
</head>

<body>
    <!-- inclui o cabeçalho do site -->
    <div class="Header">
        <?php echo $this->addHeader(); ?>
    </div>
    <!-- inclui o corpo do site -->
    <div class="container">
        <div class="Main"><?php echo $this->addMain(); ?></div>
    </div>
    <!-- inclui o Rodapé do site -->
    <div class="Footer">
        <?php echo $this->addFooter(); ?>
    </div>

    <script src="<?php echo DIRJS . 'Javascript.js' ?>"></script>
    <script src="<?php echo DIRJS . 'Jquery/Jquery.js' ?>"></script>
    <script src="<?php echo DIRJS . 'bootstrap/bootstrap.min.js' ?>"></script>
</body>

</html>