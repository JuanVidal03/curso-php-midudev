<?php 
// variables
$name = "Juan";
$age = 20;
$esDesarrollador = false;

// concatenación
$outPut = "Hola, $name. Tienes una edad de $age";

// constantes
define('LOGO_URL', 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/2560px-PHP-logo.svg.png');
// con define su uso el global, podemos acceder desde cualquier lado 

// con const su valor se hace se referencia al scope, solo va a existir en el ambito que se crea
const CONSTANTE = "Nombre";

// operadores ternearios
$isOld = $age >= 40 ? "Eres viejo" : "Eres Joven";

// match
$outPutAge = match (true) {
    $age < 3 => 'Eres un bebe',
    $age < 10 => 'Eres un niño',
    $age < 18 => 'Eres un adolecente',
    $age == 18 => 'Eres mayor de edad',
    $age > 18 => 'Ya eres adulto',
    default => 'No se que eres',
};


/*===============
ARRAYS
===============*/
$lenguajes = ["PHP", "Python", "JavaScript"];
// añadendo un elemento al final del array
$lenguajes[] = "Java";


/*===============
OBJETOS
===============*/
$persona = [
    "name" => "Juan",
    "edad" => 20,
    "isDesarrollador" => true,
    "lenguajes" => ["PHP", "Java", "JavaScript"],
];
// añadiendo un elemento al final del array lenguajes que se encuentra dentro de nuestro diccionario persona
$persona["lenguajes"][] = "Python";


?> 

<!-- condicionales -->
<?php if($esDesarrollador == true) : ?>
    <h2>Es desarrollador</h2>
    <?php else : ?>
    <h2>No es desarrollador</h2>
<?php endif ?>

<h1><?= $outPut ?></h1>
<img src="<?= LOGO_URL ?>" alt="">

<h1><?= $outPutAge ?></h1>


<h1>LENGUAJES DE PROGRAMACION</h1>
<ul>
    <?php foreach($lenguajes as $key => $lenguaje): ?>
        <li><?= "$key -- $lenguaje"?></li>
    <?php endforeach; ?>
</ul>




<style>
    :root{
        color-scheme: light dark;
    }
    body{
        display: grid;
        place-content: center;
    }
    img{
        width: 300px;
    }

</style>