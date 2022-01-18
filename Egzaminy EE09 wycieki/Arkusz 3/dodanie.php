<?php 
if(isset($_POST['submit'])){
    $number = $_POST['number'];
    $first = $_POST['first'];
    $second = $_POST['second'];
    $third = $_POST['third'];
    $conn = mysqli_connect('localhost','root','','ee09');
    $query = mysqli_query($conn, "INSERT INTO `ratownicy`(`nrKaretki`, `ratownik1`, `ratownik2`, `ratownik3`) VALUES ('$number','$first','$second','$third')");
    echo "Do bazy zostało wysłane zapytanie: INSERT INTO `ratownicy`(`nrKaretki`, `ratownik1`, `ratownik2`, `ratownik3`) VALUES ('$number','$first','$second','$third')";
    mysqli_close($conn);
}
?>