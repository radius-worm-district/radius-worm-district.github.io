<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>De Gokkers</title>
        <meta name="description" content="It's my study portfolio.">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <header>
            <div class="wrapper">
                <div class="logo">
                    <h2>De Gokkers</h2>
                    <p>Je eigen wed bureau</p>
                </div>
                <div class="login">
                    <label for="hide"><?php
                        if(isset($_GET['message']))
                        {
                            echo "je bent ingelogd als";
                        }
                        else
                        {
                            echo "LogIn";
                        }
                    ?></label>
                    <input type="checkbox" id="hide">
                    <form action="app/login.php" method="POST">
                        <div class="form-group">
                            <label for="Email">E-Mail</label>
                            <input type="email" id="Email" name="login">
                        </div>
                        <div class="form-group">
                            <label for="Password">Wachtwoord</label>
                            <input type="password" id="Password" name="haslo">
                        </div>
                        <div class="form-group">
                            <label for="submit"></label>
                            <input type="submit" id="submit" value="Registreren">
                        </div>
                    </form>
                </div>
            </div>
        </header>
        
        <div class="promo_video">
            <div class="wrapper">
                <iframe src="https://www.youtube.com/embed/VgCqfmAdIHU" allowfullscreen></iframe>
            </div>
        </div>
        <div class="about_registration">
            <div class="wrapper">
                <div class="about">
                    <p>
                        Zit je wel is met het probleem dat je wilt gaan gokken maar geen geld hebt ?
                        vrees niet langer hier is het geweldige product De Gokkers!
                        Neem het tegen elkaar op in dit geweldige Gok race spel! Kies 1 van de 5 wormen en bied een bedrag tussen de 5 en 15 euro.
                        Na de vreselijk spannende race zie je rechts op het scorebord wie er gewonnen heeft. Is jou worm de winnaar ?
                        dan word jou inzet verdubbeld! Zo niet dan word het geld dat je inzette van je saldo afgehaald.
                        Vervolgens kan je weer geld in zetten om nog een race te starten.
                        Zo simpel is het! Dus wacht niet langer registreer je eigen account, login en download het meteen!
                    </p>
                </div>
                <div class="register">
                    <form action="app/register.php" method="POST">
                        <div class="form-group">
                            <label for="email">E-Mail</label>
                            <input type="email" id="email">
                        </div>
                        <div class="form-group">
                            <label for="password">Wachtwoord</label>
                            <input type="password" id="password">
                        </div>
                        <div class="form-group">
                            <label for="confirmPassword">Herhaal Wachtwoord</label>
                            <input type="password" id="confirmPassword">
                        </div>
                        <div class="form-group">
<<<<<<< HEAD
                            <input type="checkbox" id="policyPrivacy">
                            <label for="policyPrivacy">Ik akcepteer Algemene voorwaarden</label>
=======
                            <input type="checkbox" id="policyPrivacy" onclick="privacyPolicy()">
                            <label for="policyPrivacy">Ik accepteer de Algemene voorwaarden</label>
>>>>>>> refs/heads/DeGokkersKevin
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Registreren">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="download">
            <div class="wrapper">
                <form action="app/download.php">
                    <input type="submit" value="Download">
                </form>
            </div>
        </div>
        <footer>
            <div class="wrapper">
                <div class="copy">
                    <p>&#169; by Radius-Worm-District</p>
                </div>
                <div class="privacy">
                    <p>Algemene voorwaarden</p>
                </div>
            </div>
        </footer>

        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
