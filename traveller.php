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
        
    <div class="card">
        <div class="traveller-card-header">
          <h1>Shutle</h1>
        </div>
        <div class="traveller-card-body">
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
          </p>
          <!-- <a href="#" class="btn">Read more</a> -->
        </div>
      </div>
      <div class="card">
        <div class="traveller-card-header">
          <h1>Orbital Elevator</h1>
        </div>
        <div class="traveller-card-body">
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
          </p>
          <!-- <a href="#" class="btn">Read more</a> -->
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