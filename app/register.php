<?php
    session_start();
    require_once "connection.php";
    $email = $_GET['email'];
    $pass = $_GET['pass'];

    $stmt = $db_conn->prepare("INSERT INTO users (email, pass) VALUES (:email, :pass)");
    $stmt->execute(array("email" => $email, "pass" => $pass));

    if ($stmt->errorCode() == 23000)
    {
        $_SESSION['emailerror'] = "Deze email bestaat al";
        header("location: ../index.php");
    }
    else
    {
        $_SESSION['created'] = "Je account is aangemaakt";
        header("location: ../index.php");
    }

