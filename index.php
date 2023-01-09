<!-- Ciao ragazzi,
esercizio di oggi:
nome repo: php-oop-1
Oggi pomeriggio ripassate i primi concetti di classe, variabili e metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
 - è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
Bonus 1:
Modificare la classe Movie in modo che accetti piú di un genere.
Bonus 2:
Creare un layout completo per stampare a schermo una lista di movies.
Facciamo attenzione all’organizzazione del codice, suddividendolo in appositi file e cartelle. Possiamo ad esempio organizzare il codice
- creando un file dedicato ai dati (tipo le array di oggetti) che potremmo chiamare db.php
- mettendo ciascuna classe nel proprio file e magari raggruppare tutte le classi in una cartella dedicata che possiamo chiamare classes/
- organizzando il layout dividendo la struttura ed i contenuti in file e parziali dedicati. -->

<?php

class Movie {
  public $title;
  public $genre;
  public $duration;
  public $year;
  private $discount = 0;

  function __construct($_title, $_genre, $_duration, $_year, $_discount)
  {
    $this->title = $_title;
    $this->genre = $_genre;
    $this->duration = $_duration;
    $this->year = $_year;
    $this->discount = $_discount;
  }

  public function setDiscount($_vote){
    if($_vote > 4){
      $this->discount = 40;
    }
  }
  public function getDiscount() {
    return $this->discount;
  }
  
}

$film1 = new Movie("Harry Potter", "Fantasy", "2:49", 2001, $_discount);
echo $film1->title;
echo $film1->genre;
echo $film1->duration;
echo $film1->year;
echo $film1->setDiscount(5);

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>il discount è : <?php echo $film1->getDiscount(); ?></h1>
</body>
</html>