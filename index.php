<?php

//classe movie
class Movie
{   //dichiarazioni della variabile d'istanza
    public $title;
    public $year;
    public $genres;

    //definisco un costrutto
    public function __construct($_title, $_year, ...$_genres)
    {
        $this->title = $_title;
        $this->year = $_year;
        $this->genres = $_genres;
    }

    //un metodo per ottenere una breve descrizione del film
    public function getDesc()
    {
        return " Title: " . $this->title . ',<br>' . "Type of genre: " . implode(", ", $this->genres) . ',<br>' . "Production year: " . $this->year;
    }
}

//creazione di oggetti movie
$Batman_Begins = new Movie("Batman Begins", 2005, "Action", "Cinecomics", "Noir");
$Transformers = new Movie("Transformers", 2007, "Action", "Blockbuster");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>php-oop-1</title>
</head>

<body>
    <div class="container">
        <h1>PHP OOP 1</h1>
        <h2 class="py-5"><?php echo $Batman_Begins->getDesc() ?>.</h2>
        <hr>
        <h2 class="py-5"><?php echo $Transformers->getDesc() ?>.</h2>
    </div>
</body>

</html>