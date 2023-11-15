<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PROMOTECA | Panel klienta - Dane do FV</title>
        <link rel="shortcut icon" href="./assets/icons/favicon.jpg" type="image/x-icon">
        <link rel="stylesheet" href="./scss/main.css">
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
            <?php include "./components/clients_panel/clients_panel_fv_content.php"; ?>
        </div>
        <!-- FV Modal -->
        <div class="modal_container fv">
            <div class="modal_container--close-icon"></div>
            <p class="modal_container--title">Edycja danych do Faktury</p>
            <div class="modal_container--slot">
                <label for="modal_fv_name">Nazwa firmy / Imię i Nazwisko: *</label>
                <input type="text" name="modal_fv_name" id="modal_fv_name" required>
            </div>
            <div class="modal_container--slot">
                <label for="modal_fv_address">Adres: *</label>
                <input type="text" name="modal_fv_address" id="modal_fv_address" required>
            </div>
            <div class="modal_container--slot">
                <label for="modal_fv_zip_code">Kod pocztowy: *</label>
                <input type="text" name="modal_fv_zip_code" id="modal_fv_zip_code" required>
            </div>
            <div class="modal_container--slot">
                <label for="modal_fv_city">Miasto: *</label>
                <input type="text" name="modal_fv_city" id="modal_fv_city" required>
            </div>
            <div class="modal_container--slot">
                <label for="modal_fv_nip_code">NIP: *</label>
                <input type="text" name="modal_fv_nip_code" id="modal_fv_nip_code" required>
            </div>
            <div class="modal_container--button">
               <button>Zapisz</button>
            </div>
        </div>
        <footer> 
            <?php include "./components/footer.php"; ?> 
        </footer>
        <script src="./js/mobile_searchbar.js"></script>
        <script src="./js/script.js"></script>
        <script src="./js/clients_panel/fv_modal.js"></script>
    </body>
</html>