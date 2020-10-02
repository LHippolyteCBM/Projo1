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
    

    <main class="container-all">
        <h2 class="booking-h1">Booking</h2>
        <div class="container-form">
            <div class="block-left-form">
                <label>
                    <br><input placeholder="Destination" type="text" name="name"/> <br>
                </label>
                <label>
                    <br> <input placeholder="Duration" type="text" name="Duration"/> <br>
                </label>
                <label>
                    <br><input placeholder="Departure date" type="text" name="Departur"/><br>
                </label>
            </div>
            <div class="block-right-form">
                <label>
                    <br><input placeholder="Budget" type="text" name="Buget"/><br>
                </label>
                <label>
                    <br><input placeholder="Number of adults" type="text"" name="Number of adults"/><br>
                </label>
                <label>
                    <br><input placeholder="Number of childrens" type="text" name="Number of children"/><br>
                </label>
            </div>
        </div>
        <div class="block-cont-form">
                <label>
                    <br><textarea placeholder="Comments" type="text" name="Comments"  rows="10" cols="60" > </textarea><br>
                </label>
        </div>
        <div class="send-input-container">
                <label>
                    <input type="submit" value="Send" class="send"/>
                </label>
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