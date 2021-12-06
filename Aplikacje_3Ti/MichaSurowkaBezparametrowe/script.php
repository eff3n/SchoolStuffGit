<?php	
$a = $_POST['liczba'];
function matma()
{
    global $a;
    $b = sqrt($a);
    echo "Pierwiastek kwadratowy liczby $a to: $b";
}
matma();
?>