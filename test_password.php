<?php
// Test common passwords against the hash
$hash = '$2y$10$rmBnmFdpbtw4DatgAogaf.uAJp.EYQs8koJ.I7ThwspQw7SVYo3ce';

$common_passwords = [
    'admin',
    'admin123',
    'password',
    'password123',
    '123456',
    'Admin@123',
    'admin@123',
    '12345678',
    'qwerty',
    'letmein',
    'welcome',
    'test123',
    'grocery',
    'grocerry',
    'Admin',
    'Password'
];

echo "Testing common passwords...\n\n";

foreach ($common_passwords as $password) {
    if (password_verify($password, $hash)) {
        echo "✓ MATCH FOUND! Password is: $password\n";
        exit;
    } else {
        echo "✗ $password\n";
    }
}

echo "\nNo match found. You may need to reset the password.\n";
?>
