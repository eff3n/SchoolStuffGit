<html>
<head>
    <title>Tablice, zadanie 3, Michał Surówka</title>
</head>
<body>
    <?php
    $tab = array('Ford' => array('Mustang', 'Focus', 'Fiesta', 'Mondeo'),
                'Subaru' => array('Forester', 'Impreza', 'XV', 'Legacy'), 
                'Opel' => array('Astra', 'Corsa', 'Insignia', 'Vectra'),
                'Renault' => array('Laguna', 'Megane', 'Clio', 'Fluence'),
                'Mercedes' => array('A-klasa', 'G-Klasa', 'C-Klasa', 'B-Klasa'));
    
    ksort($tab);
    sort($tab['Ford']);
    foreach($tab as $key => $value)
    {
        sort($tab[$key]);
    }
    
    echo '<pre>';
	print_r($tab);
	echo '</pre>'
    ?>
</body>
</html>