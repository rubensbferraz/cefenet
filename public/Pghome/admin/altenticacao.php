<!DOCTYPE html>
<html>
<?php
include("App/Model/ClassConexao.php");
?>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Autenticando usuario</title>

</head>

<body>
	<script type="text/javascript">
		function loginsuccessfully() {
			setTimeout("window.location='painel.php'", 3000);
		}

		function loginfailed() {
			setTimeout("window.location='index.html'", 3000);
		}
	</script>


	<?php

	$nome = $_POST['nomeAdm'];
	$senha = $_POST['senhaAdm'];

	$sql = mysqli_query($conn, "SELECT * FROM adm WHERE nomeAdm = '$nome' and senhaAdm='$senha'");
	$row = mysqli_num_rows($sql);


	if ($row > 0) {
		session_start();
		$_SESSION['nomeAdm'] = $_POST['nomeAdm'];
		$_SESSION['senhaAdm'] = $_POST['senhaAdm'];

		echo "<center>você está autorizado a realizar atualizações!! Aguarde um instante.</center>";
		echo "<script>loginsuccessfully()</script>";
	} else {
		echo "<center> nome de usuarios e senhas invalidos </center>";
		echo "<script>loginfailed()</script>";
	}
	?>
</body>

</html>