<?php
//php.ini
error_reporting(E_ALL); //E_ALL ^  okrem

ini_set('display_errors', 0); //change php.ini directives
//echo ini_get('display_errors');
//die;
//phpinfo();
//isset();
//empty();
//ternary operator
//echo ($ === 5)  ? 'je vacsie ako 5' : 'nie je vacsie ako 5' ;
$a = 'medium';
?>
<!--
<span class="<?= ($a === 'medium') ? 'medium' : 'big'; ?>">ternarny operator - class</span>
-->
<?php

//$colors2 = ['zlta', 'cervena', 'zelena', 'biela', ];
//foreach($cars as $firma => $model){
//}    
    
    

$cars = [
    'opel'  => ['fabia', 'rapid', 'octavia'],
    'bmw'  => ['m5', 'X5', 'X6']   

];


echo '<table cellpadding="5" cellspacing="5" border="0">';       
    echo '<tr>';
    echo '<td valign="top">';  
    echo 'Firma';  
    echo '</td>';
    echo '<td valign="top">'; 
    echo 'Model';  
    echo '</td>';
    echo '</tr>';

    foreach($cars as $firma => $model){
    echo '<tr>';

    echo '<td valign="top">';  
    echo $firma;  
    echo '</td>';

    echo '<td valign="top">';   
    for($m = 0; $m < count($model); $m++ )  {
        echo $model[$m];
        echo '<br>';
    }
    echo '</td>';

    echo '</tr>';

    };


    

echo '</table>';

/*
v popise funkcie znamena nepovinne []
array explode ( string $delimiter , string $string [, int $limit = PHP_INT_MAX ] )
*/

$names = 'Lu:Le:Kosice:Slovensko' ;

$n = explode(':', $names);

var_dump($n);

$names2 = array('Lu', 'Le', 'Kosice', 'Slovensko');
$n2 = implode(', ', $names2);
var_dump($n2);

//push() add value into array
$cisla = [1, 2, 3];
$cisla = array_push($cisla, 4);
var_dump($cisla);


//shuffle() zamiesa pole

//funny programming

//objects
echo '<br>';
$o = (object) [];
var_dump($o);




//odbc_fetch_object<?php

    
$car1 = (object) [
    'model'  => 'fabia',
    'pocetDveri' => '5',
    'farba' => 'cervena', 
    ];   

$car2 = (object) [
    'model'  => 'rapid',
    'pocetDveri' => '5',
    'farba' => 'cierna', 
    ];  

$car3 = (object) [
    'model'  => 'octavia',
    'pocetDveri' => '5',
    'farba' => 'biela', 
    ];  



$cars = [  
    'ford' => [$car1, $car2, $car3], 
];


echo '<table cellpadding="5" cellspacing="5" border="0">';       
    echo '<tr>';
    echo '<td valign="top">';  
    echo 'Firma';  
    echo '</td>';
    echo '<td valign="top">'; 
    echo 'Model';  
    echo '</td>';
    echo '</tr>';

    foreach($cars as $manufacturer => $carsByManufacturer){
    echo '<tr>';

    echo '<td valign="top">';  
    echo $manufacturer;  
    echo '</td>';

    echo '<td valign="top">';   
    foreach($carsByManufacturer as $car)  {
        echo $car->model . ' - ' . $car->farba . ' - ' . $car->pocetDveri;
        echo '<br>';
    }
    echo '</td>';

    echo '</tr>';

    };


    

echo '</table>';




  

?>
