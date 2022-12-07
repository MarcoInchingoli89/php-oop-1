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
echo $dragon_heart->get_genre() . '<br>';
/* var_dump($dragon_heart); */
$nightmare = new Movie("Nightmare", "Horror", "Supernatural", "Splatter");
echo $nightmare->get_title() . '<br>';
echo $nightmare->get_genre();
/* $nightmare->genre = "Horror"; */
/* var_dump($nightmare); */










?>