#PHPDeveloperParte1
Solution to the first part of the PHPDeveloper exam.

##ChangeString.php
Usage
```bash
##Creacion de Objeto
  $obj = new ChangeString();
 
##Pruebas
  $cadena = "**Casa 52Z";
  echo "entrada : ".$cadena."<br>";
  echo "salida : ".$obj->build($cadena);
``` 
 
##CompleteRange.php
Usage
```bash
##Creacion de Objeto
  $obj = new CompleteRange();

##Pruebas
  $cadena = "1,2,4,5";
  echo "entrada : ".$cadena. "<br>";
  echo " salida : ".$obj->build($cadena);
``` 

##ClearPar.php
Usage
```bash
##Creacion de Objeto
  $obj = new ClearPar();

##Pruebas
  $cadena = "(((()))((()";
  echo "entrada : ".$cadena. "<br>";
  echo " salida : " .$obj->build($cadena);
``` 

