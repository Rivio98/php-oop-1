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
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

</body>

</html>