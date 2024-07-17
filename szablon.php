
<!-- Używać jako szablon do innych podstron -->

<?php 
    // To jest flaga dzięki której różne elementy strony wiedzą na jakiej podstronie się znalazły
    session_start();
    $_SESSION['flag'] = ''; // w fladze wstaw nazwę podstrony
?>

<!DOCTYPE html>
<html lang="pl">
    <head>
        <link rel="stylesheet" href="../src/css/styles.css"/> <!-- główne style -->
        <link rel="stylesheet" href=""> <!-- mediaquery -->
        <link rel="stylesheet" href="styles.css"/> <!-- style dla tej konkretnej podstrony -->
        <link rel="shortcut icon" href="">
        <meta charset="UTF-8">
        <meta name="author" content="" /> <!-- wpisz swój nick w pole content -->
        <meta name="description" content="szkoła" />
        <meta name="description" content="nauka" />
        <meta name="description" content="słówka" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>LetsWord!</title>
    </head>
    <body>
        <iframe src="../src/include/header.php" onload="this.before((this.contentDocument.body||this.contentDocument).children[0]);this.remove()"><!-- Dodanie elementu header z folderu include --></iframe>
        
        <iframe src="../src/include/nav.php" onload="this.before((this.contentDocument.body||this.contentDocument).children[0]);this.remove()"><!-- Dodanie elementu nav z folderu include --></iframe>

        <main>
            <!-- Tutaj możesz pisać kontent strony -->
        </main>

        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="../src/js/index.js"></script>
    </body>
</html>