<?php
	mysql_connect("localhost","root","") or
    die("Não foi possível conectar:" . mysql_error());
	mysql_select_db("db_skoob");
?>