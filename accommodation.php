<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;1,200;1,300;1,400&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <div class="banner-img-accommodation banniere-home">
            <?php include "header.php" ?>
        </div>
    </header>

    <main class ="main-font-color">
        <div class="title-content">
            <h2>.Where to sleep ? Where to eat ?</h2>
        </div>
        <div class="vide">
        </div>
        <div class="intro-content">
            <p>There is a lot to see on our beautiful planet Earth. We tried to select for you the most important to visit when you are here for a short time</p>
            <p>To do that, you will need a place to stay, a place to eat, a place to be... You will find on this page some advice about how spend your precious time.</p>
        </div>
        <div class="global-container-content">
            <div class="container-content">
                <img src="img/eat1.jpeg" alt="">
                <h3>French food</h3>
                <p>Food is a necessity, and can also be a source of great pleasure. Pleasure is amplified with french food, known as the best in the universe.</p>
            </div>
            <div class="container-content">
                <img src="img/eat2.jpeg" alt="">
                <h3>The first "Robot Chief" in the universe</h3>
                <p>You sould find a way to stop at the "0010110" restaurant of the first robot Chief in the universe. Cooking for all at the lowest price, Chief Robuchon 2.1.6 Delta will prepare a masterpiece for you.</p>
            </div>
        </div>
        <div class="global-container-content">
            <div class="container-content appa">
                <img src="img/hostel1.jpeg" alt="">
                <h3>The last pool</h3>
                <p>Come and spend some time in the last swimming pool still functionnal ! Please contact us for more information about reservation (17 years of queue for now).</p>
            </div>
            <div class="container-content appa">
                <img src="img/hostel2.jpeg" alt="">
                <h3>Six stars hostels</h3>
                <p>On Earth, any hostel under 6 stars is not allowed to accept visitors from outer space. You will find a place to stay at your convenience by choosing them.</p>
            </div>
        </div>
    </main>
    <?php include 'burger.php'; ?>
    <footer>
        <?php include 'footer.php'; ?>
    </footer>
    <script src="burger.js"></script>
    <script src="apparition.js"></script>
    <script src="card.js"></script>
    <script src="popBtn.js"></script>
    <script src="meteo.js"></script>
    <script src="navbar.js"></script>
    <script src="nav.js"></script>
</body>

</html>