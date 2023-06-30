<?php
    class Date {
        public $day;
        public $month;
        public $year;

        public function __construct($day, $month, $year) {
            $this -> day = $day;
            $this -> month = $month;
            $this -> year = $year;
        }
    }

    class Movie {
        public $name;
        public $language;
        public $type;
        public Date $date;

        public function __construct($name, $language, $type, Date $date) {
            
            $this -> name = $name;
            $this -> language = $language;
            $this -> type = $type;
            $this -> date = $date;
        }

        public function getmovie() {
            return  $this -> name . " => " . $this -> language . ", " . $this -> type;
        }

        
    }

    $date1 = new Date( "27", "october", "1985");
    $date2 = new Date( "11", "april", "2019");


    $movie1 = new Movie("ritorno al futuro", "en", "action", $date1);
   
    
    $movie2 = new Movie("Endgame", "en", "fantasy", $date2);
  

    // var_dump($movie1, $movie2);
    // echo "</br>" . $movie1 -> name;
    echo $movie1 -> getmovie();
  
    echo "</br>";
    // echo "</br>" . $movie2 -> name;
    echo $movie2 -> getmovie();

?>