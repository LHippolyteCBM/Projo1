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
        <div class="banner-content banner-img-traveller">
            <h1 class="title-traveller">Transports</h1>
        </div>
    </header>
    

    <main>
        <div class="intro-content">
            <h2>How to come to Earth ?</h2>
            <p>On this page you can find all informations you need in regards to every transports system available to come and go around on Earth.From low budget to premium transport services you will find what you need on this page.</p>
        </div>
        <div class="global-container-content">
            <div class="container-content">
                <img src="img/Aquila_InFlight.jpg" alt="Space Shuttle Picture">
                <h3>Long Range Transport Shuttle</h3>
                <p>To come to Earth you need to take an LRTS, which can transport you from planet to planet until you arrive at Earth docking Space Terminal. </p>
            </div>
            <div class="container-content">
                <img src="img/corbuloSpaceElevator.png" alt="Orbital Elevator Picture" srcset="">
                <h3>Orbital Elevator</h3>
                <p>Once arrived in Earth Space Terminal you need to proceed to the Earth surface, you will need to take one of two transports systems available to you.One of them is the O.E, a giant elevator that go from the Earth surface to Earth's Space Terminal 70Km above the surface!It's the "Budget" way to go down but the queue to use it is long, and you go down along with freight containers and other people.</p>
            </div>
        </div>
        <div class="global-container-content">
            <div class="container-content">
                <img src="img/AtmosShuttle.jpg" alt="Atmospheric Shuttle Picture">
                <h3>Planetary Shuttle and Nuuber</h3>
                <p>The second way to go down to surface is a Premium Planetary Shuttle of the Nuuber compagny, it's faster, less crowded than the elevator and more comfortable! the Nuuber company also provides private drivers and atmospheric vehicules to it's client!</p>
            </div>
            <div class="container-content">
                <img src="img/Monorail.jpg" alt="Futurist bowling photo" srcset="">
                <h3>Ground Transports</h3>
                <p>To go around the surface while keeping your budget in check, feel free to use the Webway Monorail system, as well as the Atmospheric Public Transport System (A.P.T.S).</p>
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