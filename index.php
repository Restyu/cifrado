<?php 

if ( !$_POST ) {

	require_once 'home.html.php';

}else{
	$text = htmlspecialchars($_POST['text'] , ENT_QUOTES , 'UTF-8');
	$accion = htmlspecialchars($_POST['accion'] , ENT_QUOTES , 'UTF-8');
	
	// si el texto es cadena vacio y la accion no es code ni decode vuelvo a cargar el formulario.
	if ($text == "" || ($accion != "code" && $accion != "decode") ) {
		require_once 'home.html.php';
	}else{
		require_once 'libs/encrypter.php';
		
		// se invoca la clase
		if ($accion == "code") {
			$resultext = Encrypter::encrypt($text);
		}else if($accion == "decode"){
			$resultext = Encrypter::decrypt($text);
		}
	
		require_once 'home.html.php';
	}
}

 ?>
