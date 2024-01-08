<?php 
class Movie {
    public $name;
    public $lenght;
    public $genre;
    public $language;
    public $ratings;
    public $year;

    public function averageRatings($ratings) {
        $average = array_sum($ratings) / count($ratings);
        return($average);
    }

    function __construct($_name, $_lenght, $_genre, $_language, $_ratings, $_year = "N/A")
    {
        $this->name = ucfirst($_name);
        $this->lenght = $_lenght;
        $this->genre = $_genre;
        $this->language = $_language;
        $this->ratings = $this->averageRatings($_ratings);
        $this->year = $_year;
    }
}
?>