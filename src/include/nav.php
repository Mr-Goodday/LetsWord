<nav id="nav">
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

    <ul>
        <li class="list">
            <?php if($flag == 'Utworz-Zestaw') echo '<a class="active">'; else echo '<a href="'.$path.'Utworz-Zestaw/">'; ?>
            <ion-icon name="add-circle-outline"></ion-icon>Utwórz zestaw
        </li></a>

        <li class="drop_down">
            <div class="list">
                <a>
                    <ion-icon name="add-circle-outline"></ion-icon>Wybierz zestaw<ion-icon name="chevron-down-outline"></ion-icon>
                </a>
            </div>

            <div class="drop_content">
                <a href=""><ion-icon name="caret-forward-outline"></ion-icon>Ogólny</a>
                <a href=""><ion-icon name="caret-forward-outline"></ion-icon>Szkolny</a>
            </div>
        </li>

        <li class="drop_down">
            <div class="list">
                <a href="">
                    <ion-icon name="add-circle-outline"></ion-icon>
                    Twoje zestawy
                    <ion-icon name="chevron-down-outline"></ion-icon>
                </a>
            </div>

            <div class="drop_content">
                <a href=""><ion-icon name="caret-forward-outline"></ion-icon><!-- tutaj nazwa zestawu --></a>
                <a href=""><ion-icon name="caret-forward-outline"></ion-icon><!-- tutaj nazwa zestawu --></a>
                <a href=""><ion-icon name="caret-forward-outline"></ion-icon><!-- tutaj nazwa zestawu --></a>
                <a href=""><ion-icon name="caret-forward-outline"></ion-icon><!-- tutaj nazwa zestawu --></a>
            </div>
        </li>
    </ul>

    <footer>
        <a href=""><ion-icon name="person-circle-outline"></ion-icon>Konto</a>

        <a href=""><ion-icon name="settings-outline"></ion-icon>Ustawienia</a>

        <?php if($flag == 'O-Nas') echo '<a class="active">'; else echo '<a href="'.$path.'O-Nas/">'; ?>
            <ion-icon name="information-circle-outline"></ion-icon>O nas</a>
            
    </footer>

</nav>