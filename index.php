<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="main.css">
    <script defer src="js.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200;0,400;1,700&display=swap" rel="stylesheet">
</head>
<body>
    <nav>
        <div class="nav-option"><a href="index.php">Rent a car</a></div>
        <div class="nav-option">Znajdź samochód</div>
        <div class="nav-option">Opinie</div>
        <div class="nav-option">Cennik</div>
    </nav>
    <div id="banner">
        <div id="quote">
            <h1>Wypożycz auto już dziś!</h1>
            <h2>Nasza flota składa się tylko z nowoczesnych i ekologicznych samochodów.</h2>
            <h3>Niska cena i zaufanie klientów sprawia, że działamy już od 1410 roku.</h3>
        </div>
    </div>
    <div id="flota">
        <h1>Nasza flota</h1>
        <div id="cars">

            <?php

                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "rental";
                $conn = new mysqli($servername, $username, $password, $dbname);

                $sql = "SELECT id_car, marka, model, silnik, opis, rok_produkcji, photo_dir from cars ORDER BY id_car DESC";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {

                        echo '<div class="car">';
                        echo '<div class="car-image" style="background-image: url('."'".$row["photo_dir"]."'
                        ".')">';
                        echo '</div>';

                        echo '<div class="desc">';
                        echo '<h1>'.$row["marka"]."<h1>";
                        echo '<h2>'.$row["model"]."<h2>";
                        echo '<h3>'."Rok produkcji: ".$row["rok_produkcji"]."<h3>";
                        echo '<h3>'.$row["opis"]."<h4>";
                        echo '</div>';
                        echo '<a class="order-button" href="zamow.php?carid='.$row["id_car"].'"'.'>Zamów</a>';
                        echo '</div>';
                        
                    }
                } else {
                    echo "0 results";
                }

                $conn->close();
            ?>
        </div>  
    </div>
    <footer>Car rental Sosnowiec ul. Zjebana 123 <div id="login"><a href="login.php">Zaloguj jako administrator</a></div></footer>
</body>
</html>