<div class="navecavel">
    <?php
    $BreadCrumb = new Src\Classes\ClassBreadcrumb();
    $BreadCrumb->addBreadcrumb();
    ?>
</div>
<section class="container">
    <form name="FormCadastroPalestra" id="FormCadastroPalestra" class="form-group" action="<?php echo DIRPAGE . 'palestra/cadastrar' ?>" method="POST">
        <div class="row">

            <legend>Coordenando Escala de Palestras Públicas</legend>
            <div class="col-6">
                <label for="dataPalestra">Data</label>
                <input class="form-control" type="date" name="dataPalestra" />
            </div>
            <div class="col-6">
                <label for="oradorPalestra">Palestrante/Orador</label>
                <input class="form-control" type="text" name="oradorPalestra" />
            </div>
            <div class="col-6">
                <label for="temaPalestra">Tema da Palestra</label>
                <input class="form-control" type="text" name="temaPalestra" />
            </div>
            <div class="col-6">
                <label for="diretorPalestra">Diretor Reunião</label>
                <input class="form-control" type="text" name="diretorPalestra" />
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <label>Escolha a Semana</label>
                <select class="form-control" type="text" name="semanaPalestra">
                    <option value="">Selecione Semana</option>
                    <option value="sexta">Sexta</option>
                    <option value="domingo">Domingo</option>
                </select>
            </div>
        </div>
        <div class="col-12 my-4 text-center">
            <button class="btn btn-success float-right" type="submit" name="cadastrar">Cadastrar</button>
        </div>
    </form>
</section>