<?php

//classe movie
class Movie
{   //dichiarazioni della variabile d'istanza
    public $year;
    public $genre;
    public $title;

    //definisco un costrutto
    public function __construct($_year, $_genre, $_title)
    {
        $this->year = $_year;
        $this->genre = $_genre;
        $this->title = $_title;
    }

    //un metodo per ottenere una breve descrizione del film
    public function getDesc()
    {
        return " Title: " . $this->title . ",Type of genre " . $this->genre . ",Production year: " . $this->year;
    }
}

//creazione di oggetti movie
$Batman_Begins = new Movie(2005, "Cinecomics", "Batman Begins");
$Transformers = new Movie(2007, "Action,Blockbuster", "Transformers");

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
        <h2><?php echo $Batman_Begins->getDesc() ?>.</h2>

        <h2><?php echo $Transformers->getDesc() ?>.</h2>
    </div>
</body>

</html>