<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PROMOTECA | Strona główna</title>
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
            <?php include "./components/main_page/welcome_seo_text.php"; ?> 
            <?php include "./components/main_page/swiper.php"; ?> 
            <?php include "./components/main_page/categories_swiper.php"; ?> 
            <?php include "./components/main_page/most_frequently_purchased.php"; ?> 
            <?php include "./components/main_page/best_offers.php"; ?> 
            <?php include "./components/main_page/bestsellers.php"; ?> 
            <?php include "./components/main_page/our_realizations.php"; ?> 
            <?php include "./components/common/support.php"; ?> 
            <?php include "./components/main_page/our_offert.php"; ?> 
            <?php include "./components/main_page/blog.php"; ?> 
            <?php include "./components/main_page/why_us.php"; ?> 
        </div>
        <footer> 
            <?php include "./components/footer.php"; ?> 
        </footer>
        <script src="./js/mobile_searchbar.js"></script>
        <script src="./js/swiper-bundle.js"></script>
        <script src="./js/swiper.js"></script>
        <script src="./js/script.js"></script>
    </body>
</html>