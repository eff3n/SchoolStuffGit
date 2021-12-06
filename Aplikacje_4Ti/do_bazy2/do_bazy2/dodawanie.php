<?php
require("connect.php");
$imie = $_POST['a'];
$nazwisko = $_POST['b'];

$sql="INSERT INTO pracownicy(id, imie, nazwisko) VALUES ('','$imie','$nazwisko')";
$sql2= "SELECT imie, nazwisko from pracownicy";

$result = $conn->query($sql);
$result2 = $conn->query($sql2);

if($result2->num_rows>0)
{
	while($row = $result2->fetch_assoc())
	{
	echo "Imię".$row['imie']."Nazwisko : ".$row['nazwisko']."<br />";
	} 
}
else "brak rekordów";

?>