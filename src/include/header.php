<header>
    <div id="scroll-viewer"></div>
    <?php // Sprawdzenie flagi i ustawienie operatora wyjścia z pliku jeżeli użytkownik nie znajduje się na stronie home
    //
    // Przykład jak użyć:
    //      <?php echo '<a href="'.$path.'reszta/ścieżki"></a>';
    //      i zamykamy tag php

    session_start(); $flag = $_SESSION['flag'];
    switch($flag){
        case 'home':
            $path = '';
            break;

        default:
            $path = '../';
            break;
    }
    ?>

    <div>
        <?php echo '<a id="logo" href="'.$path.'">'; ?>
            <img src="#" alt="logo"><h1>LetsWord!</h1>
        </a>
        
        <?php // Sprawdzenie flagi i usunięcie elementu navBtn jeżeli znajdujesz się na podstronie O-Nas
        switch($flag){
            case 'O-Nas':
                echo'';
                break;
            default:
                echo'<div id="navBtn"><ion-icon id="navOpenClose" name="close-outline"></ion-icon></div>';
                break;
        }
        ?>
    </div>

    <div>
        <div id="timeCounter">
            <!-- <h2 id="startTimer">Start</h2> -->
            <h3>czas nauki:</h3>
            <h2 id="timeCounterInner">00:00:00</h2>
        </div>

        <div id="User">
            <h3 id="-name">Kacperek</h3>
            <img id="-prof" src="#" alt="profilowe">
        </div>
    </div>
</header>