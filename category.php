<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PROMOTECA | Strona kategorii</title>
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
                        <a href="#">Gadżety biurowe</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">Akcesoria biurowe</a>
                    </li>
                </ul>
            </div>
            <div class="category-seo-top-text">
                <h1 class="title">Akcesoria biurowe reklamowe</h1>
                <p class="description">Menadżer ds. reklamy? Specjalista ds. Marketingu? Właściciel małej firmy? To nie ma znaczenia! Promoteca.pl ma do zaproponowania akcesoria biurowe reklamowe dopasowane do różnych potrzeb.</p>
            </div>
            <div class="row__container">
                <aside>
                    <?php include "./components/common/aside_menu.php"; ?> 
                    <?php include "./components/category/category_filters.php"; ?>  
                </aside>
                <div class="col_10__container">
                    <?php include "./components/category/category_main.php"; ?> 
                    <?php include "./components/common/pagination.php"; ?>  
                </div>
            </div>
            <?php include "./components/category/seo_text.php"; ?>
            <?php include "./components/common/support.php"; ?>
            <?php include "./components/common/opinions.php"; ?>
        </div>
        <footer> 
            <?php include "./components/footer.php"; ?> 
        </footer>
        <script src="./js/mobile_searchbar.js"></script>
        <script src="./js/script.js"></script>
        <script src="./js/category_filters.js"></script>
        <script src="./js/accordion_title.js"></script>
    </body>
</html>