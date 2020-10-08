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
        <div class="banniere-home">
            <?php include "header.php" ?>
        </div>
    </header>


    <main>

        <div class="discover">
            <div class="discover-in">
                <h2>.Discover our planet</h2>
               <b>Welcome on Nucleus !</b> The official earth guide. Come and visit our GalaxyWilde known attractions.
               You will be more than welcome in our restaurants to enjoy our local food and you can spend the rest of 
               the day shopping in our amazing shops ! You can try amazing things like music listening or cinema,
               exclusive earth activities. Let's share together what earth has to offer ! 
            </div>
            <div class="triangle">
            </div>
        </div>


        <h2 class="come">.Come!</h2>
        <div class="robot-text">
            <p>as you are and meet our local resident !</p>
        </div>
        <div class="robot">
            <div class="robot-img-cadre">
                <div class="home-image-slider">
                    <figure>
                        <img src="/img/photos-hobby-g29arbbvPjo-unsplash.jpg" alt>
                        <img src="/img/robot.jpg" alt>
                        <img src="/img/andro.jpg" alt>
                        <img src="/img/trum.jpg" alt>
                        <img src="/img/term.jpg" alt>
                    </figure>
                </div>
            </div>
        </div>
        </div>



    </main>
    <h2 class="certif-text">.Certification</h2>

    <div class="certification">

        <div class="card-certif appa">
            <div class="rond-certif">
                <img src="icone/rsz_nuclear.png">
            </div>
            <div class="button-text-certif">
                <p>Nuclear friendly</p>
                <button class="popBtn">Read More</button>
            </div>
        </div>

        <div class="popDiv">
            <div class="triangle-pop"></div>
            <div class="text-inside-pp">
                1
            </div>
        </div>


        <div class="card-certif appa">
            <div class="rond-certif">
                <img src="icone/rsz_nuclear.png">
            </div>
            <div class="button-text-certif">
                <p>Nuclear friendly</p>
                <button class="popBtn">Read More</button>
            </div>
        </div>

        <div class="popDiv">
            <div class="triangle-pop"></div>
            <div class="text-inside-pp">
                2
            </div>
        </div>

        <div class="card-certif appa">
            <div class="rond-certif">
                <img src="icone/rsz_nuclear.png">
            </div>
            <div class="button-text-certif">
                <p>Nuclear friendly</p>
                <button class="popBtn">Read More</button>
            </div>
        </div>

        <div class="popDiv">
            <div class="triangle-pop"></div>
            <div class="text-inside-pp">
                3
            </div>
        </div>


        <div class="card-certif appa">
            <div class="rond-certif">
                <img src="icone/rsz_nuclear.png">
            </div>
            <div class="button-text-certif">
                <p>Nuclear friendly</p>
                <button class="popBtn">Read More</button>
            </div>
        </div>

        <div class="popDiv">
            <div class="triangle-pop"></div>
            <div class="text-inside-pp">
                4
            </div>
        </div>

    </div>


    <div class="paysage">
        <p><b>Amazing Landscape</b></br>
            Earth got some marvelous places to stop by.</br>
            veniam et commodi, nesciunt</br>
            tempore quibusdam nostrum placeat ipsum </br>
            laborum hic libero. Asperiores, libero corporis.</p>
        <div class="robot-img-cadre appa">
            <img class="robot-img" src="img/landscape.jpg" alt="" />
        </div>
    </div>

    <div class="meteo">

        <div class="meteo-card-wrapper">

            <div class="meteo-card appa">
                <img class="meteo-img" src="https://picsum.photos/130/130" alt="">
                <p class="city-name">Paris</p>
                <div class="meteo-temp"></div>
                <div class="meteo-hour"></div>
            </div>

            <div class="meteo-card appa">
                <img class="meteo-img" src="https://picsum.photos/130/130" alt="">
                <p class="city-name">Tokyo</p>
                <div class="meteo-temp"></div>
                <div class="meteo-hour"></div>
            </div>

            <div class="meteo-card appa">
                <img class="meteo-img" src="https://picsum.photos/130/130" alt="">
                <p class="city-name">London</p>
                <div class="meteo-temp"></div>
                <div class="meteo-hour"></div>
            </div>

            <div class="meteo-card appa">
                <img class="meteo-img" src="https://picsum.photos/130/130" alt="">
                <p class="city-name">New York</p>
                <div class="meteo-temp"></div>
                <div class="meteo-hour"></div>
            </div>

        </div>

        <div class="meteo-border">
            <h2>.Earth Meteo</h2>
        </div>

    </div>


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