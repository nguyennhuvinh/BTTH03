<?php
class Article{
    private $id;
    private $title;
    private $author;
    private $publish;

    public function __construct($id, $title, $author, $publish){
        $this->id       =$id;
        $this->title    =$title;
        $this->author  =$author;
        $this->publish  =$publish;
    }

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id=$id;
    }

    public function getTitle(){
        return $this->title;
    }

    public function setTitle($title){
        $this->title = $title;
    }
    public function getAuthor(){
        return $this->author;
    }

    public function setAuthor($author){
        $this->author=$author;
    }
    public function getPublish(){
        return $this->publish;
    }

    public function setPublish($publish){
        $this->publish=$publish;
    }
}