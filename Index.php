<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="Estilo.css">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Curriculo Online</title>
</head>
<body>
<main>
	<div id='Titulo'>
		<H1>Curriculo Online</H1>
	</div>
	<div id="div_form" class="fonte">
	<form name="form1" action="exibir.php" method="post">
		<table>
		<tr>
		<td>
		<label for="nome">Nome:</label>
		 </td>
		 <td>
		<input class="texto" type="text" required minlength="10" maxlength="35" id="nome" placeholder="Digite aqui" name="nome" pattern="[a-zA-Z\s]+$">
	    </td>
	   </tr>
	<tr>
		<td>
			<label for="email">E-mail</label>
		</td>
		<td><input class="texto" type="email" id="email" name="email"></td>
	</tr>
	<tr>
		<td>
			<label for="address">Endereço</label>
		</td>
		<td><input class="texto" type="address" name="Endereço" required name="txt_address"></td>
	<tr>
		<td>
	     <label for="inputCity">Cidade</label>
	    </td>
     <td><input class="texto" type="text" class="text inputCity"></td>
 	</tr>
 	<tr>
 		<td>
 		     <label for="inputEstado">Estado</label>
 		</td>
 		<td><input class="texto" type="text" name="Estado">
	<tr>
		<td><label>Insira uma imagem</label></td>
		<td><input type="file" accept=".pdf" name="txt_arquivo"></td>
	</tr>
	<tr>
		<td><label>Concorda com os termos e Condições?</label></td>
		<td><input type="checkbox" name="Concorda com os termos?"></td>
	</tr>
</table>
		<input style="border-bottom-color: darkred;" type="submit" value="Enviar">
	</form>
</div>
</main>
</body>
</html>