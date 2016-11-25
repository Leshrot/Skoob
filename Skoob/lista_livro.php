<html>
   <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
    <title>Conexão com DB</title>
    <meta name="generator" content="Bootply" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	<link href="css/styles.css" rel="stylesheet">
   </head>
   <body>

<div class="container">
 <?php
include('conexaobd.php');  


	$result = mysql_query("SELECT *	FROM tb_livro;");							
							
							
       printf("<table class="."table".">
       	        <tr>");
       printf("<th>NOME</th>");
       printf("<th>RESUMO</th>");
       printf("</tr>");

	while($row=mysql_fetch_array($result,MYSQL_ASSOC)) 
    {       
       echo("<tr>");
	   echo("<td>" .
	   	$row["nm_livro"]
	    . "</td><td>" . 
	   	$row["ds_resumo_livro"]."</td>"
	    );
	   echo("</tr>");
	} 

	echo("</table>"); 

	mysql_free_result($result);
	?>
</div>	

   </body>
</html>