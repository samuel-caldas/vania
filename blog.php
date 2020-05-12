<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>blog</title>
<style type="text/css">
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
body,td,th {
	color: #333;
	font-family: Arial, Helvetica, sans-serif;
}
div{
	border: 1px solid #666;
	display: block;
	margin: 3px;
	padding: 3px;
}
h1,h2,h3,h4,h5,h6 {
	color: #000;
	margin: 0px;
	padding: 0px;
	text-transform: uppercase;
	vertical-align: middle;
	display: block;
}
</style>
</head>

<body>
<?php
include("Metro/eng/funcoes.php");

for ($i=0;$i<count($pst=select('','blog','','data'));$i++){
	echo'<div class="post"><div class="cont"><h3>'.$pst[$i][1].'</h3><em>Data: '.data($pst[$i][3]).'</em><div>'.$pst[$i][2].'</div></div><div class="send"><form action="post.php" method="post" enctype="multipart/form-data" target="loader"><textarea name="cmt" id="cmt"></textarea><input name="cat" type="hidden" value="2"><input name="cd" type="hidden" value="'.$pst[$i][0].'"><input name="Enviar" type="submit" value="Enviar"></form></div><div class="coment">';
	if($cmt=select('','comentarios','cd="2'.$pst[$i][0].'"','data')){
		for ($j=0;$j<count($cmt);$j++){
			echo'<div class="comentario">'.$cmt[$j][2].'<br/><em>Data: '.data($cmt[$j][3]).'</em></div>';
		}
	} else {
		echo'<div class="comentario">Nenhum comentario ainda. Seja o primeiro a comentar!</div>';
	}
	echo'</div></div>';
}
echo loader();
?>
</body>
</html>