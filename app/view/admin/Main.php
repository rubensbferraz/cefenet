<?php
$BreadCrumb = new Src\Classes\ClassBreadcrumb();
$BreadCrumb->addBreadcrumb();
?>

<link href="<?php echo DIRCSS . 'adminStyle.css' ?>" rel="stylesheet" type="text/css" />

<div id="modal-administra" class="modal-container">
    <div class="modalFrm">
        <h3 class="subtitulo">Área segura</h3>
        <button class="fechar" type="submit">X</button>
        <form class="form-group" method="POST" action="<?php echo DIRPAGE . 'admin/altenticacao' ?>">
            <label>Seu Nome:</label>
            <input class="form-control" type="text" class="txt" name="nomeAdm">
            <label>Senha</label>
            <input class="form-control" type="password" class="txt" name="senhaAdm">
            <button type="submit" id="fechaModal" value="Entrar" class="btn btn-success mt-2" name="logar">Entrar</button>
        </form>
    </div>
</div>

<script>
    function iniciaModal(modalID) {
        var modalFm = document.getElementById(modalID);
        if (modalFm) {
            modalFm.classList.add('mostrar');
            modalFm.addEventListener('click', (e) => {
                console.log(e.target);
                if (e.target.id == 'fechaModal' || e.target.className == 'fechar') {
                    modalFm.classList.remove('mostrar');
                }
            });
        }
    }
    iniciaModal('modal-administra');
</script>
<script src="<?php echo DIRJS . "Jquery/Jquery.js" ?>"></script>
<script src="<?php echo DIRJS . "bootstrap/bootstrap.min.js" ?>"></script>