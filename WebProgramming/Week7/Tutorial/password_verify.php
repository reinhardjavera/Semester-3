    <?php

    // Deklarasi variabel
    $input = "rahasia";
    $hashedPwd = password_hash($input, PASSWORD_BCRYPT);

    // Verifikasi password
    echo "<h3>Test 1: String Password = rahasia</h3>";
    if (password_verify("rahasia", $hashedPwd)) {
        echo "Password Cocok";
    } else {
        echo "Password TIDAK Cocok";
    }

    // Verifikasi password kedua
    echo "<h3>Test 2: String Password = 12345678</h3>";
    if (password_verify("12345678", $hashedPwd)) {
        echo "Password Cocok";
    } else {
        echo "Password TIDAK Cocok";
    }
