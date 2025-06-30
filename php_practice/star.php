<?php
for ($i = 0; $i < 10; $i++) {
    for ($s = 0; $s < $i; $s++) {
        echo "*";
    }
    echo "<br>";
}
for ($i = 10; $i > 0; $i--) {
    for ($j = 0; $i > $j; $j++) {
        echo "*";
    }
    echo "<br>";
}


for ($i = 10; $i > 0; $i--) {
    echo str_repeat("*", $i) . "<br>";
}
