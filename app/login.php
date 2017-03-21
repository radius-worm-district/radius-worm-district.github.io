<?php
    require_once "connection.php";
  
    if($connection->connect_errno!=0)
    {
        echo "Error: " . $connection->connect_errno;
    }
    else
    {
        $login = $_POST['login'];
        $haslo = $_POST['haslo'];
        
        $sql = "SELECT * FROM users WHERE email='$login' AND wachtwoord='$haslo'";
        
        if($rezult = @$connection->query($sql))
        {
            $countusers = $rezult->num_rows;
            if($countusers>0)
            {
                $wiersz = $rezult->fetch_assoc();
                $user = $wiersz['email'];
                
                $rezult->free_result();
                $message = urlencode("Je bent ingelogd als: " . $user);
                header('location: ../index.php?message=' . $message);
            }
            else{
                echo "Bad login";
            }
        }
        $connection->close();
    }
    
?>