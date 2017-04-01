<?php

//colors
$colors = ['blue', 'green', 'red', 'black', ];

echo '<h3>colors</h3>';

for($a = 0; $a < count($colors); $a++) {    
    for($b = 0; $b < count($colors); $b++) {       

    echo '<ul>';
    echo '<li class="' . $colors[$b] . '"> ' . $colors[$b]. ' </li>';
    echo '</ul>';

    }
}

//friends
$friends = ['Jano', 'Fero', 'Peto', 'Ales', 'Riso', 'Marian', 'Kristian', 'Marek', 'Karol', 'Lubo'];

echo '<h3>friends</h3>';

echo '<table>';
for($i = 0; $i < count($friends); $i++) {    
    echo '<tr>';
    echo '<td>';
    echo $friends[$i];
    echo '</td>';
    echo '</tr>';  
};
echo '</table>';

//numbers
echo '<h3>numbers</h3>';

for($n = 1; $n <= 100; $n++) {

    //all
    //echo $n. '<br>';

    //divided by 2
    if($n % 2 === 0) {
       // echo $n. '<br>';
    }

    //divided by 3
    if($n % 3 === 0) {
        echo $n. '<br>';
    }

};



?>