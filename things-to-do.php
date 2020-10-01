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
        <div class="banner-things">
            <h1>Things to do</h1>
        </div>
    </header>
    

    <main>
        <div class="intro-things">
            <h2>Top activities</h2>
            <p>I don't know what you're talking about. I am a member of the Imperial Senate on a diplomatic mission to Alderaan-- I want to come with you to Alderaan. There's nothing for me here now. I want to learn the ways of the Force and be a Jedi, like my father before me.</p>
            <p>You don't believe in the Force, do you? She must have hidden the plans in the escape pod. Send a detachment down to retrieve them, and see to it personally, Commander. There'll be no one to stop us this time!</p>
        </div>
        <div class="global-container-things">
            <div class="container-things">
                <img src="img/food-todo.jpg" alt="Diner picture">
                <h3>Best burger place in town</h3>
                <p>What?! All right. Well, take care of yourself, Han. I guess that's what you're best at, ain't it? No! Alderaan is peaceful. We have no weapons. You can't possibly… All right. Well, take care of yourself, Han. I guess that's what you're best at, ain't it?</p>
            </div>
            <div class="container-things">
                <img src="img/nuclear-plant-todo.jpg" alt="Nuclear plant photo" srcset="">
                <h3>Nuclear plant</h3>
                <p>What?! All right. Well, take care of yourself, Han. I guess that's what you're best at, ain't it? No! Alderaan is peaceful. We have no weapons. You can't possibly… All right. Well, take care of yourself, Han. I guess that's what you're best at, ain't it?</p>
            </div>
            <div class="container-things">
                <img src="img/wild-town-todo.jpg" alt="Picture of a wild city" srcset="">
                <h3>Wild town</h3>
                <p>What?! All right. Well, take care of yourself, Han. I guess that's what you're best at, ain't it? No! Alderaan is peaceful. We have no weapons. You can't possibly… All right. Well, take care of yourself, Han. I guess that's what you're best at, ain't it?</p>
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