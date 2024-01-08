<?php 
class Movie {
    public $name;
    public $lenght;
    public $genres;
    public $language;
    public $ratings;
    public $year;

    public function averageRatings($ratings) {
        $average = array_sum($ratings) / count($ratings);
        return($average);
    }

    function __construct($_name, $_lenght, $_genres, $_language, $_ratings, $_year = "N/A")
    {
        $this->name = ucfirst($_name);
        $this->lenght = $_lenght;
        $this->genres = $_genres;
        $this->language = $_language;
        $this->ratings = $this->averageRatings($_ratings);
        $this->year = $_year;
    }
}
?>