<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
#Diversos#
	//caracteres especiais
	header("Content-Type:text/html; charset=ISO-8859-1", true);
	//data
	function data($d){return $d[8].$d[9]."/".$d[5].$d[6]."/".$d[0].$d[1].$d[2].$d[3];};
	//script
	function script($c){return('<script>'.$c.'</script>');}
#Funções de js/browser
	//Historico
	function history($h){echo"history.go(".$h.");";}
	//Redireciona
	function refresh($t,$p){if($p){$p="URL=".$p;};return"<meta http-equiv='refresh' content='".$t.";".$p."' />";};
	//redireciona 2
	function go($p){return"window.location.href='".$p."'";};
	//redireciona 3
	function parentgo($p){return"parent.window.location.href='".$p."'";};
	//JS
	function js($j){return'window.location.href="javascript:'.$j.'";';};
	//Parent JS
	function parentjs($j){return"parent.window.location.href='javascript:".$j."'";};
	//Alerta
	function alert($msg){return"parent.window.alert('".$msg."');";};
	//session
	function session($x){if($x){session_start(); return $_SESSION;}else{@session_start(); @session_unset(); $_SESSION=array(); @session_destroy();return true;}};
#Funções de Banco de Dados
	//Conect&&select
	function conect($serv,$usr,$pass,$bd){if(mysql_select_db($bd,mysql_connect($serv,$usr,$pass))){return true;}else{return false;}}
	// insere
	function insert($tab,$onde,$valores){
		if ($onde){$onde="(".$onde.")";};
		if(mysql_query("INSERT INTO ".$tab." ".$onde." VALUES (".$valores.")")){
			return true;
		}else{return false;}};
	// Deleta
	function del($tab,$onde){if(mysql_query("DELETE FROM ".$tab." WHERE ".$onde)){return true;}else{return false;}};
	//seleciona
	function select($oq, $tab, $onde, $order){if(!$oq){$oq="*";}; if($onde){$onde=" WHERE ".$onde;}; if($order){$order=" ORDER BY ".$order;};$sql=MYSQL_QUERY("SELECT ".$oq." FROM ".$tab.$onde.$order);if (mysql_num_rows($sql)){while($x=mysql_fetch_row($sql)){$y[]=$x;}return $y;}else{return false;}};
	//Atualisa
	function update($tab,$valores,$onde){$valores=implode(', ', $valores); $onde=implode(', ', $onde); if($resultado=mysql_query("UPDATE ".$tab." SET ".$valores." WHERE ".$onde)){return true;}else{return false;};};
	#Imagem no Banco de Dados#
	function dbimg($id, $link, $capa){return insert("img","","'', ".$id.", ".$link.", ".$capa,"");};
	//sel img
	function selimg($id){$img=select('','img','id='.$id,'');return $img[0][2];};
	// duble select for imgs(seleciona item e sua(s) respectiva(s) imagen(s))
	function dimgselect($tab, $onde, $order, $pre){if(!$pre){$oq="0";};if($onde){$onde=" WHERE ".$onde;};if($order){$order=" ORDER BY ".$order;};$sql=MYSQL_QUERY("SELECT * FROM ".$tab.$onde.$order);if (mysql_num_rows($sql)!=0){while($x=mysql_fetch_row($sql)){$x[]=selimg($pre.$x[0]);$y[]=$x;}return $y;}else{return false;}}
	// duble select
	function dselect($tab, $onde, $order, $pre, $tabb, $order){
		if($onde){$onde=" WHERE ".$onde;}; 
		if($order){$order=" ORDER BY ".$order;}; 
		if($order){$order=" ORDER BY ".$order;}; 
		$sql=MYSQL_QUERY("SELECT * FROM ".$tab.$onde.$order); 
		if (mysql_num_rows($sql)!=0){
			while($x=mysql_fetch_row($sql)){
				$x[]=selimg($pre.$x[0]);
				$y[]=$x;
			}
			return $y;
		} else {return false;}
	}
	// autentica login retrna t/f
	function auth($nm,$pass){if(select('','login','nome="'.$nm.'" and senha="'.$pass.'" or login="'.$nm.'" and senha="'.$pass.'" or email="'.$nm.'" and senha="'.$pass.'"','')){session_start();$_SESSION["cd"]=$saida[5];$_SESSION["per"]=$saida[1];$_SESSION["nome"]=$saida[3];$_SESSION["email"]=$saida[4];return true;}else{return false;}};
	//frame para load de form
	function loader(){return'<iframe name="loader" id="loader" class="loader" frameborder="0" style="position:absolute; visibility:hidden;	left:-10px; top:-10px; height:0px; width:0px;"></iframe>';}
	//retorna a data de hoje
	function today(){return date('Y-m-d');}
	#Conectar#
	#ordem	(servidor, usuario, senha e banco de dados);
	conect	('localhost', 'root', '', 'painel');
?>
		
        