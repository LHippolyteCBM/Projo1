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
        <div class="banniere-home">
            <h1>Welcome on Earth</h1>
        </div>
    </header>


    <main>

        <div class="discover">
            <div class="discover-in">
                <h2>.Discovering our planet</h2>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum eveniet asperiores nemo quasi, dignissimos deserunt sapiente? Incidunt aspernatur ad tenetur asperiores quia reiciendis recusandae iste culpa, nam, esse dolorem eos!
            </div>
            <div class="triangle">
            </div>



            <h2 class="come">.Come!</h2>
            <div class="robot-text">
                and meet our local resident !
            </div>
            <div class="robot">
                <div class="robot-img-cadre appa">
                    <img class="robot-img" src="https://picsum.photos/400/300" alt="" />
                </div>
                <div class="robot-img-cadre appa">
                    <img class="robot-img" src="https://picsum.photos/400/300" alt="" />
                </div>
                <div class="robot-img-cadre appa">
                    <img class="robot-img" src="https://picsum.photos/400/300" alt="" />
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
            Lorem, ipsum dolor sit amet
            consectetur adipisicing elit.</br>
            * Ea, nulla! Blanditiis molestias mollitia doloribus natus</br>
            veniam et commodi, nesciunt</br>
            tempore quibusdam nostrum placeat ipsum </br>
            laborum hic libero. Asperiores, libero corporis.</p>
        <div class="robot-img-cadre appa">
            <img class="robot-img" src="https://picsum.photos/800/300" alt="" />
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

        <div class="meteo-border"><h2>.Earth Meteo</h2></div>
        
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
    <script src="nav.js"></script>
</body>

</html>