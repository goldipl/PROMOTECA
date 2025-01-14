<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PROMOTECA | Karta produktu</title>
        <link rel="shortcut icon" href="./assets/icons/favicon.jpg" type="image/x-icon">
        <link rel="stylesheet" href="./css/swiper-bundle.css" />
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
         
            <?php include "./components/products_card/products_card_gallery_open.php"; ?>
            <?php include "./components/products_card/products_card_description_client.php"; ?>
            <?php include "./components/common/support.php"; ?>
            <?php include "./components/products_card/products_card_recommended.php"; ?>
          
        </div>
        <footer> 
            <?php include "./components/footer.php"; ?> 
        </footer>
        <script src="./js/mobile_searchbar.js"></script>
        <script src="./js/script.js"></script>
        <script src="./js/accordion_title.js"></script>
        <script src="./js/products_page/products_gallery.js"></script>
        <script src="./js/products_page/opinions_accordion.js"></script>
        <script src="./js/swiper-bundle.js"></script>
        <script src="./js/swiper.js"></script>
    </body>
</html>