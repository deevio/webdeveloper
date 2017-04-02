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

echo '<h4>all</h4>';

for($n1 = 1; $n1 <= 100; $n1++) {
    //all
    echo $n1. '<br>';
};

echo '<h4>divided by 2</h4>';

for($n2 = 1; $n2 <= 100; $n2++) {
    //divided by 2
    if($n2 % 2 === 0) {
       echo $n2. '<br>';
    }
};

echo '<h4>divided by 3</h4>';
for($n3 = 1; $n3 <= 100; $n3++) {
    //divided by 3
    if($n3 % 3 === 0) {
        echo $n3. '<br>';
    }
};



?>