<html>
    <head>
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen" type="text/css">
		<style type="text/css">
	#form {  padding:15px;}
	div.box .control-label { padding:10px 0 10px 0;}	
	div.span12 .input-xlarge{width:100%;}
	</style>
        <title></title>
    </head>
	
    <body>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="js/bootstrap.min.js"></script>
		
  <form class="form-inline" id="form" method="post">
<fieldset>

<div class="box">
<legend>4. Vendas</legend>

<div class="container-fluid">
	<div class="row-fluid">
		<div class="span12">
		<label class="control-label" for="textinput">4.1 Faturamento dos &uacuteltimos 6 meses (do mais recente para o anterior)?</label>
			<table class="table table-bordered" border="3" contenteditable="false">
				<thead>
					<tr>
						<th>
							#
						</th>
						<th>
							M&ecircs/Ano
						</th>
						<th>
							Faturamento em R$
						</th>
						<th>
							M&ecircs/Ano
						</th>
						<th>
							Faturamento em R$
						</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							1
						</td>
						<td>
							<input id="mes1" name="mes1" type="text" class="input-xlarge">
						</td>
						<td>
							<input id="fat1" name="fat1" type="text" class="input-xlarge">
						</td>
						<td>
							<input id="mesano1" name="mesano1" type="text" class="input-xlarge">
						</td>
						<td>
							<input id="fatura1" name="fatura1" type="text" class="input-xlarge">
						</td>
					</tr>
					<tr>
						<td>
							2
						</td>
						<td>
							<input id="mes2" name="mes2" type="text" class="input-xlarge">
						</td>
						<td>
							<input id="fat2" name="fat2" type="text" class="input-xlarge">
						</td>
						<td>
							<input id="mesano2" name="mesano2" type="text" class="input-xlarge">
						</td>
						<td>
							<input id="fatura2" name="fatura2" type="text" class="input-xlarge">
						</td>
					</tr>
					<tr >
						<td>
							3
						</td>
						<td>
							<input id="mes3" name="mes3" type="text" class="input-xlarge">
						</td>
						<td>
							<input id="fat3" name="fat3" type="text" class="input-xlarge">
						</td>
						<td>
							<input id="mesano3" name="mesano3" type="text" class="input-xlarge">
						</td>
						<td>
							<input id="fatura3" name="fatura3" type="text" class="input-xlarge">
						</td>
					</tr>
					<tr>
						<td>
							4
						</td>
						<td>
							<input id="mes4" name="mes4" type="text" class="input-xlarge">
						</td>
						<td>
							<input id="fat4" name="fat4" type="text" class="input-xlarge">
						</td>
						<td>
							<input id="mesano4" name="mesano4" type="text" class="input-xlarge">
						</td>
						<td>
							<input id="fatura4" name="fatura4" type="text" class="input-xlarge">
						</td>
					</tr>
					<tr>
						<td>
							5
						</td>
						<td>
							<input id="mes5" name="mes5" type="text" class="input-xlarge">
						</td>
						<td>
							<input id="fat5" name="fat5" type="text" class="input-xlarge">
						</td>
						<td>
							<input id="mesano5" name="mesano5" type="text" class="input-xlarge">
						</td>
						<td>
							<input id="fatura5" name="fatura5" type="text" class="input-xlarge">
						</td>
					</tr>
					<tr>
						<td>
							6
						</td>
						<td>
							<input id="mes6" name="mes6" type="text" class="input-xlarge">
						</td>
						<td>
							<input id="fat6" name="fat6" type="text" class="input-xlarge">
						</td>
						<td>
							<input id="mesano6" name="mesano6" type="text" class="input-xlarge">
						</td>
						<td>
							<input id="fatura6" name="fatura6" type="text" class="input-xlarge">
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>

<hr></hr>

<label class="control-label" for="textinput">4.2 Dias da semana de maior movimento? Per&iacuteodo do m&ecircs: </label><input id="data1" name="data1" type="text" class="input-xlarge"> a <input id="data2" name="data2" type="text" class="input-xlarge">
	<div>
      <input type="radio" name="radios1"id="421" value="segunda">
      Segunda
      <input type="radio" name="radios12" id="422" value="terca">
      Ter&ccedila
	  <input type="radio" name="radios13" id="423" value="quarta">
      Quarta
	  <input type="radio" name="radios14"id="424" value="quinta">
      Quinta
      <input type="radio" name="radios15" id="425" value="sexta">
      Sexta
	  <input type="radio" name="radios16" id="426" value="sabado">
      S&aacutebado
	  <input type="radio" name="radios17" id="427" value="domingo">
      Domingo
</div>
<hr></hr>
<label class="control-label" for="textinput">4.3 Quais hor&aacuterios de maior movimento? </label>
<div>
      <input type="radio" name="radios21"id="431" value="manha">
      Manh&atilde
      <input type="radio" name="radios22" id="432" value="tarde">
      Tarde
	  <input type="radio" name="radios23" id="433" value="noite">
      Noite
</div>
<hr></hr>
<label class="control-label" for="textinput">4.4 Forma de pagamento oferecidas aos clientes? </label>
<div>
      <input type="radio" name="radios31"id="441" value="cheque">
      Cheque pr&eacute-datado
      <input type="radio" name="radios32" id="442" value="ticket">
      Ticket
	  <input type="radio" name="radios33" id="443" value="cartao">
      Cart&atildeo de cr&eacutedito
	  <input type="radio" name="radios35" id="444" value="caderneta">
      Caderneta
	  <input type="radio" name="radios36" id="445" value="vista">
      A vista
	  <input type="radio" name="radios37" id="446" value="outra">
      Outra? Qual?
</div>

<hr></hr>
<label class="control-label" for="textinput">4.5 Qual o valor m&eacutedio de compras por cliente? </label>
<div>
Por vez:
    <input id="datafun" name="datafun" type="text" class="input-xlarge">   
Mensal:
    <input id="ramo" name="ramo" type="text" class="input-xlarge">
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
