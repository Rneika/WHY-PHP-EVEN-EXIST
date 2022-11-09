<?php
    class Document{
        public $author;
        public function author(){
            return "Author = ".$this->author;
        }
            public $date;
        public function date(){
            return "Tanggal = ".$this->date;
        }
    }
    class Book extends Document{
            public $title;
        public function title(){
            return "Judul = ".$this->title;
        }

    }
    class Subject extends Document{
            public $email;
        public function email(){
            return "Email For Business Inquiries : ".$this->email;
        }
            public $subject;
        public function subject(){
            return "Nama = ".$this->subject;
        }
    }
    $data = new Document();
    $data -> author = "Tere Liye";
    $data -> date = "20-2-2022";
    echo $data->author()."<br>";
    echo $data->date()."<br>";
    echo "<br>"."<br>";
    $data1 = new Book();
    $data1 -> title = "Selena";
    echo $data1->title()."<br>";
    echo $data->author()."<br>"."<br><br>";
    $data2 = new Subject();
    $data2 -> subject="Tere";
    echo $data2->subject()."<br>";
?>