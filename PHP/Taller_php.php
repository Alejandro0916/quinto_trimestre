<?php
//---Variables y operaciones básicas---//
//primer act
$a = 5;
$b = 10;
$suma = $a + $b;
echo "La suma es: " . $suma;
//segunda act
$a = 2;
$b = 2;
$resta = $a -$b;
$multiplicacion = $a * $b;
$division = $a / $b;
echo "la resta es: " . $resta;
echo "la multiplicacion es: " . $multiplicacion;
echo "la division es: " . $division;
//tercera act
$numero = 4;
$cuadrado = $numero ** 2;
$cubo = $numero ** 3;
echo "el cuadrado es: " . $cuadrado;
echo "el cubo es: " . $cubo;
//cuarta act
$celsius = 30;
$fahrenheit = $celsius * 9 / 5 +32;
echo "los grados celsius en fahrenheit es: " . $fahrenheit;
//quinta act
$base = 4;
$altura = 6;
$area = $base * $altura / 2;
echo "el are del triangulo es: ". $area;
//---Condicionales (if, else, elseif)---//
//primer act
$numero = 10;
$ope = $numero % 2;
if ($ope == 0){
    echo "el numero es par";
}else {
    echo "el numero es impar";
}
//segunda act
$edad = 18;
if ($edad < 18){
    echo "eres menor de edad";
}else {
    echo "eres mayor de edad";
}
//tercera act
$num1 = 4;
$num2 = 19;
if ($num1 > $num2){
    echo "el priemer numero es mayor";
}else {
 echo "el segundo numero es mayor";
}
//cuarta act
$not1 = 5;
$not2 = 4;
$not3 = 3;
$promedio = $not1 + $not2 + $not3 /3;
if ($promedio >=3){
    echo "aprobo la materia";
}else{
    echo"reprobo la materia";
}
//quinta act 
$contra = "alejo123";
if ($contra == "alejo123"){
    echo "contraseña correcta";
}else {
    echo "contraseña incorrecta";
}
//---Bucles FOR---//
//primera act
for ($i = 1; $i <= 10; $i++){
    echo $i;
}
//segunda act
$numero = 5 ; 
for ($i = 1; $i <=10 ;$i++){
    echo $numero * $i;
}
//tercera atc
$suma = 0;
for ($i = 1;$i <= 100;$i++){
    $suma = $suma + $i;
}
echo $suma;
//cuarta act 
for ($i = 1;$i <= 50; $i++){
    if ($i % 2 == 0){
        echo"$i";
    }
}
//quinto act
for ($i = 10;$i >= 1;$i--){
    echo"$i";
}
//--Bucles WHILE--//
//primera act 
$numero = (int) readline("ingrese un numero: ");
while( $numero != 0){
    $numero =(int) readline("ingrese otro numero");
}
echo "felicidades";
//segunda act 
$i = 1;
while ($i <= 20 ){
    echo "$i";
    $i++;
}
//tercera act
$i = 1;
while ($i <= 50){
    if ($i % 2 == 0){
        echo "$i";
    }
    $i++;
}
//cuarta act 
$numero = 0;
$i = 1;
while ($numero <= 100){
    $numero = $numero + $i;
    $i++;
}
echo $i;
//quinta act
$contra = readline("Ingrese la contraseña: ");
while ($contra != "papialejo"){
    $contra = readline("Ingrese la contraseña: ");
}
echo "contraseña correcta";
//--6. Arreglos (listas) --//
//primera act
$nombres = array("Ana", "Carlos", "María", "Luis", "Sofía");
foreach ($nombres as $nombre) {
    echo $nombres[0] . "<br>";
    echo $nombres[1] . "<br>";
    echo $nombres[2] . "<br>";
    echo $nombres[3] . "<br>";
    echo $nombres[4] . "<br>";
}
//segunda act
$frutas = array("Manzana", "Banano", "Uva", "Mango", "Pera");
foreach ($frutas as $fruta) {
    echo $fruta . "<br>";
}
//tercera act
$frutas = array("Manzana", "Banano", "Uva", "Mango");
if (in_array("Uva", $frutas)) {
    echo "La fruta existe en el arreglo";
} else {
    echo "La fruta no existe";
}
//cuarta act
$numeros = array(10, 20, 30, 40, 50);
$suma = array_sum($numeros);
$cantidad = count($numeros);
$promedio = $suma / $cantidad;
echo "El promedio es: " . $promedio;
//quinta act
$numeros = array(50, 20, 10, 40, 30);
sort($numeros);
foreach ($numeros as $numero) {
    echo $numero . "<br>";
}
?>