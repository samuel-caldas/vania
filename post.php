<?php
include("Metro/eng/funcoes.php");
if($_POST['cat']==2){
	if(insert('comentarios','','"",'.$_POST['cat'].$_POST['cd'].',"'.$_POST['cmt'].'","'.today().'"')){
		echo script(alert('Comentario enviado com sucesso!').parentgo('blog.php'));
	}else{
		echo script(alert('Erro ao enviar'));
	}
}
?>