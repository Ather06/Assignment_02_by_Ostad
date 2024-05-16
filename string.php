<?php
$strings = ["Hello", "World", "PHP", "Programming"];
function countVowels($string){
    $vowels = ["a","e","i","o","u", "A", "E", "I", "O", "U"];
    $count = 0;
    foreach(str_split($string) as $character){
        if(in_array($character, $vowels)){
            $count = $count+1;
        }
    }
    return $count;
}
foreach($strings as $string){
    $countVowel = countVowels($string);
    $reversedString = strrev($string);
    echo "Original String: " . $string . "," ." Vowel Count: " . $countVowel . "," . " Reversed String: " . $reversedString."<br>";
}



?>