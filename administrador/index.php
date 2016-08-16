<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="estilo.css" />
<script src="../Jquery.js" type="text/javascript"></script>
<script src="scripts.js" type="text/javascript"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pagina de Login administrativo</title>
</head>
<body>	
<div id="mensagem">Mensagem que desejamos apresentar</div>

<div id="caixa_login">
<table style="height:100px;width:300px;top:50%;left:50%;margin-top:-50px;margin-left:-150px; position:absolute">
    <tr >
   		<th align="center" style="font-family:monospace;font-size:14px;text-transform:uppercase;font-weight:bold">Usuário:</th > <td  align="center"><input type="text" id="usuario" /></td>
	
    </tr>
	<tr>
		<th align="center" style="font-family:monospace;font-size:14px;text-transform:uppercase;font-weight:bold">Senha: </th><td align="center"><input type="password" id="senha" /></td>
	</tr>
</table>
<div id="botao_login" style="height:100px;width:300px;top:100%;left:100%;margin-top:-40px;margin-left:-160px; position:absolute; appearance:push-button">
<input type="Button" style="width:150px;height:30px" id="botao" value="Login" />
</div>
</div>

</body>
</html>