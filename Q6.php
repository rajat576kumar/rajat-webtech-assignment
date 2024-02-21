<?php
$storedUsername = 'user123';
$storedPassword = 'password123';
$userInputUsername = $_POST['username'];
$userInputPassword = $_POST['password'];
if ($userInputUsername === $storedUsername && $userInputPassword === $storedPassword) {
    echo "Login successful";
} else {
    echo "Invalid credentials";
}

?>