<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PROMOTECA | Strona główna</title>
        <link rel="stylesheet" href="./css/swiper-bundle.css" />
        <link rel="stylesheet" href="./scss/main.css">
    </head>
    <body class="main">
        <header> 
            <?php include "./components/nav.php"; ?> 
        </header>
        <div id="main-wrapper">
            <?php include "./components/main_page/swiper.php"; ?> 
            <footer> 
                <?php include "./components/footer.php"; ?> 
            </footer>
        </div>
        <script src="./js/mobile_searchbar.js"></script>
        <script src="./js/swiper-bundle.js"></script>
        <script src="./js/swiper.js"></script>
        <script src="./js/script.js"></script>
    </body>
</html>