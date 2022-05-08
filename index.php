<!DOCTYPE html>
<html>

<body>

    <?php
    $txt = "Skakal pes pres oves";
    $key = "jonasova";
    $match_key = "";

    $encrypted = "";
    $decrypted = "";

    class zdenka
    {
        function my_encrypt($txt, $key)
        {
            $encrypted = "";
            $index = 0;
            for ($x = 0; $x < strlen($txt); $x++) {
                $num1 = ord($txt{
                $x});

                # cycle index
                if ($index == (strlen($key) - 1)) {
                    $index = 0;
                }
                $num2 = ord($key{
                $index});
                $index++;
                $sum = $num1 + $num2;

                $encrypted .= chr($sum);
            }
            return $encrypted;
        }

        function my_decrypt($encrypted, $key)
        {
            $index = 0;
            for ($x = 0; $x < strlen($encrypted); $x++) {
                $num1 = ord($encrypted{
                $x});

                # cycle index
                if ($index == (strlen($key) - 1)) {
                    $index = 0;
                }

                $num2 = ord($key{
                $index});
                $index++;
                $sum = $num1 - $num2;

                $decrypted .= chr($sum);
            }
            return $decrypted;
        }
    }

    $c = new zdenka();

    $encrypted = $c->my_encrypt($txt, $key);
    $decrypted = $c->my_decrypt($encrypted, $key);

    echo "To encrypt: $txt<br>";
    echo "Encrypted text: $encrypted<br>";
    echo "decrypted text: $decrypted<br>";
    ?>

</body>

</html>
