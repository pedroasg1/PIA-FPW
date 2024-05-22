<?php
/* function mostrarTexto($texto)
{
    echo "<strong>El texto a mostrar es el siguiente: </strong>";
    echo $texto;
}
mostrarTexto("Me gusta mucho la web"); */
?> 


<?php
/*$num = 10;
function miFuncion() {
    $texto = "exta es una variable local";
    echo $texto;
}
miFuncion();
echo $texto; */
?>

<?php
/*$a = 10;
$b = 20;
function miPrueba() {
    global $a, $b;
    $b = $a + $b;
}
miPrueba();
echo $b;*/
?>

<?php
/*function miPrueba() {
    static $c = 0;
    $c = $c + 1;
    echo "$c";
}
miPrueba();
miPrueba();
miPrueba();*/
?>


<?php
/*function saludar(string $nombre = 'Pedro', string $profesion = 'ninguna'): string {
    return 'Hola, persona llamada '. $nombre.'. Por lo que veo tu nombre tiene '
     .strlen($nombre).' caracteres.'.$profesion.'.';
}
echo saludar();
echo '<br>';
echo saludar('Espartaco');
echo '<br>';
echo saludar('Picasso', 'Pintor');*/
?>

<?php
/* $apartamentos =[
[
    'precio/noche' => 40,
    'ciudad' => 'Valencia',
    'wifi' => True,
    'pagina web' => 'https://hotel.com'
],
[
    'precio/noche' => 87,
    'ciudad' => 'Calpe',
    'wifi' => True,
    'pagina web' => 'https://calpe.com'
],
[
    'precio/noche' => 67,
    'ciudad' => 'Denia',
    'wifi' => False,
    'pagina web' => 'https://denia.com'
],
[
    'precio/noche' => 105,
    'ciudad' => 'Benidorm',
    'wifi' => False,
    'pagina web' => 'https://benidorm.com'
]
];
$media = array_reduce($apartamentos, function ($acumulador, $apartamento) {
    return $apartamento['precio/noche'] + $acumulador;
}, 0 / count($apartamentos));

echo ("Media aritmetica: $media"); */
?>


<?php
echo "<h1>Uso del ISSET</h1>";
//Ejemplo de una variable definida
$variable = 'valor';
if (isset($variable))
{
    echo "Primer variable definida!!!!";
} else {
    echo "Variable NO definida!!!!";
}
echo "<br>";
echo "<br>";
//Ejemplo con variables definidas
$variable = 'valor';
$variable2 = 'valor2';
if (isset($variable, $variable2))
{
    echo "Dos variables definidas!!!!";
} else {
    echo "Variable NO definidas!!!!";
}
echo "<br>";
echo "<br>";
//Ejemplo con variables NO definidas
$variable = 'valor';
$variable2 = 'valor2';
if (isset($variable, $variable2, $variable3))
{
    echo "Tres variables definidas!!!!";
} else {
    echo "Faltan variables que NO estan definidas";
}
?>

