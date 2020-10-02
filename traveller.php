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
        <div class="banniere"></div>
    </header>
    <main>
        <div class="global-card-container">
            <div class="card-container">
                <div class="car-container-hidden"></div>
                <div class="card-header"></div>
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