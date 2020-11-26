<div class="navecavel">
    <?php

    use App\Model\query;

    $BreadCrumb = new Src\Classes\ClassBreadcrumb();
    $BreadCrumb->addBreadcrumb();
    ?>
</div>
<section class="container">
    <?php
    $queryEd = new \App\Model\query();
    $Ed = $queryEd->queryEditora();
    $queryOb = new \App\Model\query();
    $Ob = $queryOb->queryTipoObra();


    ?>
    <form name="FormCadastroLivraria" id="FormCadastroLivraria" class="form-group" action="<?php echo DIRPAGE . 'livraria/cadastrar' ?>" method="POST">
        <div class="row">

            <legend>Administrando a Livraria</legend>
            <div class="col-6">
                <label for="titulo">Titulo</label>
                <input class="form-control" type="text" name="titulo" />
            </div>
            <div class="col-6">
                <label for="descricao">Descrição</label>
                <input class="form-control" type="text" name="descricao" />
            </div>
            <div class="col-6">
                <label for="edicao">Edição</label>
                <input class="form-control" type="text" name="edicao" />
            </div>
            <div class="col-6">
                <label for="dtPublicacao">Dt Publicação</label>
                <input class="form-control" type="text" name="dtPublicacao" />
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <label for="isbn">ISBN</label>
                <input class="form-control" type="text" name="isbn" />
            </div>
            <div class="col-6">
                <label for="preco">Preço</label>
                <input class="form-control" type="text" name="preco" />
            </div>
            <div class="col-6">
                <label for="editora">Editora</label>
                <select name="editora">
                    <option value="">Selecione a Editora</option>
                    <option value=""><?php echo $Ed ?></option>
                </select>
                <input class="form-control" type="text" name="editora" />
            </div>
            <div class="col-6">
                <label for="tipoObra">Tipo Obra</label>
                <select name="tipoObra">
                    <option value="">Selecione a Tipo da Obra</option>
                    <option value=""><?php echo $Ob; ?></option>
                </select>
            </div>
        </div>
        <div class="col-12 my-4 text-center">
            <button class="btn btn-success float-right" type="submit" name="cadastrar">Cadastrar</button>
        </div>
    </form>
</section>