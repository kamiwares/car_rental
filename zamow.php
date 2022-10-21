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
        <div class="nav-option">Rent a car</div>
        <div class="nav-option">Znajdź samochód</div>
        <div class="nav-option">Opinie</div>
        <div class="nav-option">Cennik</div>
    </nav>
    <div id="banner" style="height: 100vh">
        <div id="content">
            <div id="car-order">
            <?php

                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "rental";
                $conn = new mysqli($servername, $username, $password, $dbname);

                $sql = "SELECT id_car, marka, model, silnik, opis, rok_produkcji, photo_dir from cars where id_car=".$_GET['carid'];
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {

                        echo '<div class="car" style="display: flex;">';
                        echo '<div class="car-image" style="background-image: url('."'".$row["photo_dir"]."'
                        ".')">';
                        echo '</div>';

                        echo '<div class="desc">';
                        echo '<h1>'.$row["marka"]."<h1>";
                        echo '<h2>'.$row["model"]."<h2>";
                        echo '<h3>'."Rok produkcji: ".$row["rok_produkcji"]."<h3>";
                        echo '<h3>'.$row["opis"]."<h4>";
                        echo '</div>';
                        echo '</div>';
                        
                    }
                } else {
                    echo "0 results";
                }

                $conn->close();
                ?>
            </div>
            <div id="order-form">
                <h1>Zarezerwuj</h1>
                <div id="progress-wrapper">
                    <div class="progress"></div>
                    <div class="progress"></div>
                    <div class="progress"></div>
                </div>
                <form>
                    <div class="contact-section" id="first-contact">
                        Podaj liczbę dni: <input type="number" id="days">
                        Miejscowość: <input type="text">
                        <input type="button" onclick="document.getElementById('first-contact').style.display = 'none'; document.getElementById('second-contact').style.display = 'flex'; document.getElementsByClassName('progress')[1].style.backgroundColor = 'rgb(61, 228, 61)'" value="Dalej">
                    </div>
                    <div class="contact-section display-none" id="second-contact" >
                        Imię: <input type="text">
                        Nazwisko: <input type="text">
                        Email: <input type="text">
                        <input type="button" onclick="document.getElementById('second-contact').style.display = 'none'; document.getElementById('third-contact').style.display = 'flex'; document.getElementsByClassName('progress')[2].style.backgroundColor = 'rgb(61, 228, 61)'" value="Dalej">
                    </div>
                    <div class="contact-section display-none" id="third-contact">
                        PESEL: <input type="text">
                        Numer telefonu: <input type="text">
                        <input type="submit" value="Prześlij">
                    </div>
                </form>
                <div id="price"></div>
            </div>
        </div>
    </div>
    <style>
        .car{
            background-color: black;
        }
        .desc{
            color: white;

        }
        .car-image:hover{
            scale: 1;
        }
    </style>
</body>
</html>