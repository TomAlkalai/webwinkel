<?php
require 'database.php';

//de sql query
$sql = "SELECT * FROM producten";

//hier wordt de query uitgevoerd met de database
$result = mysqli_query($conn,$sql);

/**
 * Hier wordt het resultaat ($result) omgezet
 * in een *multidimensionale associatieve array
 * in dit voorbeeld staat $all_users maar dit mag
 * voor bijvoorbeeld producten $all_products heten.
 * Maar dit kies je zelf
 */
$all_products = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/5154552836.js" crossorigin="anonymous"></script>
</head>
<body>
    <nav>
            <form>
                <input type="text">
                <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
            <div class="nav-icons">
                <ul>
                    <li><a href="#"><i class="fa-solid fa-cart-shopping"></i></a></li>
                    <li><a href="#"><i class="fa-solid fa-user"></i>  Inloggen</a></li>
                </ul>
            </div>
    </nav>
    <header>
        <div class="container">
        </div>
    </header>
    <main>
        <div class="container">
            <div class="genres">
                <div class="rock">
                    <p>Featured</p>
                    <h2>Rock</h2>
                </div>
                <div class="hiphop">
                    <p>Featured</p>
                    <h2>Hiphop</h2>
                </div> 
                <div class="pop">
                    <p>Featured</p>
                    <h2>Pop</h2>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="container">

        </div>
    </footer>
</body>
</html>