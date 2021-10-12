<!-- Creare una variabile con un paragrafo 
di testo a vostra scelta (possibilmente corposo).

Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente 
tramite parametro GET.

Stampare di nuovo il paragrafo e la sua lunghezza, 
dopo aver sostituito con tre asterischi (***) 
tutte le occorrenze della parola da censurare.
-->

<!DOCTYPE html>
<?php 
  $paragraph='Con il termine paragrafo si fa riferimento a due concetti diversi.Il paragrafo (o capoverso) è innanzitutto una porzione di testo formata da uno o più periodi e isolata da ciò che precede e ciò che segue. All’interno del paragrafo sono raggruppate porzioni di informazione omogenee, perciò il passaggio a un nuovo capoverso (il cosiddetto a capo) implica una pausa molto forte nel testo.Nell’editoria e nella scrittura con il computer il paragrafo è messo in evidenza con un breve rientro della riga di inizio del primo periodo del paragrafo o con una riga vuota tra un paragrafo e l’altro (paragrafo all’inglese).Con il termine paragrafo si intende anche una suddivisione interna a un capitolo, spesso dotata di titolo e isolata con soluzioni grafiche.';
  $parola= $_GET["parola"] ;
  $newParagraph = str_replace($parola, "***", $paragraph);

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>badWords</title>
</head>
<body>
    <h1>PARARGAFO DI TESTO: </h1>
    <p><?php echo $paragraph; ?></p>
    <h2>Lunghezza Paragrafo: <?php echo strlen($paragraph); ?> </h2>
    <h1>PARARGAFO DI TESTO: </h1>
    <h2>parola da nascondere: <?php echo $parola; ?></h2>
    <p><?php echo $newParagraph;?></p>
    <h2>Lunghezza Paragrafo: <?php echo strlen($newParagraph); ?> </h2>


    
</body>
</html>