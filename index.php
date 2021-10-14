<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Snacks</title>
</head>
<body>

<!-- primo snack -->

 <!-- Creare un array di array. Ogni array figlio avrà come chiave una
    data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di
    post associati a quella data. Stampare ogni data con i relativi post.
    Qui l'array di esempio: https://www.codepile.net/pile/R2K5d68z -->

<?php

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];
?>
    <!-- <div>
        <?php foreach ($posts as $data => $post){; ?>
            <h1><?php echo $data ; ?></h1>
            
            <ol>
                <?php foreach ($post as $value); ?>
                <li><?php echo $value['title'] . ' ' . $value['author'] . ' ' . $value['text'] ; ?></li>
            </ol>
            
        <?php }; ?>
    </div> -->

    <!-- fine primo snack -->

    <!-- secondo snack -->

    <!-- Creare un array con 15 numeri casuali, 
        tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta -->

    <?php 

        $totalNum = [];

        for ($i = 0; $i < 15; $i++){

            $randomNmb = rand(1,100);

            if ($randomNmb != in_array($totalNum) ){
                array_push($totalNum, $randomNmb);
            }
        };

        // var_dump($totalNum)
    
    ; ?>

    <!-- fine secondo snack -->

    <!-- terzo snack -->

    <!-- Utilizzare questo array: https://pastebin.com/CkX3680A
    Stampiamo il nostro array mettendo gli insegnanti in un
    rettangolo grigio e i PM in un rettangolo verde. -->

    <?php
 
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];
 
?>

<!-- <div class="gray cube">
    <?php foreach ($db['teachers'] as $insegnante){; ?>
    <h1>
        <?php echo $insegnante['name'] . ' ' . $insegnante['lastname'] ; ?>
    </h1>
    <?php }; ?>   
</div>

<div class="green cube">
    <?php foreach ($db['pm'] as $insegnante){; ?>
    <h1>
        <?php echo $insegnante['name'] . ' ' . $insegnante['lastname'] ; ?>
    </h1>
    <?php }; ?>
</div> -->

<!-- fine terzo snack -->

<!-- quarto snack -->

 <!-- Creare un array contenente qualche alunno di un'ipotetica classe. 
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
Stampare Nome, Cognome e la media dei voti di ogni alunno. -->


<?php

$alunni = [
                [
                'nome' => 'Mario',
                'cognome' => 'Rossi',
                'voti' => [5,7,9,4,3,10]
                ],
                [
                'nome' => 'Mario',
                'cognome' => 'Bianchi',
                'voti' => [6,7,2,8,1,3,]
                ],
                [
                'nome' => 'Piero',
                'cognome' => 'Rizzo',
                'voti' => [5,9,3,2,8,7,10,]
                ],
                [
                'nome' => 'Maercello',
                'cognome' => 'Bini',
                'voti' => [8,9,3,4,7,6,]
                ],
                [
                'nome' => 'Patroclo',
                'cognome' => 'Rossi',
                'voti' => [7,9,3,8,7,4,]
                ],
                [
                'nome' => 'Paolo',
                'cognome' => 'Murgia',
                'voti' => [5,7,9,4,3,6]
                ],
                
] 

; ?>


<!-- <div>
    <?php foreach($alunni as $alunno){; ?>
        <h1><?php echo $alunno['nome'] . ' ' . $alunno['cognome'] . ' : '
        . array_sum($alunno['voti']) / count($alunno['voti']); ?>
        
        </h1>

    <?php }; ?>
</div> -->

<!-- fine quarto snack -->

<!-- quinto snack -->

    <!--  
    Prendere un paragrafo abbastanza lungo, contenente diverse frasi. 
    Prendere il paragrafo e suddividerlo in tanti paragrafi. 
    Ogni punto un nuovo paragrafo.
    -->

<?php 

$paragrafo = '<a href="#">NEW YORK</a> – Non è solo la crisi dei camionisti in Gran Bretagna che costringe l’esercito di Sua Maestà ad occuparsi della distribuzione dei carburanti alle pompe di benzina. O un problema di insufficiente produzione di microchip nelle fabbriche asiatiche che rallenta l’attività delle industrie dipendenti, in tutto il mondo, dai microprocessori: computer, cellulari e videogiochi, ovviamente, ma anche auto, elettrodomestici, apparecchiature sanitarie e tutto ciò che diventa «intelligente» con l’inserimento di sensori .

I colli di bottiglia causati dalla Covid economy sono ormai innumerevoli, diffusi in tutto il mondo e coinvolgono tutti i punti delle catene logistiche alle quali è affidato il trasporto di prodotti, semilavorati e materie prime: disponibilità di container, di navi da trasporto, congestione dei porti, carenza di camion e camionisti, limiti della capacità dei depositi. Su tutto, poi, il fenomeno della carenza di mano d’opera che emerge ovunque nei settori più disparati.';

$paragrafiDivisi = explode(' . ', $paragrafo)

; ?>

<!-- <div>
    <h1>
        <?php echo $paragrafo; ?>
    </h1>

    <ol>
        <?php foreach($paragrafiDivisi as $paragrafoSingolo){; ?>
            <li><?php explode($paragrafiDivisi) ; ?>
            </li>
        <?php }; ?>
        
    </ol>
</div> -->

    
    

</body>
</html>