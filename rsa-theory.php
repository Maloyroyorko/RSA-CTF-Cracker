<?php

$cipher = 2790;
$p_exponent = 17;
$modulus = 3233;
$p = 0;
$q = 0;

for ($i = 2;$i<$modulus; $i++) { //dividing using 2 trigger infiity
    if ($modulus % $i == 0) {
        $p = $i;  $q = $modulus / $p;
        break;
    }
}
echo "Found Factors: $p and $q <br>";

$phi=($p-1)*($q-1);

for ($i = 2; $i < $phi; $i++) { // we can't divide by 2 i vuess ypou know about it?
    if (($i * $p_exponent) % $phi == 1) {
        $d_key = $i;
        break;
  }

                                          }
$p_number = gmp_powm($cipher, $d_key, $modulus);
$d_msg = chr(gmp_intval($p_number)); 
echo "Decrypted Number: ".gmp_strval($p_number)."<br>"; 
echo "Hidden Character: ".$d_msg."<br>";                   

?>
