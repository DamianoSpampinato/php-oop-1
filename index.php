<?php
class Movie{
    public $name;
    public $plot;
    public $director;
    public $genre
    //costruttore
    public function __construct($_name, $_plot,$_director, Address $_genre) {
        $this->name = $_name;
        $this->plot = $_plot;
        $this->director = $_director;
        $this->genre = $_genre;

    }
}

$jeeg = new Movie('Lo Chiamavano Jeeg Robot', 'trama', 'Gabriele Mainetti')
?>