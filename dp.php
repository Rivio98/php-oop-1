<?php

require_once __DIR__ . '/Models/Movie.php';

$movies = [
    new Movie('Batman Begins', 'Christopher Nolan', 2005, "Noir", "Action", "Cinecomics"),
    new Movie('Transformers', 'Michael Bay', 2007, "Sci-Fi", "Action", "Adventure"),
    new Movie('Inception', 'Christopher Nolan', 2010, "Sci-Fi", "Action"),
    new Movie('The Godfather', 'Francis Ford Coppola', 1972, "Crime", "Drama"),
    new Movie('Interstellar', 'Christopher Nolan', 2014, "Sci-Fi", "Adventure"),
    new Movie('Pulp Fiction', 'Quentin Tarantino', 1994, "Crime", "Drama"),
];
