<?php

$colors = ['blue', 'green', 'red', 'black', ];

for($a = 0; $a < count($colors); $a++) {    
    for($b = 0; $b < count($colors); $b++) {       

    echo '<ul>';
    echo '<li class="' . $colors[$b] . '"> ' . $colors[$b]. ' </li>';
    echo '</ul>';

    }
}

?>