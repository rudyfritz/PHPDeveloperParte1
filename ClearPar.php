<?php
     
class ClearPar{

    // Metodo principal
	public function build($p_cadena){
		// array que almacenara los caracteres correctos (parejas de parentesis)
		$new_cadena = "";
		// Longitud del array-parametro
		$long_pcadena = strlen($p_cadena);
		// Recorrer todo el array-parametro
		for ($i=0; $i < $long_pcadena; $i++) { 

            if($long_pcadena == 1 || $long_pcadena == 0){
                $new_cadena = $new_cadena;
                break;
            }
            // Valida que el caracter "(" tenga su pareja ")" solo en la posicion siguiente
			else if((strcmp($p_cadena[$i], "(") == 0) && (strcmp($p_cadena[$i+1], ")") == 0)){
                // Almacenar todas las coincidencias
                $new_cadena = $new_cadena . $p_cadena[$i] . $p_cadena[$i+1];
            }
            
           
		}
		// Devolver el array con todas las parejas de parentesis
		return $new_cadena;
	}

} 

//Creacion de Objeto
$obj = new ClearPar();

// Pruebas
$cadena = "(((()))((()";
echo "entrada : ".$cadena. "<br>";
echo " salida : " .$obj->build($cadena);
?>
