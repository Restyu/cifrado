<?php 

	if (!$_POST) {
		$accion = "code";
	}

 ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Conversor de texto</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.css">
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>
	<div class="container">
		<h1>Introduzca texto</h1>
			<form action="" method="post">
  				<div class="form-group">
   					<textarea name="text" class="form-control" cols="30" rows="10" placeholder="introduzca texto"><?php echo (isset($resultext)) ? $resultext:"introduzca su texto:"; ?></textarea>
				</div>
				<div class="radio">
					<label>
				  		<input type="radio" name="accion" id="coderadio" value="code"  <?php echo (isset($accion) && $accion == "code")  ? "checked" : ""; ?> >
				  	codificar
				  </label>
				</div>  
				<div class="radio">
				  <label>
				  	<input type="radio" name="accion" id="decoderadio" value="decode"  <?php echo (isset($accion) && $accion == "decode")  ? "checked" : ""; ?> >
				   descodificar
				  </label>
				</div>
				<button type="submit" id="procesar" class="btn btn-primary">Procesar</button>
			</form>
	
			<?php if(isset($resultext) ): ?>
			<div class="resultext">
				<div class="panel panel-default">
				  	<div class="panel-heading">
				    <h3 class="panel-title">texto procesado</h3>
				  	</div>
				  <div class="panel-body">
				    <?=$resultext?>
				  </div>
				</div>
			</div>
			<?php endif; ?>

	</div>
</body>
</html>