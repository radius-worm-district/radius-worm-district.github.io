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

    if ($validate->validate($email, $pass) == true)
    {
        $stmt = $db_conn->prepare("SELECT * FROM users WHERE email = :email");
        $stmt->execute(array("email" => $email));
        $userAll = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($stmt->rowCount() == 1) {
            if (password_verify($pass, $userAll['pass']))
            {
                $_SESSION['logedIn'] = "Je bent ingelogd als: " . $email;
            }
            else
            {
                $_SESSION['error'] = "Je hebt verkeerde email of wachtwoord ingetoets";
            }
        }
        if ($stmt->rowCount() == 0) {
            $_SESSION['error'] = "Je hebt verkeerde email of wachtwoord ingetoets";
        }
    } else {
        $_SESSION['error'] = "Je hebt ongeldige email ingetoets";
    }
}
    header("location: ../index.php");
