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
                        <br> <input placeholder="Number of adults" type="text" name="Number of adults" class="case"/> <br>
                    </label>
                </div>
                <div class="block-right-form-1">
                    <label>
                        <br><input placeholder="Budget" type="text" name="Buget" class="case"/><br>
                    </label>
                    <label>
                        <br><input placeholder="Number of childrens" type="text" name="Number of childrens" class="case"/><br>
                    </label>
                </div>
            </div>
            <div class="container-form-2">
                <div class="block-left-form-2">
                    <div class="calendar">
                        <label for="Start date">Departure</label>
                        <input  type="date" id="when" name="trip-start"  value="3020-10-09"min="3020-10-09" max="3030-12-31" class="date">
                    </div>
                </div>
                <div class="block-right-form-2">
                    <div class="calendar">
                        <label for="Return date">Return</label>
                        <input type="date" id="start" name="trip-start" value="3020-10-10"min="3020-10-10" max="3030-12-31" class="date">
                    </div>
                </div>
            </div>
            <div class="container-form-3">
                <div class="block-left-form-3">
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
                <div class="block-right-form-3">
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
            <div class="container-form-4">
                     <input placeholder="Comment" type="text"  name="comment" class="comment"/>
            </div>
            <div class="container-form-5">
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
                </div>
            </div>
            <div class="container-form-6">
                        <div class="send-input-container">
                            <label>
                                <input type="submit" value="Book" class="send"/>
                            </label>  
                        </div>
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