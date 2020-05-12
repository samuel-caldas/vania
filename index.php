<!DOCTYPE HTML>
<html>
<head>
<?php
if ($_POST['h']){$h=$_POST['h'];}else{$h=false;};
if ($_POST['w']){$w=$_POST['w'];}else{$w=false;};
if ($w and $h){$res=true;}else{$res=false;};
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Intimidade com Deus</title>
<style type="text/css">
#body{
	visibility: hidden;
}
body {
	margin: 0px;
	padding: 0px;
	overflow: hidden;
	background-color: #333;
	font-family: Arial, Verdana;
	color: #333;
	background-image: url(img/10.png);
	background-repeat: repeat;
}
a:link, a:visited, a:hover, a:active{
	color: #333;
	text-decoration: none;
	cursor: default;
	margin: 0px;
	padding: 0px;
}
#style {
	margin: 0px;
	padding: 0px;
	height: 0px;
	width: 0px;
	position: absolute;
	visibility: hidden;
	overflow: hidden;
}
.box{
	display: block;
	clear: both;
	overflow-y: auto;
	overflow-x: hidden;
	min-width:240px;
	min-height:400px;
<?php if($res){echo'	height:'.$h.'px;
	width:'.$w.'px;
';
}?>}
p, br, div, h1, h2, h3, h5, h5{<?php if($w){echo'max-width:'.($w-20).'px; ';
}?> margin: 0px; padding: 0px;}
#botton {
	position: fixed;
	bottom: 0px;
	left: 0px;
	right: 0px;
}
#inicio {
	overflow: hidden;
	background-image: url(img/listras.png);
	background-color: #333;
}
#inicio #banner {
	margin: 10px;
<?php
	if($h <= $w){
		echo'	height:'.($h-50).'px;
	';  echo'max-width:'.($w-50).'px;';
	} else {
		echo'	width:'.($w-50).'px;
	';  echo'max-height:'.($h-50).'px;';
	}
?>
}
#menu {
	text-transform: uppercase;
	display: block;
	-moz-border-top-left-radius:	20px;
	-webkit-border-top-left-radius:	20px;
	border-top-left-radius:			20px;
	-moz-border-top-right-radius:	20px;
	-webkit-border-top-right-radius:20px;
	border-top-right-radius:		20px;
	-moz-box-shadow:	0px 0px 10px #333;
	-webkit-box-shadow:	0px 0px 10px #333;
	box-shadow:			0px 0px 10px #333;
	background: rgb(255,255,255); /* Old browsers */
	background: -moz-linear-gradient(top, rgba(255,255,255,1) 0%, rgba(241,241,241,1) 50%, rgba(225,225,225,1) 51%, rgba(246,246,246,1) 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(255,255,255,1)), color-stop(50%,rgba(241,241,241,1)), color-stop(51%,rgba(225,225,225,1)), color-stop(100%,rgba(246,246,246,1))); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top, rgba(255,255,255,1) 0%,rgba(241,241,241,1) 50%,rgba(225,225,225,1) 51%,rgba(246,246,246,1) 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top, rgba(255,255,255,1) 0%,rgba(241,241,241,1) 50%,rgba(225,225,225,1) 51%,rgba(246,246,246,1) 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top, rgba(255,255,255,1) 0%,rgba(241,241,241,1) 50%,rgba(225,225,225,1) 51%,rgba(246,246,246,1) 100%); /* IE10+ */
	background: linear-gradient(to bottom, rgba(255,255,255,1) 0%,rgba(241,241,241,1) 50%,rgba(225,225,225,1) 51%,rgba(246,246,246,1) 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#f6f6f6',GradientType=0 ); /* IE6-9 */
	border-top-width: 2px;
	border-right-width: 2px;
	border-left-width: 2px;
	border-top-style: solid;
	border-right-style: solid;
	border-bottom-style: none;
	border-left-style: solid;
	border-top-color: #EEE;
	border-right-color: #EEE;
	border-left-color: #EEE;
	cursor: default;
	height: 30px;
	padding-right: 10px;
	padding-left: 10px;
	padding-top: 5px;
	padding-bottom: 5px;
	color: #333;
}
#menu div{
	border-right-width: 1px;
	border-left-width: 1px;
	border-right-style: solid;
	border-left-style: solid;
	border-right-color: #CCC;
	border-left-color: #FFF;
	float: left;
	display: block;
	height: 20px;
	line-height: 20px;
	padding: 5px;
	text-align: center;
	vertical-align: middle;
	font-size: 20px;
}
#menu div:hover{
	font-weight: bold;
}
#contato {
}
.contato {
	bottom: 0px;
	position: relative;
}
#blog {
}
#produtos {
}
#fotos {
}
#agenda {
}
body,td,th {
	color: #EEE;
}
</style>
<script type="text/javascript" src="js/smoothScroll.js"></script>
<script type="text/javascript" src="js/secure.js"></script>
<script type="text/javascript" src="js/windowsize.js"></script>

<script type="text/javascript" >
//--Global-vars--//
var height=null;
var width=null;
//---------------//
window.onload=function(e){
	document.getElementById('w').value=WindowWidth()
	document.getElementById('h').value=WindowHeight()
	<?php if(!$res){echo'	document.getElementById("res").submit();';}else{echo"setTimeout(function(){return document.getElementById('body').style.visibility='visible'}, 500);";}; ?>
	height=WindowHeight();
	width=WindowWidth();
	sec();
}
</script>
</head>
<body id="body">
<form action="./" method="post" id="res">
<input id="w" name="w" type="hidden" value="x">
<input id="h" name="h" type="hidden" value="x">
</form>
<div id='style'></div>
<div id="botton">
    <table border="0" align="center" cellpadding="0" cellspacing="0">
   	  <tr>
   		<td align="center" valign="middle">
        	<div id="menu">
            	<div><a onClick="smoothScroll('inicio')">Inicio</a></div>
                <div><a onClick="smoothScroll('sobre')">HistÓria</a></div>
                <div><a onClick="smoothScroll('fotos')">Fotos</a></div>
                <div><a onClick="smoothScroll('blog')">Blog</a></div>
                <div><a onClick="smoothScroll('agenda')">Agenda</a></div>
                <div><a onClick="smoothScroll('produtos')">Produtos</a></div>
                <div><a onClick="smoothScroll('contato')">Contato</a></div>
			</div>
		</td>
	  </tr>
  </table>
