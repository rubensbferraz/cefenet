<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Webdesign em Foco">
    <meta name="description" content="<?php echo $this->getDescription(); ?>">
    <meta name="keywords" content="<?php echo $this->getKeywords(); ?>">
    <title><?php echo $this->getTitle(); ?></title>
    <link rel="stylesheet" href="<?php echo DIRCSS . 'Styles.css' ?>">
    <?php echo $this->addHead(); ?>
</head>

<body>
    <!-- inclui o cabeçalho do site -->
    <div class="Header">
        <?php
        $BreadCrumb = new Src\Classes\ClassBreadcrumb();
        $BreadCrumb->addBreadcrumb();
        ?>
        <br><br>
        <hr>
        Tel,.:(XX) XXXX-XXXX <br>
        <?php echo $this->addHeader(); ?>
    </div>
    <!-- inclui o corpo do site -->
    <div class="container">
        <div class="Main"><?php echo $this->addMain(); ?></div>
    </div>
    <!-- inclui o Rodapé do site -->
    <div class="Footer">
        2019 - Todos os direitos reservados webdesigner em foco. <br>
        <?php echo $this->addFooter(); ?>
    </div>


</body>

</html>