<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <?php include "header.php" ?>
        <div class="banniere">
            <h1 class="title-banner">Welcome!</h1>
        </div>
    </header>
    
    <main class="main-page-container">
        <div class="global-card-container global-card-container-home">
            <div class="card-container card-container-home">
                <div class="card-container-hidden"></div>
                <div class="card-header card-header-home">
                <div class="home-image-slider">
                    <figure>
                        <img src="/img/photos-hobby-g29arbbvPjo-unsplash.jpg" alt>
                        <img src="/img/adrien-converse-kCrrUx7US04-unsplash.jpg" alt>
                        <img src="/img/leyy-71SHXwBLp5w-unsplash.jpg" alt>
                        <img src="/img/zachary-smith-DgBNkXB-ckI-unsplash.jpg" alt>
                        <img src="/img/photos-hobby-g29arbbvPjo-unsplash.jpg" alt>
                    </figure>
                </div>
                </div>
                <div class="card-button">Learn more</div>
            </div>
        </div>
    </main>


    <?php include 'burger.php'; ?>
    <footer>
        <?php include 'footer.php'; ?>
    </footer>
    <script src="burger.js"></script>
    <script src="card.js"></script>
</body>

</html>