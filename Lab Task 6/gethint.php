<?php
// Array with names
$a[] = "Annie any";
$a[] = "Briliya Sen";
$a[] = "Candice Acola";
$a[] = "Dua Lipa";
$a[] = "Eva Khan";
$a[] = "Fiona Ahmed";
$a[] = "Gandu Mia";
$a[] = "Hazera Wazb";
$a[] = "Inaya Cola";
$a[] = "Joanna Khan";
$a[] = "Kitley Niya";
$a[] = "Linda Mohammad";
$a[] = "Nina Dobrev";
$a[] = "Opirika Sen";
$a[] = "Petney Prity";
$a[] = "Amana Ayza";
$a[] = "Raquellina Glen";
$a[] = "Cindya Styles";
$a[] = "Dorisaa Swift";
$a[] = "Evena Gomez";
$a[] = "Evitaya Haider";
$a[] = "Sunniva Sarah";
$a[] = "Tove Traha";
$a[] = "Unnayna Suzane";
$a[] = "Viola Nona";
$a[] = "Liza Ann";
$a[] = "Eliza Haidar";
$a[] = "Ellen Digero";
$a[] = "Ahad Mir";
$a[] = "Vicky Kaushal";

// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
  $q = strtolower($q);
  $len=strlen($q);
  foreach($a as $name) {
    if (stristr($q, substr($name, 0, $len))) {
      if ($hint === "") {
        $hint = $name;
      } else {
        $hint .= ", $name";
      }
    }
  }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?>