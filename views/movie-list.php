<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .movie-list {
            max-width: 800px;
            margin: 0 auto;
        }

        .movie {
            border: 1px solid #ccc;
            margin: 10px 0;
            padding: 10px;
        }

        h2 {
            margin: 0;
            font-size: 1.5em;
        }

        p {
            margin: 5px 0;
        }
    </style>
</head>

<body>
    <div class="movie-list">
        <?php foreach ($movies as $movie): ?>
            <div class="movie">
                <h2><?php echo $movie->getTitle(); ?></h2>
                <p><strong>Director:</strong> <?php echo $movie->director; ?></p>
                <p><strong>Genres:</strong> <?php echo $movie->getGenres(); ?></p>
                <p><strong>Year:</strong> <?php echo $movie->year; ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</body>

</html>