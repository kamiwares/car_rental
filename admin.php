<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="view.js" defer></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200;0,400;1,700&display=swap" rel="stylesheet">
</head>
<body>
    <nav>
        <div class="nav-option">Rent a car</div>
        <div class="nav-option">Znajdź samochód</div>
        <div class="nav-option">Opinie</div>
        <div class="nav-option">Cennik</div>
        <div class="nav-option"><a href="logout.php">Zakończ sesje</a></div>
    </nav>
    <div id="banner" style="height: 100vh">
        <div id="container">
            <h1>Dodaj samochód</h1>
            <div class="dodaj">
            <form method="post" action="add.php">
                Marka: <input type="text" name="marka" id="marka" required value="adnuib">
                Model: <input type="text" name="model" id="model" required>
                Silnik: <input type="text" name="engine" id="engine" required>
                Opis: <input type="text" name="desc" id="desc" required>
                Rok produkcji: <input type="text" name="year" id="year" required>
                URL zdjęcia/ścieżka: <input type="text" name="pic" id="pic" required>
                <input type="submit" name="submit">
            </form>
            <div class="car">
                <div class="car-image" id="pic-view"></div>
                <div class="desc">
                    <h1 id="marka-view">Marka</h1>
                    <h2 id="model-view">Model</h2>
                    <h3 id="year-view">Rok produkcji</h3>
                    <h3 id="desc-view">Opis</h3>
                </div>
            </div>
            <?php
                if(isset($_SESSION['added'])){
                    echo $_SESSION['added'];
                }
            ?>
        </div>

        </div>
    </div>
</body>
</html>