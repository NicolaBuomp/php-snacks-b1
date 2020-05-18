<?php 

/**
 * Creiamo un array ‘matches’ contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario. 
 * Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
 * Stampiamo a schermo tutte le partite con questo schema:
 * Olimpia Milano - Cantù | 55-60
 */

$matches = [
    [
        'home' => 'LA Lakers',
        'away' => 'Golden State',
        'p_home' => rand(1,100),
        'p_away' => rand(1,100)
    ],
    [
        'home' => 'Cicago Bulls',
        'away' => 'Boston Celtic',
        'p_home' => rand(1,100),
        'p_away' => rand(1,100)
    ],
    [
        'home' => 'San Antonio Spurs',
        'away' => 'Paolo Duzioni',
        'p_home' => rand(1,100),
        'p_away' => rand(1,100)
    ],
    [
        'home' => 'Classe 12',
        'away' => 'Classe 11',
        'p_home' => rand(1,100),
        'p_away' => rand(1,100)
    ]
];



?>

<h1>Risultati giornata #1</h1>

<ul>
    <?php for ($i = 0; $i < count($matches); $i++) { ?>

        <li>
            <?php echo $matches[$i]['home']; ?> <span><strong> VS </strong></span> <?php echo $matches[$i]['away']; ?>
            <?php echo $matches[$i]['p_home']; ?> <span>-</span> <?php echo $matches[$i]['p_away']; ?>
        </li>

    <?php } ?>
    
</ul>