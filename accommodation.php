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
        <div class="banniereaccommodation"></div>
    </header>
    <main>
        <div class="global-card-container">
            <div class="card">
                <div class="imgBx">
                    <img src="img/one.svg">
                </div>
                <div class="content">
                    <h2>Card One</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore dolorum quod saepe sunt asperiores autem dignissimos ab, hic eaque. Dolorum doloremque quas repellendus tenetur odio pariatur dicta error assumenda nemo?</p>
                </div>
            </div>
            <div class="card">
                <div class="imgBx">
                    <img src="img/two.svg">
                </div>
                <div class="content">
                    <h2>Card Two</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore dolorum quod saepe sunt asperiores autem dignissimos ab, hic eaque. Dolorum doloremque quas repellendus tenetur odio pariatur dicta error assumenda nemo?</p>
                </div>
            </div>
            <div class="card">
                <div class="imgBx">
                    <img src="img/three.svg">
                </div>
                <div class="content">
                    <h2>Card Three</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore dolorum quod saepe sunt asperiores autem dignissimos ab, hic eaque. Dolorum doloremque quas repellendus tenetur odio pariatur dicta error assumenda nemo?</p>
                </div>
            </div>
            <div class="card">
                <div class="imgBx">
                    <img src="img/four.svg">
                </div>
                <div class="content">
                    <h2>Card Four</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore dolorum quod saepe sunt asperiores autem dignissimos ab, hic eaque. Dolorum doloremque quas repellendus tenetur odio pariatur dicta error assumenda nemo?</p>
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