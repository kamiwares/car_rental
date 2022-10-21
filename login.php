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
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200;0,400;1,700&display=swap" rel="stylesheet">
</head>
<body>
    <?php
        session_start();
            if(isset($_SESSION['login'])&&$_SESSION['login']==true){
                header('Location: admin.php');
            }
    ?>
    <nav>
        <div class="nav-option">Rent a car</div>
        <div class="nav-option">Znajdź samochód</div>
        <div class="nav-option">Opinie</div>
        <div class="nav-option">Cennik</div>
    </nav>
    <div id="banner" style="height: 100vh">
        <div id="container">
            <h1>Zaloguj jako administrator</h1>
            <form action="login.php" method="POST">
                Login: <input name="login" type="text">
                Hasło: <input name="password" type="password">
                <input type="submit" name="submit" value="Zaloguj">
            </form>
            <?php
            if(isset($_POST['submit'])){
                $login = $_POST['login'];
                $password = $_POST['password'];
                $loginTrue = 'admin';
                $passwordHashed = hash('md5', 'admin');
                if($passwordHashed == hash('md5', $password) && $login == $loginTrue){
                    echo "dobre hasło wariacie";
                    session_start();
                    $_SESSION['username']=$login;
                    $_SESSION['login']= true;
                    header("Location: admin.php");
                }
                else{
                    echo "Błędny login lub hasło";
                }
            }
        ?>
        </div>
    </div>
</body>
</html>