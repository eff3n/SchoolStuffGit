<?php 
$name = $_POST['name'];
$surname = $_POST['surname'];
$address = $_POST['address'];
$conn = mysqli_connect('localhost','root','','wedkowanie');
$query = mysqli_query($conn, "INSERT INTO `karty_wedkarskie`(`imie`, `nazwisko`, `adres`, `data_zezwolenia`, `punkty`) VALUES ('$name','$surname','$address',NULL,NULL)");
mysqli_close($conn);
?>