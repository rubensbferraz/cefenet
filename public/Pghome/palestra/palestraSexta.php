<?php
include("../../../app/Model/ClassConexao.php");
?>
<form class='form-group' name='formSelectSexta' id='formSelectSexta' action='palestra/seleciona' method='post'>
    <table class='table'>
        <tr>
            <td>Data</td>
            <td>Orador</td>
            <td>Tema</td>
            <td>Diretor</td>
            <td>Semana</td>
        </tr>
        <?php
        $Db;
        $dataPP = date("Y-m-d", strtotime($dataPalestra));

        $PFetch = $this->Db = $this->conexaoDB()->prepare("SELECT  dataPalestra, oradorPalestra, temaPalestra, diretorPalestra, semanaPalestra FROM tb_palestra");

        foreach ($ListaP as $C) {
        ?>
            <tr>
                <td><input type="checkbox" id="Id" name="Id[]" value="$C[Id]">&nbsp<img class="ImageEdit" rel="$C[Id]" src="<?php DIRIMG . "editar.png" ?>" alt="Editar"></td>
                <td><?php $C['dataPalestra'] ?></td>
                <td><?php $C['oradorPalestra'] ?></td>
                <td><?php $C['temaPalestra'] ?></td>
                <td><?php $C['diretorPalestra'] ?></td>
                <td><?php $C['semanaPalestra'] ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
</form>