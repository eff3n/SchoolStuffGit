<html>
    <head>
        <title>wypisanie</title>
        <style>
            table, td {
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
        <?php
        $conn=mysqli_connect('localhost','root','','meteo');
        $q1=mysqli_query($conn,"SELECT * FROM lokalizacja");
        echo "<table>";
        while($table=mysqli_fetch_assoc($q1)){
            echo "<tr><td>".$table['id']."</td><td>".$table['Nazwa']."</td><td>".$table['Adres']."</td>";
        }
        echo "</table>"
        ?>
    <body>
</html>