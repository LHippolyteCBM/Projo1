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
        <div class="banner-content banner-img-things">
            <h1>Things to do</h1>
        </div>
    </header>
    

    <main>
        <div class="intro-content">
            <h2>Top activities</h2>
            <p>Planet Earth offers many great activities. Whatever your favorite hobbies are, you’ll find something you like here. We provide a large offer of food and drinks places, as well as cultural and sportive activities. Moreover, our great planet offers a variety of landscapes. You can visit ancient beaches, old mountains, or countryside. All places are friendly for families, and robots.</p>
            <p>Each week you’ll find here our top things to do on planet Earth. All our activities are all-inclusive if you booked your trip thanks to our website. </p>
        </div>
        <div class="global-container-content">
            <div class="container-content">
                <img src="img/food-todo.jpg" alt="Diner picture">
                <h3>Best burger place in town</h3>
                <p>You will eat the best burgers at Archie’s. It offers all classic flavours in 3K30 : Wasabi KitKat, soft-shell crab, Sausage and Beer Doritos, Shrimp Yogurt. Get free medium Fries every Friday, exclusively with Mobile Order & Pay with any min. $1 purchase.</p>
            </div>
            <div class="container-content">
                <img src="img/nuclear-plant-todo.jpg" alt="Nuclear plant photo" srcset="">
                <h3>Ultimate nuclear plant</h3>
                <p>One of the most famous attractions on Earth is the ultimate nuclear plant. People who visit this place always say : “There is a before and an after Nuclear plant”. Indeed, after visiting, half of visitors have a new tooth or finger.</p>
            </div>
            <div class="container-content">
                <img src="img/wild-town-todo.jpg" alt="Picture of a wild city" srcset="">
                <h3>Wild town</h3>
                <p>This is the coolest place for nature lovers. Here, you’ll enter into the old human world. We strongly advise you to visit it with one of our bodyguards (for as little as $999 per hour). </p>
            </div>
        </div>
        <div class="global-container-content">
            <div class="container-content">
                <img src="img/sport.jpg" alt="Image of tennis ball">
                <h3>Urban sport</h3>
                <p>Whether you’re a robot, an alien or a human, you’ll enjoy our urban sport. The object of the game is to score more points than your opponents. Players do this by scoring goals which is done by placing a slightly deflated volleyball called the Quaffle into the opposition's baskets giving them 10 points, and by capturing the Golden Snitch which is worth 30 points.</p>
            </div>
            <div class="container-content">
                <img src="img/robot-games.jpg" alt="Futurist bowling photo" srcset="">
                <h3>Robots games</h3>
                <p>If you want to enjoy a late night game, we recommend you to try the robot games. A game of bowling consists of ten frames. In each frame, the bowler will have two chances to knock down as many pins as possible with their bowling ball. In games with more than one bowler, as is common, every bowler will take their frame in a predetermined order before the next frame begins. If a bowler is able to knock down all ten pins with their first ball, he is awarded a strike.</p>
            </div>
            <div class="container-content">
                <img src="img/museum.jpg" alt="Picture of a museum" srcset="">
                <h3>Human museum</h3>
                <p>This incredible museum will show you how humans used to live in 2020. For instance, you will be able to admire the surgical mask people were wearing all the time because of a dangerous virus called “Covid19”. </p>
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