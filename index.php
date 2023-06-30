<?php
    class Date{
        public $day;
        public $month;
        public $year;

        public function __construct($day, $month, $year){
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
            return  $this -> $date . " " . $this -> $date;
        }

        public getDate(){

        }
    }

    $movie1 = new movie("ritorno al futuro", "en", "action", $data1);
    $data1 = new date( "27", "october", "1985");

    $movie2 = new movie("Endgame", "en", "fantasy", "11 Apr 2019", $data2);
    $data2 = new date( "11", "april", "2019");

    // var_dump($movie1, $movie2);
    // echo "</br>" . $movie1 -> name;
    echo $movie1 -> getmovie();
  
    echo "</br>";
    // echo "</br>" . $movie2 -> name;
    echo $movie2 -> getmovie();

?>