</div>
<div class="box" id="inicio">
<table border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" valign="middle"><img src="img/banner.png" id="banner"></a></td>
  </tr>
</table>
</div>
<div class="box" id="sobre">
<h1>História</h1>
<p>Pra mim é um prazer falar sobre o surgimento do ministério, é engraçado porque ele surgiu em minha vida sem eu saber que futuramente viria a ser um ministério, Deus tem os seus mistérios!</p>

<p>Lembro-me bem que eu era uma cristã superficial, sem experiências com Deus, sem nenhuma persistência, apenas uma religiosa.</p>

<p>E num belo dia, eu fiz uma oração que hoje considero muito desaforada, disse assim para Deus: "Senhor, tu sabes que amo te adorar, e quando as coisas estão bem te adoro melhor ainda, então providencie para que tudo fique bem comigo e eu te adorarei melhor". Que tragédia esta oração, quanta imaturidade, que vergonha sinto hoje de ter feito isso, conto porque faz parte da História do Ministério, senão guardaria para mim. Mas Deus é Deus e ama seus filhos e sei que sua resposta para mim foi enxergar o que viria pela frente, o tratamento de Deus em nós é sempre visando o que ele mesmo está preparando pra nós futuramente. Então delicadamente, Ele me respondeu assim: "Vânia, posso te dar tudo o que você precisa e sonha, mas antes preciso te fazer me adorar pelo que eu sou, não pelo que eu possa te dar, VOCÊ NÃO TEM INTIMIDADE COMIGO E PRECISO TE ENSINAR ISSO. Houve um silêncio...</p>

<p>E agora? E eu que achava que eu era 100% diante de Deus.
Comecei a chorar naquele momento, o Espírito Santo se encarregou de quebrantar meu coração e me mostrar quem eu era. Quanta dor, então Deus inicia comigo uma longa caminhada pelo deserto. Quanta dificuldade falimos financeiramente falando, Deus nos fez experimentar nossa miserabilidade, Mas foi no deserto que ele me levou a ver a sua Santidade, seu amor, seus milagres, e nesse tempo eu aprendi que precisava ter intimidade com Deus, foram dias difíceis, dias intermináveis, noites mal dormidas, mas dias de muita busca e eu não troco esses dias de deserto pelos bons tempos mas longe de ser íntimo de Deus,ainda continuo buscando, ainda estou " em obras" , continuarei "em obras" até Jesus voltar .</p>

<p>Foi então, que Deus me diz anuncie isso aonde você for este será seu ministério.
Hoje Deus me deu pessoas e uma igreja, Pastores que adotaram-me, e me dão a oportunidade de não mais sozinha, mas com toda uma igreja e um ministério onde todos abraçaram esta visão, Precisamos ter Intimidade com Deus. E vamos anunciar isso!
Tive a oportunidade de gravar o primeiro Cd do ministério ainda sozinha, "Quero ser adorador" E agora estamos a caminho do segundo, ao vivo "Dependo de Ti" com toda a igreja, este ministério agora é da Batista Central de Timóteo. Mas este ministério nasceu sem CD,com apenas uma pessoa, desesperada para ter mais de Deus, e que teve que ser tratada para alcançar os sonhos de Deus, Ministério é vida na vida como diz meu Pastor Teko Resende, as outras coisa são o acrescentar de Deus para a expansão do seu Reino. Vamos buscar intimidade com Deus!</p>
</div>
<div class="box" id="fotos"><h1>Fotos</h1></div>
<div class="box" id="blog"><h1>Blog</h1></div>
<div class="box" id="agenda"><h1>Agenda</h1></div>
<div class="box" id="produtos"><h1>Produtos</h1></div>
<div class="box" id="contato">
<h1>Contato</h1>
<div class="contato">
Se você ainda não é nosso cliente, entre em contato conosco através do nosso telefone, email ou formulário para enviar sua mensagem. Teremos prazer em lhe fornecer um atendimento exclusivo e personalizado.
    <form action="http://dados.grupocriarte.com/email/email.php" method="post" id="contactform" target="frame" name="contato">
        <input name="site" type="hidden" value="grupocriarte.com" class="txt">
        <input name="opt" type="hidden" value="agencia@grupocriarte.com" class="txt">
        <table border="0" align="center" cellpadding="0" cellspacing="0">
            <tr><td align="center" valign="middle"><input name="nome" type="text" id="campo" placeholder="Nome"></td></tr>
            <tr><td align="center" valign="middle"><input name="email" type="text" id="campo" placeholder="E-mail"></td></tr>
            <tr><td align="center" valign="middle"><input name="assunto" type="text" id="campo" placeholder="Assunto"></td></tr>
            <tr><td align="center" valign="middle"><textarea name="msg" rows="5" class="txt" id="campo" placeholder="comentário"></textarea></td></tr>
            <tr><td align="center" valign="middle"><input type="submit" value="Enviar" class="button" id="campo"></td></tr>
        </table>
    </form>
</div>
<iframe name="frame" frameborder="0" width="0px" height="0px" style="visibility:hidden;"></iframe>
</div>
</body>
</html>
