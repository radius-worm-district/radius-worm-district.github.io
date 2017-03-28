<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'GET')
{
    session_destroy();
    header('location: ../index.php');
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require_once "connection.php";
    require_once("Validate.php");

    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $validate = new \app\Validate($email, $pass);

    if ($validate->validate($email, $pass) == true) {
        $stmt = $db_conn->prepare("SELECT * FROM users WHERE email = :email AND pass = :pass");
        $stmt->execute(array("email" => $email, "pass" => $pass));
        $result = $stmt->rowCount();

        if ($result == 1) {
            $_SESSION['logedIn'] = "Je bent ingelogd als: " . $email;
        }
        if ($result == 0) {
            $_SESSION['error'] = "Je hebt verkeerde email of wachtwoord ingetoets";
        }
    } else {
        $_SESSION['error'] = "Je hebt ongeldige email ingetoets";
    }
}
    header("location: ../index.php");
