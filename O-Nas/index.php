<?php 
    session_start();
    $_SESSION['flag'] = 'O-Nas';
?>

<!DOCTYPE html>
<html lang="pl">
    <head>
        <link rel="stylesheet" href="../src/css/styles.css"/> <!-- główne style -->
        <link rel="stylesheet" href=""> <!-- mediaquery -->
        <link rel="stylesheet" href="styles.css"/> <!-- style dla tej konkretnej podstrony -->
        <link rel="shortcut icon" href="">
        <meta charset="UTF-8">
        <meta name="author" content="Mr.D" />
        <meta name="description" content="szkoła" />
        <meta name="description" content="nauka" />
        <meta name="description" content="słówka" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>LetsWord!</title>
    </head>
    <body>
        <iframe src="../src/include/header.php" onload="this.before((this.contentDocument.body||this.contentDocument).children[0]);this.remove()"><!-- Dodanie elementu header z folderu include --></iframe>

        <div id="container">
            <img id="corsLogo" src="../src/img/cors_logo.png" alt="">

            <h1>O Nas</h1>

            <span>Witaj, tutaj Cors czyli grupa, która stworzyła tą stronę. Czym się zajmujemy? W sumie ciężko to opisać. Po prostu uwielbiamy wykonywać ciekawe pomysły, które przyjdą nam do głowy. Jesteś ciekawy jakie osoby tworzą nasz zespół albo jakie projekty stworzyliśmy? Sprawdź poniżej</span>

            <h2>Znajdziesz Nas: <a href="https://www.instagram.com/cors.official?igsh=ZG9udmFwNmE2ajZt" target="_blank">@instagram</a></h2>

            <h2>Nad Projektem pracowali:</h2>
            <ul>
                <li>
                    <h3><ion-icon name="caret-forward-outline"></ion-icon>Szymon Sikorski<p>| Ciekawe_pl</p></h3>
                    <h4>//tutaj co robił//</h4>
                </li>
                <li>
                    <h3><ion-icon name="caret-forward-outline"></ion-icon>Krystian Dzień<a href="http://goodday.great-site.net/" target="_blank">| Mr.D</a></h3>
                    <h4>Grafik, UI & UX Designer, Front-End Developer</h4>
                </li>
                <li>
                    <h3> <ion-icon name="caret-forward-outline"></ion-icon>Filip Gębala<p>| Fenix7 </p></h3>
                    <h4>Front-End Developer</h4>
                </li>
                <li>
                    <h3> <ion-icon name="caret-forward-outline"></ion-icon>Jędrzej Świszcz<p>| Jędruś </p></h3>
                    <h4>Back-End & Front-End Developer</h4>
                </li>
                <li>
                    <h3> <ion-icon name="caret-forward-outline"></ion-icon>Adam Rosmanowski<p>| Rosmana06 </p></h3>
                    <h4>Back-End Developer</h4>
                </li>
                <li>
                    <h3> <ion-icon name="caret-forward-outline"></ion-icon>Daniel Mielech<a href="http://ancher.pl/" target="_blank">| Ancherpl </a></h3>
                    <h4>Back-End Developer</h4>
                </li>
            </ul>
        </div>

        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="../src/js/index.js"></script>
    </body>
</html>