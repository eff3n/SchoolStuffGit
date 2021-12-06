<?php
$conn=new mysqli('localhost','root','','dane');
$title=$_POST['title'];
$genre=$_POST['genre'];
$year=$_POST['year'];
$grade=$_POST['grade'];
switch ($genre){
    case 'Sci-Fi': $genre=1; break;
    case 'animacja': $genre=2; break;
    case 'dramat': $genre=3; break;
    case 'horror': $genre=4; break;
    case 'komedia': $genre=5; break;
    default: 0;
    }
$conn -> query("INSERT INTO filmy(gatunki_id, tytul, rok, ocena) VALUES ('$genre','$title','$year','$grade');");
echo "Film ".$title." został dodany do bazy";
mysqli_close($conn);
?>
