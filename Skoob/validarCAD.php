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
    $nmUsuario = $_POST['txtnome'];
    $dsApelidoUsuario = $_POST['txtapelido'];
    $sxUsuario = $_POST['opsexo'];
    $dsUFUsuario = $_POST['opuf'];
    $emailUsuario = $_POST['txtemail'];
    $dsSenhaUsuario = $_POST['psdsenha'];

    # SELECT COMPARANDO LOGIN E SENHA COM BANCO - ERRO
    $query = mysql_query("SELECT * FROM tb_leitor WHERE
        nm_leitor = '".$nmUsuario."' 
        OR
        nm_apelido_leitor = '".$dsApelidoUsuario."' 
        OR
        ds_email_leitor = '".$emailUsuario."'
        ");

    # VERIFICANDO TODAS AS LINHAS PARA ENCONTRAR USUÁRIO
        $result = mysql_num_rows($query);
    if($result >= 1){
        echo "Usuário já cadastrado";
    } else {
        # INSERÇÃO NO BANCO DE DADOS
        $vSQL = "INSERT INTO `tb_leitor` (`nm_leitor`, `nm_apelido_leitor`, `ds_sexo_leitor`, `ds_distrito_leitor`, `ds_email_leitor`,`ds_senha_leitor`)  VALUES ('".$nmUsuario."', '".$dsApelidoUsuario."', '".$sxUsuario."', '".$dsUFUsuario."', '".$emailUsuario."', '".$dsSenhaUsuario."')";

        $result = mysql_query($vSQL);
        if ($result) {
          echo "Seu cadastro foi realizado com sucesso";

            # INSTANCIANDO OBJETO LEITOR
    while ($result = mysql_fetch_assoc($query)) {

        $nmUsuario = $_POST['txtnome'];
        $dsApelidoUsuario = $_POST['txtapelido'];
        $sxUsuario = $_POST['opsexo'];
        $dsUFUsuario = $_POST['opuf'];
        $emailUsuario = $_POST['txtemail'];
        $dsSenhaUsuario = $_POST['psdsenha'];
    
        $leitor->setNome($nmUsuario);
        $leitor->setApelido($dsApelidoUsuario);
        $leitor->setSexo($sxUsuario);
        $leitor->setEmail($dsUFUsuario);
        $leitor->setSenha($emailUsuario);
        $leitor->setUF($dsSenhaUsuario);
        }
    
        # COOKIES E SESSION
        setcookie ("usuario", $leitor->getEmail(), 3000);
        setcookie ("senha", $leitor->getSenha(), 3000);
        $_SESSION["UF"] = $leitor->getUF();
        $_SESSION["nome"] = $leitor->getNome();

          echo '<script>window.location="confCAD.php";</script>';
        } else {
          echo "Não foi possível realizar o cadastro, tente novamente.";
          // Exibe dados sobre o erro:
          echo "Dados sobre o erro: " . mysql_error();
        }
}
?>