<?php
    session_start( );
    require_once "connect.php";
    if(isset($_SESSION['login'])&&$_SESSION['login']==true){

        $marka = $_POST['marka'];
        $model = $_POST['model'];
        $desc = $_POST['desc'];
        $pic = $_POST['pic'];
        $engine = $_POST['engine'];
        $year = $_POST['year'];
        
        $sql = "insert into cars (marka, model, silnik, rok_produkcji, opis, photo_dir) values ('$marka', '$model', '$engine', '$year', '$desc', '$pic')";

        $mysqli = new mysqli($host,$db_user,$db_password,$db_name);

        if ($mysqli -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
        }
        $mysqli -> query($sql);
        $_SESSION['added']= "Dodano pomyślnie!";
        $mysqli -> close();
        header('Location: admin.php');

}
    else{
        header('Location: index.php');
    }
?>