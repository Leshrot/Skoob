<?php
session_start();

    # INSTANCIANDO LEITOR
    require_once("classes/leitor.php");
    $leitor = new Leitor();

    # CONEXÃO COM O BANCO
	mysql_connect("localhost","root","") or
    die("Não foi possível conectar:" . mysql_error());
	mysql_select_db("db_skoob");

    # RECEBENDO VALORES DO FORMULÁRIO
    $nome   = $_POST["txtnome"];
    $apelido= $_POST["txtapelido"];
    $sexo   = $_POST["opsexo"];
    $estado = $_POST['opuf']
    $email  = $_POST['txtemail']
    $senha  = $_POST['psdsenha']
    $csenha  = $_POST['psdsenhaConfirmacao']

    

    # SELECT COMPARANDO LOGIN E SENHA COM BANCO
    $query = mysql_query("SELECT * FROM tb_leitor WHERE
    	nm_leitor = '$nome' 
    	OR ds_email_leitor = '$email'
    	");

    # VERIFICANDO TODAS AS LINHAS PARA ENCONTRAR USUÁRIO
$result = mysql_num_rows($query);
if($result == 1){
	echo "Usuário já cadastrado";
} else {

    // CONTA QUANTIDADE DE LINHAS DO BANCO PARA SER O ID DO INSERT
    $count = "SELECT COUNT (cd_leitor) FROM tb_leitor";
    $count = mysql_query($count);
    echo $count;

   	$vSQL = "INSERT INTO tb_leitor VALUES";
	$vSQL .= "('$count','$nome','$dt_nasc_leitor','$email','$senha','$estado')";
	
	$result = mysql_query($vSQL);

}
	

	# INSTANCIANDO OBJETO LEITOR
	while ($result = mysql_fetch_assoc($query)) {
	
    $leitor->setNome($result['nm_leitor']);
    $leitor->setDataN($result['dt_nasc_leitor']);
    $leitor->setEmail($result['ds_email_leitor']);
    $leitor->setSenha($result['ds_senha_leitor']);
    $leitor->setUF($result['ds_distrito_leitor']);
    }
	
	# COOKIES E SESSION
	setcookie ("usuario", $leitor->getEmail(), 3000);
	setcookie ("senha", $leitor->getSenha(), 3000);
	$_SESSION["UF"] = $leitor->getUF();
	$_SESSION["nome"] = $leitor->getNome();
echo '<script>window.location="Skoob_perfil.php";</script>';
}
else{
	echo "usuario não encontrado";
}
?>