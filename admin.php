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
            <?php
                session_start();
                if(isset($_SESSION['login'])&&$_SESSION['login']==true){
                    echo '<h1>Dodaj samochód</h1>';
                    echo '<div class="dodaj">';
                    echo '<form method="post" action="add.php">';
                    echo 'Marka: <input type="text" name="marka" id="marka" required>';
                    echo 'Model: <input type="text" name="model" id="model" required>';
                    echo 'Silnik: <input type="text" name="engine" id="engine" required>';
                    echo 'Opis: <input type="text" name="desc" id="desc" required>';
                    echo 'Rok produkcji: <input type="text" name="year" id="year" required>';
                    echo 'URL zdjęcia/ścieżka: <input type="text" name="pic" id="pic" required>';
                    echo '<input type="submit" name="submit">';
                    echo '</form>';
                    echo '<div class="car">';
                    echo '<div class="car-image" id="pic-view"></div>';
                    echo '<div class="desc">';
                    echo '<h1 id="marka-view">Marka</h1>';
                    echo '<h2 id="model-view">Model</h2>';
                    echo '<h3 id="year-view">Rok produkcji</h3>';
                    echo '<h3 id="desc-view">Opis</h3>';
                    echo '</div>';
                    echo '</div>';
                }
                else{
                    header('Location: index.php');
                }
        ?>
        </div>
        </div>
    </div>
</body>
</html>