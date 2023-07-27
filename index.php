<?php

//1

class Rectangle {
    protected $length;
    protected $width;
    public function __construct($length, $width)
    {
        $this -> length = $length;
        $this -> width = $width;
    }

    public function area () {
        return $this -> length * $this -> width;
    }

}
class Square extends Rectangle {
    public $sq;
    public function __construct($sq)
    {
        $this -> length = $sq;
        $this -> width = $sq;
    }

}

$rec = new Rectangle(5, 4);
echo 'Rec= ' . $rec->area () . '<br>'; // 20
$sq = new Square(6);
echo 'Sq= ' . $sq->area (); // 36


//2

abstract class User {
    protected $username;
    abstract public function stateYourRole();

    public function set_username ($username) {
        $this -> username = $username;
    }
    public function get_username () {
        return $this -> username;
    }
}
class Admin extends User {
    public function stateYourRole(){
        return 'admin';
    }
}
class Viewer extends User {
    public function stateYourRole(){
        return 'viewer';
    }
}
$obj = new Admin ();
$obj -> set_username('Balthazar');
echo '<br>' . $obj -> get_username();


//3

// abstract class User
// {
// protected $scores = 0;
// protected $numberOfArticles = 0;
//     public function setNumberOfArticles($int) {
//         $this -> numberOfArticles = $int;
//     }
//     public function getNumberOfArticles() {
//         return $this -> numberOfArticles;
//     }
//     abstract public function calcScores ();
// }
// class Author extends User {
//     public function calcScores () {
//         return $this -> scores = $this -> numberOfArticles * 10 + 20;
//     }
// }
// class Editor extends User {
//     public function calcScores () {
//         return $this -> scores = $this -> numberOfArticles * 6 + 15;
//     }
// }
// $author1 = new Author ();
// $editor1 = new Editor ();
// $author1 -> setNumberOfArticles(8);
// $editor1 -> setNumberOfArticles(15);
// echo 'author= ' . $author1 -> calcScores() . '<br>';
// echo 'editor= ' . $editor1 -> calcScores();
