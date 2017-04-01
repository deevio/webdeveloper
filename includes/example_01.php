<?php
//colors
$colors = ['blue', 'green', 'red', 'black', ];

for($a = 0; $a < count($colors); $a++) {    
    for($b = 0; $b < count($colors); $b++) {       

    echo '<ul>';
    echo '<li class="' . $colors[$b] . '"> ' . $colors[$b]. ' </li>';
    echo '</ul>';

    }
}

//friends
$friends = ['Jano', 'Fero', 'Peto', 'Ales', 'Riso', 'Marian', 'Kristian', 'Marek', 'Karol', 'Lubo'];

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

for($n = 1; $n < 101; $n++) {
    echo $n. '<br>';
};



?>