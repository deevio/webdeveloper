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

?>