<?php
function count_vowels($kata)
{

    $hasil = 0;

    for ($i = 0; $i < strlen($kata); $i++) {
        if ($kata[$i] == "a" || $kata[$i] == "i" || $kata[$i] == "u" || $kata[$i] == "e" || $kata[$i] == "o") {
            $hasil += 1;
        }
    }
    return $hasil;
}

$kata = "";
echo count_vowels($kata);
