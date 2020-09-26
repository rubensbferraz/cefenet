<!DOCTYPE html>
<html lang="en">

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
    <div class="Nav">
        <a href="<?php echo DIRPAGE; ?>">Home</a>
        <a href="<?php echo DIRPAGE . 'contato'; ?>">Contato</a>
        <a href="<?php echo DIRPAGE . 'cadastro'; ?>">Cadastro</a>
    </div>
    <div class="Header">
        <img src="<?php echo DIRIMG . 'My Post.png'; ?>" alt="Banner" srcset=""><br>
        <?php
        $BreadCrumb = new Src\Classes\ClassBreadcrumb();
        $BreadCrumb->addBreadcrumb();
        ?>
        <br><br>
        <hr>
        Tel,.:(XX) XXXX-XXXX <br>
        <?php echo $this->addHeader(); ?>
    </div>
    <div class="container">
        <div class="Main"><?php echo $this->addMain(); ?></div>
    </div>
    <div class="Footer">
        2019 - Todos os direitos reservados webdesigner em foco. <br>
        <?php echo $this->addFooter(); ?>
    </div>


</body>

</html>