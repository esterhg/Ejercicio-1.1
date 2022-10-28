<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="container mt-3">

	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post" >
		<h3 style="text-align: center;" >TABLA DE MUTIPLICAR</h3>
		<div class="container mt-3" >
			<h3>Ingrese el numero a multiplicar:</h3>

			<select name="numero">
				<option value="0S">--Seleccione--</option>
				<option >1</option>
				<option>2</option>
				<option>3</option>
				<option >4</option>
				<option >5</option>
				<option >6</option>
				<option >7</option>
				<option >8</option>
				<option >9</option>
				<option >10</option>
				<option >11</option>
				<option >12</option>
				<option >13</option>
				<option >14</option>
				<option >15</option>
				<option >16</option>
				<option >17</option>
				<option >18</option>
				<option >19</option>
				<option >20</option>	
			
			</select>
			<input type="submit" value="Enviar" name="muestra" />
		</div>
		<div class="container mt-3" style="text-align:center;" >
			<table class="table table-bordered">
				<thead>
					<th scope="col">#</th>
					<th scoope>numero</th>
					<th>Calculo</th>
					<th>Resultado</th>

				</thead>
				<tr>
					<?php
					
					$numero=$_POST["numero"];
					if (isset ($_POST['numero'])){
						
					for ($i=1; $i<=20; $i++){
						echo "<td scope='row'>$i</td>";
						echo "<th scope='row'>$i</th>";
						echo "<td>$numero X $i</td>";
						echo "<td>".$numero*$i. "</td>";
						echo "</tr>";
					}


                   } 
					?>

				</tr>				
			</table>			
		</div>
	</form>

</body>
</html>