<?php 
class Movie {
    public $name;
    public $lenght;
    public $genre;
    public $language;
    public $year;

    function __construct($_name, $_lenght, $_genre, $_language, $_year = "N/A")
    {
        $this->name = ucfirst($_name);
        $this->lenght = $_lenght;
        $this->genre = $_genre;
        $this->language = $_language;
        $this->year = $_year;
    }
}
?>