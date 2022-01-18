<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal społecznościowy</title>
    <link href="styl5.css" rel="Stylesheet" />
</head>
<body>
    <header>
        <section id="header_left">
            <h2>Nasze osiedle</h2>
        </section>
        <section id="header_right">
            <?php 
            $conn1 = mysqli_connect('localhost','root','','portal');
            $query = mysqli_query($conn1, "SELECT COUNT(*) as liczba_wierszy from dane");
            $liczba = mysqli_fetch_assoc($query);
            echo "Liczba użytkowników portalu: ".$liczba['liczba_wierszy'];
            mysqli_close($conn1);
            ?>
        </section>
    </header>
    <main>
        <section id="main_left">
            <h3>Logowanie</h3>
            <form method="POST">
                Login:<br /><input type="text" name="login" /><br />
                Hasło:<br /><input type="password" name="password" /><br />
                <input type="submit" name="submit" value="Zaloguj"/>
            </form>
        </section>
        <section id="main_right">
            <h3>Wizytówka</h3>
            <?php 
            if(isset($_POST['submit'])){
                if($_POST['login'] != "" && $_POST['password'] != ""){
                    $conn2 = mysqli_connect('localhost','root','','portal');
                    $login = $_POST['login'];
                    $password = $_POST['password'];
                    $query2 = mysqli_query($conn2, "SELECT haslo from uzytkownicy WHERE login='$login';");
                    if(mysqli_num_rows($query2)>0){
                        $exists = 0;
                        while($assoc=mysqli_fetch_assoc($query2)){
                            if(sha1($password) == $assoc['haslo']){
                                $exists = 1;
                            }
                        }
                        if($exists==0){
                            echo "hasło nieprawidłowe";
                        } 
                        $query3 = mysqli_query($conn2, "SELECT login, rok_urodz, przyjaciol, hobby, zdjecie from uzytkownicy inner join dane on dane.id=uzytkownicy.id WHERE login='$login'");
                        while($assoc2=mysqli_fetch_assoc($query3)) { 
                                    echo "<div><img src=./pliki5/".$assoc2['zdjecie']." alt=osoba /><br />";
                                    echo "<h4>".$assoc2['login'].", ".date('Y')-$assoc2['rok_urodz']."</h4><br />";  
                                    echo "<p>".$assoc2['hobby']."</p><br />";
                                    echo "<h1><img src=./pliki5/icon-on.png alt=serce /> ".$assoc2['przyjaciol']."</h1><br />";
                                    echo "<a href=dane.html>Więcej informacji</a></div>";
                            }
                        
                    } else echo "login nie istnieje";
                }
            }
            ?>
        </section>
    </main>
    <footer>
        Stronę wykonał: 00000000000
    </footer>
</body>
</html>