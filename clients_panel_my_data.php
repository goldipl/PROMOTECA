<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PROMOTECA | Panel klienta - Moje dane</title>
        <link rel="shortcut icon" href="./assets/icons/favicon.jpg" type="image/x-icon">
        <link rel="stylesheet" href="./scss/main.css">
        <link rel="stylesheet" href="./css/extras.css">
    </head>
    <body>
        <header> 
            <?php include "./components/topbar.php"; ?> 
            <?php include "./components/nav.php"; ?> 
        </header>
        <div id="main-wrapper">
            <div class="breadcrumbs">
                <ul>
                    <li class="breadcrumb-item">
                        <a href="#">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">Konto</a>
                    </li>
                </ul>
            </div>
            <?php include "./components/clients_panel/clients_panel_my_data_content.php"; ?>
        </div>
        <!-- Data Modal -->
        <form class="modal_container data">
            <div class="modal_container--close-icon"></div>
            <p class="modal_container--title">Edycja Twoich danych</p>
            <div class="modal_container--slot">
                <label for="modal_data_name">Imię: *</label>
                <input type="text" name="modal_data_name" id="modal_data_name" required>
            </div>
            <div class="modal_container--slot">
                <label for="modal_data_surname">Nazwisko: *</label>
                <input type="text" name="modal_data_surname" id="modal_data_surname" required>
            </div>
            <div class="modal_container--slot">
                <label for="modal_data_email">Adres e-mail: *</label>
                <input type="email" name="modal_data_email" id="modal_data_email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
            </div>
            <div class="modal_container--button">
               <button>Zapisz</button>
            </div>
        </form>
        <!-- Password Modal -->
        <form class="modal_container password">
            <div class="modal_container--close-icon"></div>
            <p class="modal_container--title">Zmiana Hasła</p>
            <div class="modal_container--slot">
                <label for="modal_actual_password">Obecne hasło: *</label>
                <input type="password" name="modal_actual_password" id="modal_actual_password" required>
            </div>
            <div class="modal_container--slot">
                <label for="modal_new_password">Nowe hasło: *</label>
                <input type="password" name="modal_new_password" id="modal_new_password" required>
            </div>
            <div class="modal_container--slot">
                <label for="modal_repeat_new_password">Powtórz nowe hasło: *</label>
                <input type="password" name="modal_repeat_new_password" id="modal_repeat_new_password" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
            </div>
            <div class="modal_container--button">
               <button>Zapisz</button>
            </div>
        </form>
        <footer> 
            <?php include "./components/footer.php"; ?> 
        </footer>
        <script src="./js/mobile_searchbar.js"></script>
        <script src="./js/script.js"></script>
        <script src="./js/clients_panel/data_modal.js"></script>
        <script src="./js/clients_panel/password_modal.js"></script>
    </body>
</html>