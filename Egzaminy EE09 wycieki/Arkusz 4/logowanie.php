<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum o psach</title>
    <link rel="Stylesheet" href="./styl4.css" />
</head>
<body>
    <header>
        <h1>Forum wielbicieli psów</h1>
    </header>
    <main>
        <section id="left">
            <img src="./pliki4/obraz.jpg" alt="foksterier" />
        </section>
        <section id="right_first">
            <h2>Zapisz się</h2>
            <form action="./logowanie.php" method="POST">
                login: <input type="text" name="login" /><br />
                hasło: <input type="password" name="pass_one" /><br />
                powtórz hasło: <input type="password" name="pass_two" /><br />
                <input type="submit" name="submit" value="Zapisz" />
            </form>
            <?php 
            if(isset($_POST['submit'])){
                $login = $_POST['login'];
                $pass1 = $_POST['pass_one'];
                $pass2 = $_POST['pass_two'];
                $conn = mysqli_connect('localhost','root','','psy');
                
                if($login == "" || $pass1 == "" || $pass2 == ""){
                    echo "<p>wypełnij wszystkie pola</p>";
                } else {
                    $check = mysqli_query($conn,"SELECT login FROM uzytkownicy");
                    $assoc = mysqli_fetch_assoc($check);
                        if($login=$assoc['login']) {
                        echo "<p>login występuje w bazie, konto nie zostało dodane</p>";
                    } else if($pass1 != $pass2){
                        echo "<p>hasła nie są takie same, konto nie zostało dodane</p>";
                    } else {
                        $password = sha1($pass1);
                        $add = mysqli_query($conn, "INSERT INTO `uzytkownicy`(`login`, `haslo`) VALUES ('$login','$password');
                        ");
                        echo "<p>Konto zostało dodane</p>";}
                }   
                mysqli_close($conn);
            }
            ?>
        </section>
        <section id="right_second">
                <h2>Zapraszamy wszystkich</h2>
                <ol>
                    <li>właścicieli psów</li>
                    <li>weterynarzy</li>
                    <li>tych, co chcą kupić psa</li>
                    <li>tych, co lubią psy</li>
                </ol>
                <a href="./regulamin.html">Przeczytaj regulamin forum</a>
        </section>
    </main>
    <footer>
    Stronę wykonał: 00000000000
    </footer>
</body>
</html>