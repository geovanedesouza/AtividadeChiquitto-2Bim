<html>
    <head>
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen" type="text/css">
		<style type="text/css">
	#form {  padding:15px;}	
	div.span12 .input-xlarge{width:80px;}
	div.div1 .input-xlarge{width:60px;}
	</style>
        <title></title>
    </head>
	
    <body>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="js/bootstrap.min.js"></script>
		
  <form class="form-inline" id="form" method="post">
<fieldset>

<div class="box">
<legend>6. Clientes</legend>

<div>
6.1 Quantos clientes atende por m&ecircs?
    <input id="datafun" name="datafun" type="text" class="input-xlarge">   

</div>
<hr></hr>

<div class="container-fluid">
	<div class="row-fluid">
		<div class="span12">6.2 Qual &eacute o perfil do seu cliente?
			<table class="table table-bordered" border="3" contenteditable="false">		
				<tbody>
					<tr>
						<th>
							#
						</th>
						<th>
							% classe A <input id="classeA" name="classeA" type="text" class="input-xlarge">
						</th>
						<th>
							% classe B <input id="classeB" name="classeB" type="text" class="input-xlarge">
						</th>
						<th>
							% classe C <input id="classeC" name="classeC" type="text" class="input-xlarge">
						</th>
						<th>
							% classe D <input id="classeD" name="classeD" type="text" class="input-xlarge">
						</th>						
					</tr>
					<tr>
						<td>
							1
						</td>
						<td>
							% 0 ao 18 anos <input id="0a18" name="0a18" type="text" class="input-xlarge">
						</td>
						<td>
							% 19 ao 30 anos <input id="19a30" name="0a18" type="text" class="input-xlarge">
						</td>
						<td>
							% 31 ao 45 anos <input id="31a45" name="31a45" type="text" class="input-xlarge">
						</td>
						<td>
							% acima de 46 anos <input id="46" name="46" type="text" class="input-xlarge">
						</td>
					</tr>
					<tr>
						<td>
							2
						</td>
						<td colspan="2">
							% Masculino <input id="masc" name="masc" type="text" class="input-xlarge">
						</td>
						<td colspan="2">
							% Feminino <input id="fem" name="fem" type="text" class="input-xlarge">
						</td>
					</tr>	
				</tbody>
			</table>
		</div>
	</div>
</div>

<hr></hr>

<label class="control-label" for="textinput">6.3 Vende para empresas? </label>
<div class="div1">
      <input type="radio" name="radios1"id="631" value="sim">
      Sim. Quantos % representa do total do faturamento? <input id="percFat" name="percFat" type="text" class="input-xlarge">
      <input type="radio" name="radios1" id="631" value="nao">
      N&atildeo
</div>
<hr></hr>

<label class="control-label" for="textinput">6.4 Faz pesquisas com seus clientes? </label>
<div class="div1">
      <input type="radio" name="radios2"id="641" value="manha">
       Sim, frequ&ecircncia? <input id="percFat" name="percFat" type="text" class="input-xlarge">
      <input type="radio" name="radios2" id="642" value="tarde">
      N&atildeo, mas j&aacute fiz
	  <input type="radio" name="radios2" id="643" value="noite">
      Nunca fiz
</div>
	
<hr></hr>
  <div class="controls">
    <button id="salvar" name="salvar" class="btn btn-success">Salvar</button>
  </div>
</div>
</fieldset>
</form>


       
    </body>
</html>
