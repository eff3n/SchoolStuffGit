<!DOCTYPE html>
<html>
<head>
    <title>Nasze hobby</title>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="hobby.css" />
</head>
<body>
    <section id="banner">
        <h1>FORUM HOBBYISTYCZNE</h1>
    </section>
    <section id="left">
    <?php 
    $conn=mysqli_connect('localhost','root','','forum');
    $nick = $_POST['nick'];
    $zainteresowania = $_POST['hobby'];
    $zawod = $_POST['job'];
    $plec = $_POST['gender'];
    $login = $_POST['login'];
    $pass = $_POST['pass'];
    mysqli_query($conn, "INSERT INTO `uzytkownicy`(`nick`, `zainteresowania`, `zawod`, `plec`) VALUES ('$nick', '$zainteresowania', '$zawod', '$plec');");
    mysqli_query($conn, "INSERT INTO `konta`(`login`, `haslo`) VALUES ('$login', '$pass')");
    echo "Konto ".$nick." zostało zarejestrowane na forum hobbystycznym";
    mysqli_close($conn);
    ?>
    </section>
    <section id="right">
        <h3>TEMATYKA FORUM</h3>
        <ul>
            <li>Hodowle zwierząt</li>
            <ul>
                <li>psy</li>
                <li>koty</li>
            </ul>
            <li>Muzyka</li>
            <li>Gry komputerowe</li>
        </ul>
    </section>
</body>
</html>