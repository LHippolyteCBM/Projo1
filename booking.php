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
        <div class="container-all">
            <h2>Booking</h2>
            <div class="container-form-1">
                <div class="block-left-form-1">
                    <label>
                        <br><input placeholder="Destination" type="text" name="name" class="case"/> <br>
                    </label>
                    <label>
                        <br> <input placeholder="Duration" type="text" name="Duration" class="case"/> <br>
                    </label>
                    <label>
                        <br><input placeholder="Departure date" type="text" name="Departur" class="case"/><br>
                    </label>
                </div>
                <div class="block-right-form-1">
                    <label>
                        <br><input placeholder="Budget" type="text" name="Buget" class="case"/><br>
                    </label>
                    <label>
                        <br><input placeholder="Number of adults" type="text" name="Number of adults" class="case"/><br>
                    </label>
                    <label>
                        <br><input placeholder="Number of childrens" type="text" name="Number of children" class="case"/><br>
                    </label>
                </div>
            </div>
            <div class="container-form-2">
                <div class="block-left-form-2">
                     <label for="Civility"></label>
                        <select name="Civility" id="Civility-select" class="civility">
                            <option value="">--Please choose a civility--</option>
                            <option value="dog">M.</option>
                            <option value="cat">MME.</option>
                            <option value="hamster">Robot.</option>
                            <option value="others">Others.</option>
                        </select>
                    <label>
                        <br> <input placeholder="First name" type="text" name="Duration" class="case"/> <br>
                    </label>
                    <label>
                        <br><input placeholder="Adress" type="text" name="Departur" class="case"/><br>
                    </label>
                </div>
                <div class="block-right-form-2">
                    <label>
                        <br><input placeholder="Email" type="text" name="Buget" class="case"/><br>
                    </label>
                    <label>
                        <br><input placeholder="Second name" type="text" name="Number of adults" class="case"/><br>
                    </label>
                    <label>
                        <br><input placeholder="Country" type="text" name="Number of children" class="case"/><br>
                    </label>
                </div>
            </div>
                <div class="container-form-3">
                    <div class="block-cont-form">
                        <label>
                        <br><input placeholder="Comment" type="text" name="Comment" class="comment" rows="10" cols="60"/><br>
                        </label>
                    </div>
                    <div class="checkbox-container">
                    <div class="checkbox">
                        <input type="checkbox" name="I participate in the trip" value="true" id="je participe au voyage">
                        <label for="I participate in the trip">I participate in the trip</label>
                    </div>
                    

                        <div class="checkbox">
                            <input type="checkbox" name="I accept the general conditions" value="true" id="je participe au voyage">
                            <label for="I accept the general conditions">I accept the general conditions</label>
                        </div>
                        <div class="checkbox">
                            <input type="checkbox" name="I agree to be contacted by email" value="true" id="je participe au voyage">
                            <label for="I agree to be contacted by email">I agree to be contacted by email</label>
                        </div>

                        <div class="send-input-container">
                            <label>
                                <input type="submit" value="Book" class="send"/>
                            </label>  
                        </div>
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