<html>
<head>
    <title>Tablice, zadanie 4, Michał Surówka</title>
</head>
<body>
    <?php
    $tab = array('Poniedziałek' => array('Fizyka Rozszerzona', 'Matematyka', 'Matematyka', 'Angielski', 'Język Polski', 'Język Polski', 'Religia'),
                'Wtorek' => array('-', '-', 'Systemy Operacyjne', 'Godzina Wychowawcza', 'Naprawa Komputera', 'Sieci Komputerowe', 'Bazy Danych', 'Urządzenia Peryferyjne'), 
                'Środa' => array('Programowanie', 'WF', 'Fizyka Rozszerzona', 'Naprawa Komputera', 'Matematyka', 'Język Angielski', 'Systemy Operacyjne', 'Systemy Operacyjne'),
                'Czwartek' => array('Historia', 'Matematyka', 'Język Polski', 'Religia', 'Urządzenia Peryferyjne', 'Aplikacje Internetowe', 'Aplikacje Internetowe', 'Aplikacje Internetowe'),
                'Piątek' => array('Sieci Komputerowe', 'Rozszerzona Fizyka', 'WF', 'WF', 'Bazy Danych', 'Język Angielski', 'Programowanie', 'Programowanie'));
    
    echo '<pre>';
	print_r($tab);
	echo '</pre>'
    ?>
</body>
</html>