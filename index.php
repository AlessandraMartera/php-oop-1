<?php
    // class FilmDate {
    //     public $day;
    //     public $month;
    //     public $year;

    //     public function __construct($day, $month, $year){
    //         $this -> day = $day;
    //         $this -> month = $month;
    //         $this -> year = $year;
    //     }
    // }

    class Movie {
        public $name;
        public $language;
        public $type;
        public $FilmDate;

        public function __construct($name, $language, $type, $FilmDate) {
            
            $this -> name = $name;
            $this -> language = $language;
            $this -> type = $type;
            $this -> FilmDate = $FilmDate;
        }

        public function getmovie() {
            return  $this -> name . " => " . $this -> language . ", " .  $this -> type . ", " . $this -> FilmDate;
        }

        
    }

    $movie1 = new movie ("ritorno al futuro", "en", "action", "11 Apr 2019");
    // $data1 = new FilmDate ( "27", "october", "1985");

    $movie2 = new movie ("Endgame", "en", "fantasy", "11 Apr 2019");
    // $data2 = new FilmDate ( "11", "april", "2019");

    // var_dump($movie1, $movie2);
    // echo "</br>" . $movie1 -> name;
    echo $movie1 -> getmovie();
  
    echo "</br>";
    // echo "</br>" . $movie2 -> name;
    echo $movie2 -> getmovie();

?>