<?php
/* definisci una classe ‘Movie’
all'interno della classe sono dichiarate delle variabili d'istanza
all'interno della classe è definito un costruttore
all'interno della classe è definito almeno un metodo
vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà */

class Movie
{
    public $title;
    public $genre;

    function __construct($_title)
    {
        $this->title = $_title;
    }
    function get_title()
    {
        return $this->title;
    }
}












?>