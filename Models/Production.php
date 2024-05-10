<?php

class Production {

    public $title;
    public $language;
    public $vote;

    public function setVote(){
        return $this->vote = rand(1, 10);
    }

    function __construct($_title, $_language){
        $this->title = $_title;
        $this->language = $_language;
        $this->setVote();

    }

}