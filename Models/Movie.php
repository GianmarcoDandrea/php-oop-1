<?php 
class Movie {
    public $name;
    public $lenght;
    public $genres;
    public $language;
    public $ratings;
    public $year;

    /**
     * @param array $ratings
     *  Return the average ratings
     * @return $average
     */
    public function averageRatings($ratings) {
        $average = array_sum($ratings) / count($ratings);
        return($average);
    }

    /**
     * @param string $_name
     * @param string $_lenght
     * @param string $_genres
     * @param string $_language
     * @param array $_ratings
     * @param string $_year
     */
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