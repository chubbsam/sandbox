<?php
 
$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
// Output: 54esmdr0qf
echo substr(str_shuffle($permitted_chars), 0, 10);
 
$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
// Output: video-g6swmAP8X5VG4jCi.mp4
echo 'video-'.substr(str_shuffle($permitted_chars), 0, 16).'.mp4';
 
$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
 
function generate_string($input, $strength = 16) {
    $input_length = strlen($input);
    $random_string = '';
    for($i = 0; $i < $strength; $i++) {
        $random_character = $input[mt_rand(0, $input_length - 1)];
        $random_string .= $random_character;
    }
 
    return $random_string;
}
 
// Output: iNCHNGzByPjhApvn7XBD
echo generate_string($permitted_chars, 20);
 
// Output: 70Fmr9mOlGID7OhtTbyj
echo generate_string($permitted_chars, 20);
 
// Output: Jp8iVNhZXhUdSlPi1sMNF7hOfmEWYl2UIMO9YqA4faJmS52iXdtlA3YyCfSlAbLYzjr0mzCWWQ7M8AgqDn2aumHoamsUtjZNhBfU
echo generate_string($permitted_chars, 100);
  
 
?>