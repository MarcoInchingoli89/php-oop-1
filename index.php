<?php
/* definisci una classe ‘Movie’
all'interno della classe sono dichiarate delle variabili d'istanza
all'interno della classe è definito un costruttore
all'interno della classe è definito almeno un metodo
vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà */

/* Bonus 1:
Modificare la classe Movie in modo che accetti piú di un genere.
Bonus 2:
Creare un layout completo per stampare a schermo una lista di movies.
Facciamo attenzione all’organizzazione del codice, suddividendolo in appositi file e cartelle. */

class Movie
{
    public $title;
    public $genre;

    function __construct($_title, ...$_genre)
    {
        $this->title = $_title;
        $this->genre = $_genre;
    }
    function get_title()
    {
        return $this->title;
    }

    function get_genre()
    {

        return $this->genre;
    }
}

$dragon_heart = new Movie("Dragon Heart", "Fantasy", "Action", "Adventure");
/* $dragon_heart->genre = "Fantasy"; */
echo $dragon_heart->get_title() . '<br>';
echo implode(", ", $dragon_heart->get_genre()) . '<br>';
/* var_dump($dragon_heart); */
$nightmare = new Movie("Nightmare", "Horror", "Supernatural", "Splatter");
echo $nightmare->get_title() . '<br>';
echo implode(", ", $nightmare->get_genre());
/* $nightmare->genre = "Horror"; */
/* var_dump($nightmare); */










?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>

<body class="bg-secondary">
    <h1 class="text-center text-danger">Movies</h1>
    <div class="container">
        <div class="row">
            <div class="col">
                <h3 class="text-center">Title</h3>
                <ul>
                    <li></li>
                </ul>
            </div>
            <div class="col">
                <h3 class="text-center">Genre</h3>
            </div>
        </div>
    </div>
</body>

</html>