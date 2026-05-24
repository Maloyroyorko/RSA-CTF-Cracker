<?php

$cipher = gmp_init("28767758880940662779934612526152562406674613203406706867456395986985664083182");

$p_exponent = gmp_init("65537");

$modulus = gmp_init("73069886771625642807435783661014062604264768481735145873508846925735521695159");

$p = gmp_init("189239861511125143212536989589123569301"); //big numbers so take help from factordb.com

$q = gmp_init("386123125371923651191219869811293586459"); //big numbers so take help from factordb.com

$phi = gmp_mul(gmp_sub($p,1),gmp_sub($q,1));

$d_key = gmp_invert($p_exponent,$phi); //from gpt or i used loop to do it at first using logic

$p_number = gmp_powm($cipher,$d_key,$modulus);

echo "Decrypted Text is: ". gmp_strval($p_number). "<br>";

$hex_number=gmp_strval($p_number,16);

echo "Hex Text is: ".$hex_number. "<br>";

$decrypted_text=hex2bin($hex_number);

echo "Decrypted Text is: ".$decrypted_text. "<br>";

?>