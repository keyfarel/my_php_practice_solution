<?php
if (isset($_POST['register'])) {
    $name = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($name) || empty($email) || empty($password)) {
        echo "Cannot register empty fields";
    } else {
        echo "You have registered successfully <br><br>";
        $register = array($name, $email, $password);
        print_r($register);
    }
}
?>
