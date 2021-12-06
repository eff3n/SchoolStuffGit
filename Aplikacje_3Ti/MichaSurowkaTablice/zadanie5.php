<html>
<head>
    <title>Tablice, zadanie 5, Michał Surówka</title>
</head>
<body>
<?php
    $liczba=0;
    $tab = array();

    for($i = 0; $i < 100; $i++)
    {
    $liczba=$liczba+30;
    $tab[$i]=$liczba;
    }

    echo '<pre>';
	print_r($tab);
	echo '</pre>'
    ?>
</body>
</html>
