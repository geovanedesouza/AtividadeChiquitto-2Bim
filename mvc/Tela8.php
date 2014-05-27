<html>
    <head>
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen" type="text/css">
		<style type="text/css">
	#form {  padding:15px;}
	div.box .control-label { padding:10px 0 10px 0;}
	div.span12 .input-xlarge{width:100%;}
	div.radios .radio, .input-xlarge{margin-left:1%;}
	
	</style>
        <title></title>
		
	
    </head>
	
    <body>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
		
  <form class="form-inline" id="form" method="post">
<fieldset>

<div class="box">
<legend>8. Administrativo/Financeiro/Cont&aacutebil</legend>

<div class="container-fluid">
	<div class="row-fluid">
		<div class="span12">8.1 Que tipo de controle utiliza? Caso n&atildeo possua alguns dos controles, deixar em branco.
			<table class="table table-bordered" border="3" contenteditable="false">
				<thead>
					<tr>
						<th>
							Tipos de controle
						</th>
						<th>
							Manual
						</th>
						<th>
							Informatizado
						</th>
						<th>
							Tipos de controle
						</th>
						<th>
							Manual
						</th>
						<th>
							Informatizado
						</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							Fluxo de caixa
						</td>
						<td>
							<input id="manual1" name="manual1" type="text" class="input-xlarge">
						</td>
						<td>
							<input id="info1" name="info1" type="text" class="input-xlarge">
						</td>
						<td>
							Adm. de compras
						</td>
						<td>
							<input id="manual21" name="manual21" type="text" class="input-xlarge">
						</td>
						<td>
							<input id="info21" name="info21" type="text" class="input-xlarge">
						</td>
					</tr>
					<tr>
						<td>
							Controle de estoques
						</td>
						<td>
							<input id="manual2" name="manual2" type="text" class="input-xlarge">
						</td>
						<td>
							<input id="info2" name="info2" type="text" class="input-xlarge">
						</td>
						<td>
							Adm. de vendas
						</td>
						<td>
							<input id="manual22" name="manual22" type="text" class="input-xlarge">
						</td>
						<td>
							<input id="info22" name="info22" type="text" class="input-xlarge">
						</td>
					</tr>
					<tr >
						<td>
							Contas a pagar
						</td>
						<td>
							<input id="manual3" name="manual3" type="text" class="input-xlarge">
						</td>
						<td>
							<input id="info3" name="info3" type="text" class="input-xlarge">
						</td>
						<td>
							Faturamento
						</td>
						<td>
							<input id="manual23" name="manual23" type="text" class="input-xlarge">
						</td>
						<td>
							<input id="info23" name="info23" type="text" class="input-xlarge">
						</td>
					</tr>
					<tr>
						<td>
							Contas a receber
						</td>
						<td>
							<input id="manual4" name="manual4" type="text" class="input-xlarge">
						</td>
						<td>
							<input id="info4" name="info4" type="text" class="input-xlarge">
						</td>
						<td>
							Outros:
						</td>
						<td>
							<input id="manual24" name="manual24" type="text" class="input-xlarge">
						</td>
						<td>
							<input id="info24" name="info24" type="text" class="input-xlarge">
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>

<hr></hr>
<label class="control-label" for="textinput">8.2 Realiza Planejamentos?</label>
	<div>
      <input type="radio" name="radios1" id="82" value="sim">
      Sim. Em que &aacutereas? <input id="area8" name="area8" type="text" class="input-xlarge"> <br>
      <input type="radio" name="radios1" id="82" value="nao">
      N&atildeo
  </div>
  
  <hr></hr>
<div>
<label class="control-label" for="textinput">8.3 Trabalha ou j&aacute obteve recursos de terceiros?</label>
	<div>
      <input type="radio" name="radios83" id="831" value="nao">
      N&atildeo<br>
      <input type="radio" name="radios83" id="831" value="sim">
      Sim<br>
	  <input type="radio" name="radios831" id="832" value="cheque">
      Cheque especial<br>
	  <input type="radio" name="radios832" id="833" value="factoring">
      Factoring  <br>
	  <input type="radio" name="radios833" id="834" value="outros">
      Outros: <input id="area8" name="area8" type="text" class="input-xlarge"> 
  </div>
</div>
  
    <hr></hr>
<div>
<label class="control-label" for="textinput">8.4 Quais s&atildeo seus maiores gastos?</label>
	<div class="radios">
      <input type="radio" name="radios841" id="841" value="frete">
      Frete
      <input type="radio" name="radios842" id="842" value="energia" class="radio">
      Energia el&eacutetrica
	  <input type="radio" name="radios843" id="843" value="folha" class="radio">
      Folha de pagamentro <br>
	  <input type="radio" name="radios844" id="844" value="financeiro">
      Financeiros
	  <input type="radio" name="radios845" id="845" value="manutencao" class="radio">
      Manuten&ccedil&atildeo geral
	  <input type="radio" name="radios846" id="846" value="impostos" class="radio">
      Impostos<br>
	  <input type="radio" name="radios847" id="847" value="aluguel">
      Aluguel
	  <input type="radio" name="radios848" id="848" value="outros" class="radio">
      Outros, quais?<input id="area8" name="outros8" type="text" class="input-xlarge"> 
  </div>
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
