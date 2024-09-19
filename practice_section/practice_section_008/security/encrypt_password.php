<?php
function encryptPassword($password) {
    return password_hash($password, PASSWORD_BCRYPT, ['cost' => 10]);
}

function verifyPassword($inputPassword, $storedHashedPassword) {
    return password_verify($inputPassword, $storedHashedPassword);
}
?>
