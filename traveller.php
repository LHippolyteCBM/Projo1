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
        <div class="banniere-traveller">
            <h1 class="title-traveller">Transports</h1>
        </div>
    </header>
    

    <main class="main-traveller">
    
    <h2 class="traveller-h2">How to come to Earth ?</h2>
    <div class="traveller-card-container">
        <div class="card">
            <div class="traveller-card-header">
                <h3>By Shutle</h3>
            </div>
            <div class="traveller-card-body">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            </p>
            </div>
            <div class="traveller-shuttle-image">
            </div>
        </div>
        
        <div class="card">
            <div class="traveller-card-header">
                <h3>By Orbital Elevator</h3>
            </div>
            <div class="traveller-card-body">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            </p>
            </div>
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