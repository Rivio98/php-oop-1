<?php

class Movie
{
    // Variabili d'istanza
    public $title;
    public $director;
    public $genres;
    public $year;

    // Costruttore
    public function __construct($_title, $_director, $_year, ...$_genres)
    {
        $this->title = $_title;
        $this->director = $_director;
        $this->genres = $_genres;
        $this->year = $_year;
    }

    // Metodo per ottenere il titolo del film
    public function getTitle()
    {
        return $this->title;
    }

    // Metodo per ottenere i generi come stringa separata da virgole
    public function getGenres()
    {
        return implode(", ", $this->genres);
    }
}
