<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PROMOTECA | Karta produktu</title>
        <link rel="shortcut icon" href="./assets/icons/favicon.jpg" type="image/x-icon">
        <link rel="stylesheet" href="./scss/main.css">
    </head>
    <body class="products_card_page">
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
                        <a href="#">Gadżety biurowe</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">Akcesoria biurowe</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">Klip do dokumentów V2794-08</a>
                    </li>
                </ul>
            </div>
            <div class="row__container">
                <aside>
                    <?php include "./components/common/aside_menu.php"; ?> 
                    <?php include "./components/common/aside_boxes.php"; ?> 
                </aside>
                <div class="col_10__container">
                    <?php include "./components/products_card/products_card_gallery_open.php"; ?>
                    <?php include "./components/products_card/products_card_description_client.php"; ?>
                    <?php include "./components/products_card/products_card_recommended.php"; ?>
                </div>
            </div>
        </div>
        <footer> 
            <?php include "./components/footer.php"; ?> 
        </footer>
        <script src="./js/mobile_searchbar.js"></script>
        <script src="./js/script.js"></script>
        <script src="./js/accordion_title.js"></script>
        <script src="./js/products_page/products_gallery.js"></script>
        <script src="./js/products_page/opinions_accordion.js"></script>
    </body>
</html>