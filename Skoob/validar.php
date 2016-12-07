<?php
session_start();

    require_once("classes/leitor.php");

    $leitor = new Leitor();
	mysql_connect("localhost","root","") or
    die("Não foi possível conectar:" . mysql_error());
	mysql_select_db("db_skoob");

$login=$_POST["usuario"];
$senha=$_POST["password"];

$query = mysql_query("SELECT * FROM tb_leitor WHERE ds_email_leitor = '$login' AND ds_senha_leitor = '$senha'");

$result = mysql_num_rows($query);
if($result == 1){
	echo "usuario encontrado";
	
	// Instanciando objeto leitor
	while ($result = mysql_fetch_assoc($query)) {
	
    $leitor->setNome($result['nm_leitor']);
    $leitor->setApelido($result['nm_apelido_leitor']);
    $leitor->setSexo($result['ds_sexo_leitor']);
    $leitor->setDataN($result['dt_nasc_leitor']);
    $leitor->setEmail($result['ds_email_leitor']);
    $leitor->setSenha($result['ds_senha_leitor']);
    $leitor->setUF($result['ds_distrito_leitor']);
    }
	// cookies e session
	setcookie ("usuario", $leitor->getEmail(), 60);
	setcookie ("senha", $leitor->getSenha(), 60);
	$_SESSION["UF"] = $leitor->getUF();
	$_SESSION["nome"] = $leitor->getNome();
	$_SESSION["senha"] = $leitor->getSenha();
echo '<script>window.location="Skoob_perfil.php";</script>';
}
else{
	echo "usuario não encontrado";
}

?>