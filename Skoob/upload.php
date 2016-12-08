<?php
//first you have to set where you want to store files
//in this image upload script we keep file in folder upload
//$_FILES['ufile']['name']; = upload file name
//for example upload file name click4knowledge.gif . $path will be upload/click4knowledge.gif

	$path= "img/leitor/".$_FILES['ufile']['name'];
	if($_FILES['ufile']['name'] != "")
	{
		if(copy($_FILES['ufile']['tmp_name'], $path))
		{
			@require('conexaobd.php');
			$senha = $_COOKIE['senha'];
			echo $path;
			$result = @mysql_query("update tb_leitor set ds_img_leitor = '".$_FILES['ufile']['name']."' where ds_senha_leitor = 'rgbs';");
			echo "<br>".@mysql_affected_rows($result);
			echo '<script>window.location="Skoob_perfil.php";</script>';
		}
	}
	else
	{
		echo "Error";
	}
?>
