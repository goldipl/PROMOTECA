<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PROMOTECA | Panel klienta - Adresy</title>
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
            <?php include "./components/clients_panel/clients_panel_addresses_content.php"; ?>
        </div>
        <!-- Addresses Modal -->
        <form class="modal_container addresses">
            <div class="modal_container--close-icon"></div>
            <p class="modal_container--title">Edycja adresu wysyłki</p>
            <div class="modal_container--slot">
                <label for="modal_addresses_name">Nazwa firmy / Imię i Nazwisko: *</label>
                <input type="text" name="modal_addresses_name" id="modal_addresses_name" required>
            </div>
            <div class="modal_container--slot">
                <label for="modal_addresses_address">Adres: *</label>
                <input type="text" name="modal_addresses_address" id="modal_addresses_address" required>
            </div>
            <div class="modal_container--slot">
                <label for="modal_addresses_zip_code">Kod pocztowy: *</label>
                <input type="text" name="modal_addresses_zip_code" id="modal_addresses_zip_code" required>
            </div>
            <div class="modal_container--slot">
                <label for="modal_addresses_city">Miasto: *</label>
                <input type="text" name="modal_addresses_city" id="modal_addresses_city" required>
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
        <script src="./js/clients_panel/addresses_modal.js"></script>
    </body>
</html>