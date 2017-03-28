<?php
    session_start();

if ($_SERVER['REQUEST_METHOD'] == 'GET')
{
    session_destroy();
    header('location: ../index.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require_once "connection.php";
    require_once "Validate.php";
    require_once "RegisterValidate.php";

    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $confpass = $_POST['confpass'];
    $checkd = $_POST['check'];

    $validate = new \app\Validate($email, $pass);
    $regValidate = new \app\RegisterValidate($pass, $confpass, $checkd);

    if (strlen($pass)>6 && preg_match('`[A-Z]`',$pass) && preg_match('`[0-9]`',$pass))
    {
        if ($validate->validate($email, $pass) == true)
        {
            if ($regValidate->validatePassword($pass, $confpass) == true)
            {
                if ($regValidate->validateCheck($checkd) == true)
                {
                    $stmt = $db_conn->prepare("INSERT INTO users (email, pass) VALUES (:email, :pass)");
                    $stmt->execute(array("email" => $email, "pass" => $pass));

                    if ($stmt->errorCode() == 23000) {
                        $_SESSION['regmessage'] = "Deze email bestaat al";
                    }
                    else {
                        $_SESSION['regmessage'] = "Je account is aangemaakt";
                    }
                }
                else
                {
                    $_SESSION['regmessage'] = "Je moet algemene voorwaarden accepteren.";
                }
            }
            else
            {
                $_SESSION['regmessage'] = "Je hebt geen gelijke wachtwoorden";
            }
        } else {
            $_SESSION['regmessage'] = "Je hebt geen geldige e-mail ingetoetst";
        }
    }
    else
    {
        $_SESSION['regmessage'] = "Wachtwoord moet minimaal 7 karakters bevaten waarvan een hoofdletter is en een cijfer.";
    }
    header("location: ../index.php");
}

