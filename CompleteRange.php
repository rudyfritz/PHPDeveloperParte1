<?php

class CompleteRange{

    //Metodo principal
    public function build($p_numeros){
        //extraer los numeros de la coleccion y lo guardamos en un array
         $array_numeros = explode(',', $p_numeros); 
         //Obtener el tamaño del array de numeros obtenidos
         $long_array_numeros =  count($array_numeros);
         //Obtener el primer elemento del array
         $primer_valor = $array_numeros[0];
         //Obtener el ultimo elemento del array
         $ultimo_valor = $array_numeros[$long_array_numeros-1];
         //Obtener el intervalo o cantidad de numeros que deben exisitir en la coleccion ingresada	
         $intervalo = ($ultimo_valor - $primer_valor);
         //Variable que alamcenara todos los numeros del intervalo obtenido, empieza con el primer elemento del array
         $numeros_completados = $primer_valor;
         
         //Recorremos todo el intervalo obtenido
         for ($i=1; $i <= $intervalo; $i++) { 
             //Contatenar todos los numeros que pertenecen al intervalo
             $numeros_completados = $numeros_completados . "," . ($primer_valor + $i);
         }
      
        return $numeros_completados;
     }

}

//Creacion de Objeto
$obj = new CompleteRange();

// Pruebas
$cadena = "1,2,4,5";
echo "entrada : ".$cadena. "<br>";
echo " salida : ".$obj->build($cadena);
?>