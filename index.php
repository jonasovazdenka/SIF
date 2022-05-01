<?php

$simple_string = "Bluetooth\n";

echo "Original String: " . $simple_string;

$ciphering = "AES-128-CTR";

$iv_length = openssl_cipher_iv_length($ciphering);
$options = 0;

$encryption_iv = '83917929778';

$encryption_key = "Jonasova";

$encryption = openssl_encrypt($simple_string, $ciphering,
$encryption_key, $options, $encryption_iv);

echo "Encrypted String: " . $encryption . "\n";

$decryption_iv = '83917929778';

$decryption_key = "Jonasova";

$decryption=openssl_decrypt ($encryption, $ciphering,
$decryption_key, $options, $decryption_iv);

echo "Decrypted String: " . $decryption;

?>