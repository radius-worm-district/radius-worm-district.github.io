<?php
    session_start();
    require_once "connection.php";

    $email = $_GET['email'];
    $pass = $_GET['pass'];

    $stmt = $db_conn->prepare("SELECT * FROM users WHERE email = :email AND pass = :pass");
    $stmt->execute(array("email" => $email, "pass" => $pass));

    if ($logdIn = $stmt->fetchAll(PDO::FETCH_ASSOC))
    {
        foreach ($logdIn as $logd)
        {
            $_SESSION['logedIn'] = $logd['email'];
            header("location: ../index.php");
        }
    }
    else{
        $_SESSION['logInError'] = "Je hebt verkeerde email of wachtwoord ingetoetst";
        header("location: ../index.php");
    }
